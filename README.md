## Requirements
- PHP 8.0 
- Mongodb 4.2 or or higher

## Set-up
1. Clone repository 
2. Masuk directory dengan menggunakan "cd vehicle"
3. jalankan perintah "composer i"
4. rename file .env.example menjadi .env
5. buat database menggunakan mongodb dengan nama vehicle
6. jalankan perintah php artisan db:seed
7. lakukan unit testing menggunakan php test
 - windows `vendor\bin\phpunit`
 - linux `./vendor/bin/phpunit` 
12. Jalankan service dengan `php artisan serve`
13. Layanan siap digunakan

[Documentasi](https://web.postman.co/documentation/18328201-e065dfd7-5ece-484f-82c3-1a391309f632/publish?workspaceId=04f50f55-930d-4442-8157-99a857668de4)
