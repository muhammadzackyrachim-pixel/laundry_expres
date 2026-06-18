git add .
set /p pesan= "Enter commit message: "
git commit -m "%pesan%"
git push -u origin main