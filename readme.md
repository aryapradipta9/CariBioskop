# CariBioskop
## Deskripsi
CariBioskop merupakan single page application (SPA) yang dapat menampilkan film yang tersedia di daerah tertentu dan menamplikan jumlah kursi yang kosong.

## Framework
Untuk back-end akan digunakan Laravel, sedangkan untuk front-end akan digunakan Angular.js

## To Do List
- [x] Membuat Repository
- [x] Membuat Readme pertama dan Gitignore
- [x] Menentukan Framework
- [x] Membuat desain front-end
- [x] Implementasi front-end
- [x] Implementasi back-end
- [x] Pembuatan unittest

## Spesifikasi Aplikasi

Aplikasi ini menggunakan Laravel 5.1 dan juga AngularJS 1.2. Aplikasi ini harus selalu terhubung dengan internet karena membutuhkan bootstrap dan angularjs yang diunduh secara langsung.

Aplikasi ini menggunakan 3 database, yaitu Studio, Bioskop, dan Movie. Studio berisi data bioskop dan studio mana saja yang menayangkan film tersebut di suatu waktu. Bioskop berisi daftar bioskop yang tersedia di aplikasi beserta alamatnya. Movies berisi daftar film yang sedang tayang di semua bioskop
 
Untuk penggunaan, user perlu menginstall composer, melakukan generate key, melakukan migrasi melalu artisan, dan menjalankannya.