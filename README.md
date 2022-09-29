Hướng dẫn sử dụng:
- [Cài đặt](#cài-đặt)
    - [Cài đặt project](#cài-đặt-project)
    - [Cấu hình kết nối với database](#cấu-hình-kết-nối-với-database)
    - [Cài đặt các package của dự án](#cài-đặt-các-package-của-dự-án)

- [Viết HTML và SCSS](#viết-html-và-scss)
    - [HTML](#html)
    - [SCSS](#scss)
        - [Cấu hình `webpack.mix.js`](#cấu-hình-webpackmixjs)
        - [Biên dịch SCSS](#biên-dịch-scss)
    - [Đường dẫn HTML](#đường-dẫn-đến-html)



## Cài đặt

### Cài đặt project


```git clone https://github.com/webpress-theme/Laravel.git```

### Cấu hình kết nối với database
>Dự án cần môi trường xampp có phiên bản php8 trở lên: https://www.apachefriends.org/download.html

Tạo 1 file có tên .env từ file .env.example bằng lệnh:

``` cp .env.example .env ```

    Cần chú ý trong .env (đây là phần cấu hình database):
         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=[têndatabase]
         DB_USERNAME=root
         DB_PASSWORD=

### Cài đặt các package của dự án

Cài đặt các package bằng composer: https://getcomposer.org/download/

```composer i```

Cài các package bằng npm: https://nodejs.org/en/download/

```npm i```

Tạo bảng trong cơ sở dữ liệu:

```php artisan migrate```

Tạo key:

```php artisan key:generate```

Chạy host:
    
```php artisan serve```

## Viết HTML và SCSS

### HTML
- được viết trong `resource/views` và đặt tên dưới dạng `[name].blade.php`
    
### SCSS 
- được viết ở thư mục `resources/sass`
 
- được cấu hình ở `webpack.mix.js`

#### Cấu hình `webpack.mix.js`

```mix.sass('resources/sass/filename.scss', 'public/css'); //resources/sass/filename.scss -> public/css/filename.css ```

#### Biên dịch scss

```npm run watch```

>Khi thay đổ cấu hình `webpack.mix.js` chạy lại lệnh biên dịch 


### Đường dẫn đến HTML
- được cấu hình ở `routes/web.php`

Hướng dẫn cấu hình
```
Route::get('/', function () {
    return view('homepage');
});
// gõ / trên url sẽ trả về resources/view/homepage.blade.php
```














