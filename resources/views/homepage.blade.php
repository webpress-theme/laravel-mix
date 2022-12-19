{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layout.master')

{{-- Đặt title cho page --}}
@section('title', 'w22')

{{-- Đặt file css cho page --}}
@section('file', 'home-page')

{{-- Đặt class cho body --}}
@section('page', 'home-page')

@section('content')
    <main class="main">
        {{-- Slider Image --}}
        <section class="slider-image owl-carousel owl-theme position-relative dot--true nav--true dot--color-10">
            <div class="w-100 h-100">
                <img class="w-100 h-100" src="./images/slide-image.png" alt="">
            </div>
            <div class="w-100 h-100">
                <img class="w-100 h-100" src="./images/slide-image.png" alt="">
            </div>
            <div class="w-100 h-100">
                <img class="w-100 h-100" src="./images/slide-image.png" alt="">
            </div>
            <div class="w-100 h-100">
                <img class="w-100 h-100" src="./images/slide-image.png" alt="">
            </div>
        </section>
        {{-- End Slider Image --}}
        {{-- Flash Sale --}}
        <section class="flash-sale py-5 bg-color-10">
            <div class="container py-0 py-md-4 my-0 my-md-2 pe-0 pe-md-auto">
                <div class="row">
                    <div class="flash-sale__title d-flex flex-column flex-md-row align-items-center justify-content-center mb-3 pb-0 pb-md-2">
                        <div class="d-flex align-items-center me-2">
                            <img class="ps-1" src="./images/flash.png" alt="">
                            <h2>Flash Sale</h2>
                        </div>
                        <div class="d-flex align-item-center fs-4">
                            <div class="pe-1">
                                <span class="bg-color-1 p-1 rounded-4 color-10 fw-4">00</span>
                            </div>
                            <span class="pe-1 fw-4 color-8">:</span>
                            <div class="pe-1">
                                <span class="bg-color-1 p-1 rounded-4 color-10 fw-4">00</span>
                            </div>
                            <span class="pe-1 fw-4 color-8">:</span>
                            <div class="pe-1">
                                <span class="bg-color-1 p-1 rounded-4 color-10 fw-4">00</span>
                            </div>
                        </div>
                    </div>
                    <div class="flash-sale__product">
                        <div class="flash-sale__product__list owl-carousel owl-theme nav--true nav--outside nav--color-10">
                            <div class="flash-sale__product__list__item bg-color-10 rounded-10 position-relative">
                                <div class="flash-sale__product__list__item__img bg-color-4 rounded-10">
                                    <img src="./images/product-1.png" alt="">
                                </div>
                                <div
                                    class="sale__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="flash-sale__product__list__item__desc p-3">
                                    <div class="flash-sale__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="flash-sale__product__list__item__desc__price d-flex">
                                        <div class="flash-sale__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="flash-sale__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="flash-sale__product__list__item bg-color-10 rounded-10 position-relative">
                                <div class="flash-sale__product__list__item__img bg-color-4 rounded-10">
                                    <img src="./images/product-1.png" alt="">
                                </div>
                                <div
                                    class="sale__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="flash-sale__product__list__item__desc p-3">
                                    <div class="flash-sale__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="flash-sale__product__list__item__desc__price d-flex">
                                        <div class="flash-sale__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="flash-sale__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="flash-sale__product__list__item bg-color-10 rounded-10 position-relative">
                                <div class="flash-sale__product__list__item__img bg-color-4 rounded-10">
                                    <img src="./images/product-1.png" alt="">
                                </div>
                                <div
                                    class="sale__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="flash-sale__product__list__item__desc p-3">
                                    <div class="flash-sale__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="flash-sale__product__list__item__desc__price d-flex">
                                        <div class="flash-sale__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="flash-sale__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="flash-sale__product__list__item bg-color-10 rounded-10 position-relative">
                                <div class="flash-sale__product__list__item__img bg-color-4 rounded-10">
                                    <img src="./images/product-1.png" alt="">
                                </div>
                                <div
                                    class="sale__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="flash-sale__product__list__item__desc p-3">
                                    <div class="flash-sale__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="flash-sale__product__list__item__desc__price d-flex">
                                        <div class="flash-sale__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="flash-sale__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="flash-sale__product__list__item bg-color-10 rounded-10 position-relative">
                                <div class="flash-sale__product__list__item__img bg-color-4 rounded-10">
                                    <img src="./images/product-1.png" alt="">
                                </div>
                                <div
                                    class="sale__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="flash-sale__product__list__item__desc p-3">
                                    <div class="flash-sale__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="flash-sale__product__list__item__desc__price d-flex">
                                        <div class="flash-sale__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="flash-sale__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lash-sale__button d-flex justify-content-center mt-3 pt-1 mt-md-4 pt-md-2">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Flash Sale --}}
        {{-- Sản phẩm chi tiết --}}
        <section class="product-detail bg-color-4 py-5">
            <div class="container py-0 py-md-4 my-0 my-md-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="product-detail__img-primary">
                            <div class="product-detail__img-primary__list owl-carousel owl-theme nav--true nav--color-10">
                                <div class="product-detail__img-primary__list__item">
                                    <img src="./images/product-d.png" alt="">
                                </div>
                                <div class="product-detail__img-primary__list__item">
                                    <img src="./images/product-d.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 product-detail__title">
                        <h2 class="mb-2">
                            Xe đạp địa hình Nhật MARUISHI FUJI
                        </h2>
                        <h4 class="color-8 mb-3 pb-3">10.890.000₫</h4>
                        <div class="product-detail__title__img__list d-flex flex-column flex-md-row align-items-center">
                            <div class="product-detail__title__img__list__item col-md-4 col-6 text-center">
                                <img class="rounded-circle" src="./images/product-d-m.jpg" alt="">
                                <p class="mt-2">Khung hợp kim nhôm siêu bền, siêu nhẹ</p>
                            </div>
                            <div class="product-detail__title__img__list__item col-md-4 col-6 text-center">
                                <img class="rounded-circle" src="./images/product-d-m.jpg" alt="">
                                <p class="mt-2">Khung hợp kim nhôm siêu bền, siêu nhẹ</p>
                            </div>
                            <div class="product-detail__title__img__list__item col-md-4 col-6 text-center">
                                <img class="rounded-circle" src="./images/product-d-m.jpg" alt="">
                                <p class="mt-2">Khung hợp kim nhôm siêu bền, siêu nhẹ</p>
                            </div>
                        </div>
                        <div class="product-detail__title__policy">
                            <div>
                                <img src="./images/cer.png" alt="">
                                <span class="ms-2 fw-4">Mua 1 tặng 5 (Bình nước, gọng bình nước, chắn bùn trước, sau, dầu tra xích, chuông)</span>
                            </div>
                            <div class="mt-2">
                                <img src="./images/cer.png" alt="">
                                <span class="ms-2 fw-4">Bảo hành 5 năm</span>
                            </div>
                        </div>
                        <div class="product-detail__title__button mt-md-3 pt-md-3 mt-3 pt-1 text-center text-md-start">
                            <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                                Mua ngay
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- End sản phầm chi tiết --}}
        {{-- Sản phẩm mới --}}
        <section class="product-latest py-5">
            <div class="container py-0 py-md-4 my-0 my-md-2 p-0 p-md-auto">
                <div class="row">
                    <div class="product-latest__title d-flex justify-content-center mb-1 mdb-md-2">
                        <h2 class="mb-0">
                            Sản phẩm mới
                        </h2>
                    </div>
                    <div class="product-latest__list owl-carousel owl-theme nav--true nav--outside nav--color-4 dot--true dot--color-9">
                        <div class="product-latest__list__item bg-color-10 rounded-10 position-relative hover-box-shadow my-4">
                            <div class="product-latest__list__item__img bg-color-4 rounded-10 position-relative">
                                <img src="./images/product-2.png" alt="">
                                <div class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                    <div
                                        class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                        <img src="./images/cart-p.svg" alt="">
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                        <img src="./images/eye-p.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product-latest__list__item__desc p-3">
                                <div class="product-latest__list__item__desc__name text-center">
                                    <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                </div>
                                <div class="product-latest__list__item__desc__price text-center">
                                    <div class="product-latest__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                        33.000.000 ₫
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-latest__list__item bg-color-10 rounded-10 position-relative hover-box-shadow my-4">
                            <div class="product-latest__list__item__img bg-color-4 rounded-10">
                                <img src="./images/product-2.png" alt="">
                            </div>
                            <div class="product-latest__list__item__desc p-3">
                                <div class="product-latest__list__item__desc__name text-center">
                                    <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                </div>
                                <div class="product-latest__list__item__desc__price text-center">
                                    <div class="product-latest__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                        33.000.000 ₫
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-latest__list__item bg-color-10 rounded-10 position-relative hover-box-shadow my-4">
                            <div class="product-latest__list__item__img bg-color-4 rounded-10">
                                <img src="./images/product-2.png" alt="">
                            </div>
                            <div class="product-latest__list__item__desc p-3">
                                <div class="product-latest__list__item__desc__name text-center">
                                    <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                </div>
                                <div class="product-latest__list__item__desc__price text-center">
                                    <div class="product-latest__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                        33.000.000 ₫
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-latest__list__item bg-color-10 rounded-10 position-relative hover-box-shadow my-4">
                            <div class="product-latest__list__item__img bg-color-4 rounded-10">
                                <img src="./images/product-2.png" alt="">
                            </div>
                            <div class="product-latest__list__item__desc p-3">
                                <div class="product-latest__list__item__desc__name text-center">
                                    <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                </div>
                                <div class="product-latest__list__item__desc__price text-center">
                                    <div class="product-latest__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                        33.000.000 ₫
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-latest__list__item bg-color-10 rounded-10 position-relative hover-box-shadow my-4">
                            <div class="product-latest__list__item__img bg-color-4 rounded-10">
                                <img src="./images/product-2.png" alt="">
                            </div>
                            <div class="product-latest__list__item__desc p-3">
                                <div class="product-latest__list__item__desc__name text-center">
                                    <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                </div>
                                <div class="product-latest__list__item__desc__price text-center">
                                    <div class="product-latest__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                        33.000.000 ₫
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-latest__button d-flex justify-content-center mt-0 pt-1 mt-md-4 pt-md-2">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Sản phẩm mới --}}
        {{-- Banner --}}
        <section class="banner-sm">
            <div>
                <img class="w-100" src="./images/banner-sm.png" alt="">
            </div>
        </section>
        {{-- End Banner --}}
        {{-- Sản phẩm theo loại --}}
        <section class="product-type pt-5">
            <div class="container py-0 py-md-4 my-0 my-md-2 pe-0 pe-md-2">
                <div class="row align-items-center">
                    <div class="product-type__title col-md-4 col-12">
                        <h2 class="mb-3 pb-1 mb-md-3 pb-md-3 pt-md-5 mt-md-3">
                            Xe đạp địa hình
                        </h2>
                        <p class="mb-0 pb-0 mb-md-3 pb-md-3 color-6">
                            Xe đạp địa hình còn được biết đến là dòng xe MTB (Mountain Bicycles) là dòng xe được sản xuất, chế tạo với mục đích chuyên
                            biệt để có thể vượt qua được nhiều loại địa hình hiểm hóc, nhiều chướng ngại vật như đồi núi, sỏi đá,….
                        </p>
                        <div class="product-type__title__button d-none d-md-block">
                            <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                                Xem tất cả
                            </button>
                        </div>
                    </div>
                    <div class="product-type__product col-md-8 col-12">
                        <div class="product-type__product__list owl-carousel owl-theme nav--true nav--color-4 nav--position-top-25">
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-type__button--mobile d-block d-md-none">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-section justify-content-center d-none d-md-flex">
            <div class="border-top border-1 w-50"></div>
        </section>

        <section class="product-type pt-5">
            <div class="container py-0 py-md-4 my-0 my-md-2 pe-0 pe-md-2">
                <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                    <div class="product-type__product col-md-8 col-12 order-2 order-md-0">
                        <div class="product-type__product__list owl-carousel owl-theme nav--true nav--color-4 nav--position-top-25">
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-type__title col-md-4 col-12 order-3 order-md-0">
                        <h2 class="mb-3 pb-1 mb-md-3 pb-md-3">
                            Xe đạp địa hình
                        </h2>
                        <p class="mb-0 pb-0 mb-md-3 pb-md-3 color-6">
                            Xe đạp địa hình còn được biết đến là dòng xe MTB (Mountain Bicycles) là dòng xe được sản xuất, chế tạo với mục đích chuyên
                            biệt để có thể vượt qua được nhiều loại địa hình hiểm hóc, nhiều chướng ngại vật như đồi núi, sỏi đá,….
                        </p>
                        <div class="roduct-type__title__button d-none d-md-block">
                            <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                                Xem tất cả
                            </button>
                        </div>
                    </div>
                    <div class="product-type__button--mobile d-block d-md-none order-1 order-md-0">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>

                </div>
            </div>
        </section>

        <section class="border-section justify-content-center d-none d-md-flex">
            <div class="border-top border-1 w-50"></div>
        </section>

        <section class="product-type pt-5">
            <div class="container py-0 py-md-4 my-0 my-md-2 pe-0 pe-md-2">
                <div class="row align-items-center">
                    <div class="product-type__title col-md-4 col-12 product-type__title">
                        <h2 class="mb-3 pb-1 mb-md-3 pb-md-3">
                            Xe đạp địa hình
                        </h2>
                        <p class="mb-0 pb-0 mb-md-3 pb-md-3 color-6">
                            Xe đạp địa hình còn được biết đến là dòng xe MTB (Mountain Bicycles) là dòng xe được sản xuất, chế tạo với mục đích chuyên
                            biệt để có thể vượt qua được nhiều loại địa hình hiểm hóc, nhiều chướng ngại vật như đồi núi, sỏi đá,….
                        </p>
                        <div class="roduct-type__title__button d-none d-md-block">
                            <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                                Xem tất cả
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8 col-12 product-type__product">
                        <div class="product-type__product__list owl-carousel owl-theme nav--true nav--color-4 nav--position-top-25">
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-type__product__list__item bg-color-10 rounded-10 position-relative hover-box-shadow-sm my-4">
                                <div class="product-type__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/product-2.png" alt="">
                                    <div
                                        class="product-latest__list__item__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-type__product__list__item__desc p-3">
                                    <div class="product-type__product__list__item__desc__name text-center">
                                        <p class="mb-1 hover--color-1">Xe đạp nữ GIANT INEED 1500 2022</p>
                                    </div>
                                    <div class="product-type__product__list__item__desc__price text-center">
                                        <div class="product-type__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-type__button--mobile d-block d-md-none mb-5">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="folding-bicycle py-5 bg-color-4">
            <div class="container py-0 py-md-4 my-0 my-md-2">
                <div class="row">
                    <div class="folding-bicycle__title d-flex flex-column flex-md-row align-items-center justify-content-center mb-3 pb-0 pb-md-2">
                        <h2>Xe đạp gấp</h2>
                    </div>
                    <div class="folding-bicycle__product">
                        <div class="folding-bicycle__product__list owl-carousel owl-theme nav--true nav--outside nav--color-10">
                            <div class="folding-bicycle__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="folding-bicycle__product__list__item__img bg-color-10 rounded-10 position-relative">
                                    <img src="./images/product-1.png" alt="">
                                    <div
                                        class="flash-sale__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="folding-bicycle__product__list__desc p-3">
                                    <div class="folding-bicycle__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="folding-bicycle__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="folding-bicycle__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="folding-bicycle__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="folding-bicycle__product__list__item__img bg-color-10 rounded-10 position-relative">
                                    <img src="./images/product-1.png" alt="">
                                    <div
                                        class="flash-sale__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="folding-bicycle__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="folding-bicycle__product__list__desc p-3">
                                    <div class="folding-bicycle__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="folding-bicycle__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="folding-bicycle__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="folding-bicycle__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="folding-bicycle__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="folding-bicycle__product__list__item__img bg-color-10 rounded-10 position-relative">
                                    <img src="./images/product-1.png" alt="">
                                    <div
                                        class="flash-sale__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="folding-bicycle__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="folding-bicycle__product__list__desc p-3">
                                    <div class="folding-bicycle__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="folding-bicycle__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="folding-bicycle__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="folding-bicycle__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="folding-bicycle__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="folding-bicycle__product__list__item__img bg-color-10 rounded-10 position-relative">
                                    <img src="./images/product-1.png" alt="">
                                    <div
                                        class="flash-sale__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="folding-bicycle__product__list__desc p-3">
                                    <div class="folding-bicycle__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="folding-bicycle__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="folding-bicycle__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="folding-bicycle__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="folding-bicycle__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="folding-bicycle__product__list__item__img bg-color-10 rounded-10 position-relative">
                                    <img src="./images/product-1.png" alt="">
                                    <div
                                        class="flash-sale__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="folding-bicycle__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="folding-bicycle__product__list__desc p-3">
                                    <div class="folding-bicycle__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="folding-bicycle__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="folding-bicycle__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="folding-bicycle__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="folding-bicycle__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="folding-bicycle__product__list__item__img bg-color-10 rounded-10 position-relative">
                                    <img src="./images/product-1.png" alt="">
                                    <div
                                        class="flash-sale__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="folding-bicycle__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="folding-bicycle__product__list__desc p-3">
                                    <div class="folding-bicycle__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="folding-bicycle__product__list__item__desc__price d-flex">
                                        <div class="folding-bicycle__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="folding-bicycle__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="folding-bicycle__button d-flex justify-content-center mt-3 pt-1 mt-md-4 pt-md-2">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sản phẩm theo loại --}}
        {{-- Phụ kiện --}}
        <section class="accessory py-5">
            <div class="container py-0 py-md-4 my-0 my-md-2">
                <div class="row">
                    <div class="accessory__title d-flex flex-column flex-md-row align-items-center justify-content-center mb-3 pb-0 pb-md-2">
                        <h2>Phụ kiện xe đạp</h2>
                    </div>
                    <div class="accessory__product">
                        <div class="accessory__product__product__list owl-carousel owl-theme nav--true nav--outside nav--color-4">
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accessory__product__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="accessory__product__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accessory__product__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-1 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div class="fst-italic fs-7">Tặng bảo hành</div>
                                </div>
                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">

                                </div>
                                <div
                                    class="accessory__product__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-9 color-10 rounded-4 py-1 px-4 ms-3 mt-3">
                                    <div class="fst-italic">Tạm hết</div>
                                </div>
                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accessory__product__button d-flex justify-content-center mt-3 pt-1 mt-md-4 pt-md-2">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End phụ kiện --}}

        <section class="border-section justify-content-center d-none d-md-flex">
            <div class="border-top border-1 w-50"></div>
        </section>
        {{-- Phụ tùng xe đạp --}}
        <section class="accessory py-5">
            <div class="container py-0 py-md-4 my-0 my-md-2">
                <div class="row">
                    <div class="accessory__title d-flex flex-column flex-md-row align-items-center justify-content-center mb-3 pb-0 pb-md-2">
                        <h2>Phụ tùng xe đạp</h2>
                    </div>
                    <div class="accessory__product">
                        <div class="accessory__product__product__list owl-carousel owl-theme nav--true nav--outside nav--color-4">
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accessory__product__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-8 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div>
                                        10%
                                    </div>
                                    <div class="text-uppercase">
                                        Giảm
                                    </div>
                                </div>
                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                        <del class="accessory__product__product__list__item__desc__price__old align-self-end color-6 fs-7">
                                            36.000.000 ₫
                                        </del>
                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="accessory__product__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-1 color-10 rounded-4 p-1 ms-3 mt-3">
                                    <div class="fst-italic fs-7">Tặng bảo hành</div>
                                </div>
                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">

                                </div>
                                <div
                                    class="accessory__product__product__list__item__img__sale text-center position-absolute top-0 start-0 bg-color-9 color-10 rounded-4 py-1 px-4 ms-3 mt-3">
                                    <div class="fst-italic">Tạm hết</div>
                                </div>
                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accessory__product__product__list__item rounded-10 position-relative hover-box-shadow-none">
                                <div class="accessory__product__product__list__item__img bg-color-4 rounded-10 position-relative">
                                    <img src="./images/phu-k.png" alt="">
                                    <div class="accessory__product__list__img__action position-absolute bottom-0 end-0 mb-3 me-3 d-none action--product">
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle mb-2">
                                            <img src="./images/cart-p.svg" alt="">
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-center p-2 bg-color-10 border-1 border border-color-1 rounded-circle">
                                            <img src="./images/eye-p.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="accessory__product__product__list__desc p-3">
                                    <div class="accessory__product__product__list__item__desc__name text-center">
                                        <p>Xe đạp đường phố Touring</p>
                                    </div>
                                    <div class="accessory__product__product__list__item__desc__price d-flex justify-content-center">
                                        <div class="accessory__product__product__list__item__desc__price__current fs-5 color-8 fw-4 me-2">
                                            33.000.000 ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accessory__product__button d-flex justify-content-center mt-3 pt-1 mt-md-4 pt-md-2">
                        <button class="btn btn--color-1 btn-lg rounded-6 fs-6">
                            Xem tất cả
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Phụ tùng xe đạp --}}

        {{-- Feedback --}}
        <section class="feedback py-5 text-center bg-color-9 color-10">
            <div class="container py-0 py-md-3 mt-0 mt-md-2">
                <div class="row">
                    <div class="feedback__title mb-4 pb-1 mt-2">
                        <h2>
                            Khách hàng họ nói gì về chúng tôi?
                        </h2>
                    </div>
                    <div class="feedback__list owl-carousel owl-theme dot--true dot--color-10 nav--true nav--color-10 pb-5">
                        <div class="feedback__list__item">
                            <div class="feedback__list__item__avatar mb-3 pb-1">
                                <img class="w-auto h-auto d-block mx-auto" src="./images/avatar.png" alt="">
                            </div>
                            <div class="feedback__list__item__content w-75 mx-auto">
                                <p class="mb-3 pb-1">"Piano VMMS tư vấn khách hàng rất tận tâm, sản phẩm của họ cũng rất chất lượng, đúng với giá tiền.
                                    Các dịch
                                    vụ bảo hành tại đây
                                    cũng rất tốt."</p>
                                <img class="w-auto h-auto d-block mx-auto" src="./images/cmt.png" alt="">
                                <p class="pt-2">
                                    SIMONE PAROTTI
                                </p>
                            </div>
                        </div>
                        <div class="feedback__list__item">
                            <div class="feedback__list__item__avatar mb-3 pb-1">
                                <img class="w-auto h-auto d-block mx-auto" src="./images/avatar.png" alt="">
                            </div>
                            <div class="feedback__list__item__content w-75 mx-auto">
                                <p class="mb-3 pb-1">"Piano VMMS tư vấn khách hàng rất tận tâm, sản phẩm của họ cũng rất chất lượng, đúng với giá tiền.
                                    Các dịch
                                    vụ bảo hành tại đây
                                    cũng rất tốt."</p>
                                <img class="w-auto h-auto d-block mx-auto" src="./images/cmt.png" alt="">
                                <p class="pt-2 fw-4">
                                    SIMONE PAROTTI
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Feedback --}}

        {{-- Tin tức nổi bật --}}
        <section class="news-latest py-5">
            <div class="container py-0 py-md-4 my-0 my-md-2">
                <div class="row">
                    <div class="news-latest__title d-flex justify-content-center">
                        <h2 class="mb-0">Tin tức nổi bật</h2>
                    </div>
                    <div class="news-latest__list owl-carousel owl-theme mt-3 pt-md-3 pt-0">
                        <div class="news-latest__list__item position-relative">
                            <div class="news-latest__list__item__img">
                                <img src="./images/news.png" alt="">
                                <h6 class="mt-2 mb-0 fw-4">
                                    Tips: Bổ sung nước đúng cách khi đạp xe giúp phòng tránh nhiều nguy cơ có hại
                                </h6>
                            </div>
                            <div class="news-latest__list__item__date position-absolute top-0 start-0 mt-2 ms-2 p-2 bg-color-10 rounded-6">
                                28 <br>05
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Tin tức nổi bật --}}
        {{-- Thương hiệu nổi bật --}}
        <section class="brand py-5 bg-color-4">
            <div class="container py-0 py-md-4 my-0 my-md-2">
                <div class="row">
                    <div class="brand__title d-flex justify-content-center">
                        <h2 class="mb-0">
                            Thương hiệu nổi bật
                        </h2>
                    </div>
                    <div class="brand__list owl-carousel owl-theme nav--true nav--color-10 nav--outside mt-3 pt-0 pt-md-3">
                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand.png" alt="">
                        </div>
                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand-2.png" alt="">
                        </div>
                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand-3.png" alt="">
                        </div>

                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand.png" alt="">
                        </div>
                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand.png" alt="">
                        </div>
                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand.png" alt="">
                        </div>
                        <div class="brand__list__item bg-color-10 rounded-10">
                            <img src="./images/brand.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Thương hiệu nổi bật --}}
    </main>
@endsection
