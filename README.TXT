LANGKAH - LANGKAH KONFIGURASI
1. git clone https://github.com/yjhand12/STEPA-Polibest.git
2. composer install
3. cp env.example .env
4. php artisan key:generate
5. edit file .env dan ubah Database
6. php artisan migrate:fresh --seed
7. php artisan serve