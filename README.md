Hướng dẫn sử dụng:
Dự án cần môi trường xampp có phiên bản php8: https://www.apachefriends.org/download.html
B1: Cấu hình kết nối với database:
    + tạo 1 file có tên .env từ file .env.example
    - Cần chú ý trong .env (đây là phần cấu hình database):
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=[têndatabase]
        DB_USERNAME=root
        DB_PASSWORD=

Cài đặt các package của dự án, chạy trong terminal của dự án
B2: Cài đặt các package bằng composer: https://getcomposer.org/download/
    - composer i
B3: Cài các package bằng npm: https://nodejs.org/en/download/
    - npm i
B4: tạo bảng trong cơ sở dữ liệu:
    - php artisan migrate
B5: Tạo key:
    - php artisan key:generate
Bước 6: Chạy host:
    - php artisan serve

HTML, CSS được viết trong thư mục resources/views:

SCSS:
    - Scss được viết ở thư mục: resources/sass
    - Scss được cấu hình tại webpack.mix.js: 
        - Hướng dẫn sử dụng:
        mix.sass('resources/sass/global.scss', 'public/css');
        resources/sass/global.scss sẽ được dịch sang public/css/global.css












