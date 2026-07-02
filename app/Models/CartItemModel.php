<?php
namespace App\Models;

use CodeIgniter\Model;

class CartItemModel extends Model
{
    protected $table            = 'cart_items';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $useTimestamps    = true;
    
    protected $allowedFields    = [
        'session_id',
        'layanan_id',
        'nama_layanan',
        'harga_satuan',
        'berat_kg',
        'jumlah',
        'subtotal'
    ];

    // Get cart items by session
    public function getCartBySession($sessionId)
    {
        return $this->where('session_id', $sessionId)->findAll();
    }

    // Get cart total
    public function getCartTotal($sessionId)
    {
        return $this->selectSum('subtotal')
                    ->where('session_id', $sessionId)
                    ->first()['subtotal'] ?? 0;
    }

    // Get cart item count
    public function getCartCount($sessionId)
    {
        return $this->where('session_id', $sessionId)->countAllResults();
    }

    // Clear cart
    public function clearCart($sessionId)
    {
        return $this->where('session_id', $sessionId)->delete();
    }

    // Update item quantity
    public function updateQuantity($id, $quantity, $berat)
    {
        $item = $this->find($id);
        if ($item) {
            $subtotal = $item['harga_satuan'] * $berat * $quantity;
            return $this->update($id, [
                'jumlah'   => $quantity,
                'berat_kg' => $berat,
                'subtotal' => $subtotal
            ]);
        }
        return false;
    }
}