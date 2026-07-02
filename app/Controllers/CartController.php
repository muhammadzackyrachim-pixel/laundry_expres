<?php
namespace App\Controllers;

use App\Models\CartItemModel;

class CartController extends BaseController
{
    protected $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartItemModel();
    }

    // Display cart page
    public function index()
    {
        $sessionId = session_id();
        $cartItems = $this->cartModel->getCartBySession($sessionId);
        $cartTotal = $this->cartModel->getCartTotal($sessionId);
        $cartCount = $this->cartModel->getCartCount($sessionId);

        $data = [
            'title'     => 'Keranjang Belanja',
            'cartItems' => $cartItems,
            'cartTotal' => $cartTotal,
            'cartCount' => $cartCount
        ];

        return view('cart/index', $data);
    }

    // Add item to cart
    public function add()
    {
        $sessionId = session_id();
        
        $layananId   = $this->request->getPost('layanan_id');
        $namaLayanan = $this->request->getPost('nama_layanan');
        $hargaSatuan = $this->request->getPost('harga_satuan');
        $beratKg     = $this->request->getPost('berat_kg') ?? 1;

        // Karena form hanya mengirim berat_kg, kita set jumlah tetap 1
        $jumlah = 1; 

        // Hitung subtotal (Harga x Berat)
        $subtotal = $hargaSatuan * $beratKg;

        // Cek apakah layanan yang sama sudah ada di keranjang
        $existingItem = $this->cartModel
            ->where('session_id', $sessionId)
            ->where('layanan_id', $layananId)
            ->first();

        if ($existingItem) {
            // Jika sudah ada, TAMBAHKAN berat baru ke berat lama
            $newBerat    = $existingItem['berat_kg'] + $beratKg;
            $newSubtotal = $hargaSatuan * $newBerat;
            
            $this->cartModel->update($existingItem['id'], [
                'berat_kg' => $newBerat,
                'subtotal' => $newSubtotal
            ]);
        } else {
            // Jika belum ada, tambahkan sebagai item baru
            $this->cartModel->save([
                'session_id'   => $sessionId,
                'layanan_id'   => $layananId,
                'nama_layanan' => $namaLayanan,
                'harga_satuan' => $hargaSatuan,
                'berat_kg'     => $beratKg,
                'jumlah'       => $jumlah,
                'subtotal'     => $subtotal
            ]);
        }

        return redirect()->to('/cart')->with('success', 'Item berhasil ditambahkan ke keranjang!');
    }

    // Update cart item (saat user mengubah input berat di halaman cart)
    public function update($id)
    {
        $beratKg = $this->request->getPost('berat_kg');
        $item    = $this->cartModel->find($id);

        if ($item) {
            // Hitung ulang subtotal berdasarkan berat yang baru
            $newSubtotal = $item['harga_satuan'] * $beratKg;
            
            $this->cartModel->update($id, [
                'berat_kg' => $beratKg,
                'subtotal' => $newSubtotal
            ]);
        }

        return redirect()->to('/cart')->with('success', 'Keranjang berhasil diupdate!');
    }

    // Remove item from cart
    public function remove($id)
    {
        $this->cartModel->delete($id);
        return redirect()->to('/cart')->with('success', 'Item berhasil dihapus dari keranjang!');
    }

    // Clear entire cart
    public function clear()
    {
        $sessionId = session_id();
        $this->cartModel->clearCart($sessionId);
        return redirect()->to('/cart')->with('success', 'Keranjang berhasil dikosongkan!');
    }

    // Checkout page
    public function checkout()
    {
        $sessionId = session_id();
        $cartItems = $this->cartModel->getCartBySession($sessionId);
        $cartTotal = $this->cartModel->getCartTotal($sessionId);

        if (empty($cartItems)) {
            return redirect()->to('/cart')->with('error', 'Keranjang kosong!');
        }

        $data = [
            'title'     => 'Checkout',
            'cartItems' => $cartItems,
            'cartTotal' => $cartTotal
        ];

        return view('cart/checkout', $data);
    }

    // Process checkout
    public function processCheckout()
    {
        $sessionId = session_id();
        $cartItems = $this->cartModel->getCartBySession($sessionId);
        $cartTotal = $this->cartModel->getCartTotal($sessionId);

        // Nantinya data ini disimpan ke tabel transaksi
        $namaPelanggan    = $this->request->getPost('nama_pelanggan');
        $noHp             = $this->request->getPost('no_hp');
        $alamat           = $this->request->getPost('alamat');
        $metodePembayaran = $this->request->getPost('metode_pembayaran');

        // Kosongkan keranjang setelah checkout
        $this->cartModel->clearCart($sessionId);

        return redirect()->to('/')->with('success', 'Pesanan berhasil dibuat! Total: Rp ' . number_format($cartTotal, 0, ',', '.'));
    }
}