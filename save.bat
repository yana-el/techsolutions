cd C:\xampp\htdocs\sitetechsolution\bdd
mysqldumb -uroot techsolutions>techsolutions.sql
cd C:\xampp\htdocs\sitetechsolution
git add .
git commit -m "sauvegarde"
git push origin main
pause