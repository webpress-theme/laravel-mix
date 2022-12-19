<header class="header shadow">
    <div class="header__top fs-8 bg-color-4 py-2 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="d-flex">
                    <div class="header__top__right flex-grow-1">
                        <div class="d-flex">
                            <div class="header__top__right__phone-number me-3">
                                <a href="" class="text-decoration-none d-flex align-items-center color-6">
                                    <img class="pe-1" src="./images/phone.svg" alt="">0962.180.180
                                </a>
                            </div>
                            <div class="header__top__right__email me-3">
                                <a href="" class="text-decoration-none d-flex align-items-center color-6">
                                    <img class="pe-1" src="./images/mail.svg" alt="">info@vmms.vn
                                </a>
                            </div>
                            <div class="header__top__right__time-working me-3">
                                <a href="" class="text-decoration-none d-flex align-items-center color-6">
                                    <img class="pe-1" src="./images/clock.svg" alt="">Mở cửa: Từ 8:00 đến 20:30 (Tất cả các ngày trong
                                    tuần)
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header__top__left d-none d-lg-block">
                        <div class="dropdown">
                            <button class="fs-8 color-6 bg-transparent border-0 dropdown-toggle p-0" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Vietnamese
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item fs-8" href="#">Vietnamese</a></li>
                                <li><a class="dropdown-item fs-8" href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__main color-9 py-3">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="header__main__left d-flex align-items-center justify-content-between pb-3 pb-lg-0 col-12 col-lg-3">
                        <div class="d-block d-lg-none">
                            <img src="./images/menu.svg" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="">
                        </div>
                        <div>
                            <a href="/" class="logo-img">
                                <img src="./images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="d-block d-lg-none">
                            <a href="/gio-hang" class="cart-icon">
                                <img src="./images/cart-mobilde.svg" alt="">

                            </a>
                        </div>
                    </div>
                    <div class="header__main__right d-flex flex-grow-1">
                        <div class="header__main__right__search-form flex-grow-1 position-relative m-auto">
                            <form role="search" method="get" action="/tim-kiem">
                                <input type="search" name=""
                                    class="boder-1 border search-form__input py-2 px-3 rounded-10 px-4 rounded-6 border-color-5 w-100"
                                    placeholder="Nhập từ khoá tìm kiếm..." />
                                <button type="submit" value="Tìm kiếm"
                                    class="position-absolute top-50 end-0 translate-middle-y border-0 me-3 search-btn search-form__button bg-color-10">
                                    <img src="./images/search.svg" alt="">
                                </button>
                            </form>
                        </div>
                        <div class="header__main__right__account d-none d-lg-flex align-items-center ms-5 me-4
                        ">
                            <a href="/tai-khoan" class="account-icon">
                                <img class="ms-2" src="./images/account.svg" alt="">
                            </a>
                            <div class="account-item ms-2">
                                <div class="fw-4">Tài khoản</div>
                                <div>
                                    <a href="#" class="fs-8 color-9 text-decoration-none">
                                        Đăng nhập</a>
                                    /
                                    <a href="#" class="fs-8 color-9 text-decoration-none">Đăng ký</a>
                                </div>
                            </div>

                        </div>
                        <div class="header__main__right__cart d-none d-lg-flex align-items-center ms-2">
                            <a href="/gio-hang" class="cart-icon">
                                <img src="./images/cart.svg" alt="">
                            </a>
                            <div class="cart-item ms-2">
                                <div class="fw-4">Giỏ hàng</div>
                                <div class="color-9 fs-8">0 VNĐ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom bg-color-1 fs-7">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__bottom__left">
                        <div class="header__bottom__left__drop-category dropdown">
                            <button class="bg-color-9 color-10 py-3 px-4 px-xl-5 fw-4 border-color-1 border-0 d-flex align-items-center" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="me-3" src="./images/menu-white.svg" alt="">
                                Danh mục sản phẩm
                            </button>
                            <ul class="header__bottom__left__drop-category__menu dropdown-menu bg-color-4 fs-7 w-100 border-0 ps-0 ps-lg-auto" aria-labelledby="dropdownMenuButton2">
                                <div class="position-relative">
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Hàng mới về</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Bộ sưu tập
                                        </a>
                                        <div class="header__bottom__left__drop-category__menu__child position-absolute sub-menu d-none top-0 start-100 bg-color-4 rounded-6 h-100 ps-2 p-3">
                                            <div class="header__bottom__left__drop-category__menu__child__left col-8">
                                                <div class="d-flex flex-wrap">
                                                    <div class="col-4 fs-6 p-2 pb-0">
                                                        <div class="text-center">
                                                            <img class="w-100 h-100" src="./images/category-1.png" alt="">
                                                            <p class="fw-4 mt-2">Piano Grand Kawai</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 fs-6 p-2 pb-0">
                                                        <div class="text-center">
                                                            <img class="w-100 h-100" src="./images/category-1.png" alt="">
                                                            <p class="fw-4 mt-2">Piano Grand Kawai</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 fs-6 p-2 pb-0">
                                                        <div class="text-center">
                                                            <img class="w-100 h-100" src="./images/category-1.png" alt="">
                                                            <p class="fw-4 mt-2">Piano Grand Kawai</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 fs-6 p-2 pb-0">
                                                        <div class="text-center">
                                                            <img class="w-100 h-100" src="./images/category-1.png" alt="">
                                                            <p class="fw-4 mt-2">Piano Grand Kawai</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 fs-6 p-2 pb-0">
                                                        <div class="text-center">
                                                            <img class="w-100 h-100" src="./images/category-1.png" alt="">
                                                            <p class="fw-4 mt-2">Piano Grand Kawai</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 fs-6 p-2 pb-0">
                                                        <div class="text-center">
                                                            <img class="w-100 h-100" src="./images/category-1.png" alt="">
                                                            <p class="fw-4 mt-2">Piano Grand Kawai</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-2 col-4 position-relative">
                                                <img class="w-100 h-100 rounded-10 pe-2" src="./images/category-2.png" alt="">
                                                <div class="position-absolute bottom-0 start-0 mb-3 pb-1 ms-3 ps-1">
                                                    <h2 class="mb-3 pb-1 color-10">Sale off 50%</h2>
                                                    <button class="btn--color-1 btn w-100 py-3">
                                                        Mua ngay
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Thời trang nam</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Thời trang nữ</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Phụ kiện</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Thương hiệu</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Xu hướng</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Áo khoác</a>
                                    </li>
                                    <li>
                                        <a class="menu-list dropdown-item py-3 fw-4 color-9" href="#">Quần</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="header__bottom__right">
                        <ul class="header__bottom__right__primary-menu d-flex p-0 justify-content-end mb-0">
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="/">Trang chủ</a>
                            </li>
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="/gioi-thieu">Giới thiệu</a>
                            </li>
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="san-pham">Sản phẩm</a>
                            </li>
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="/tin-tuc">Tin tức</a>
                            </li>
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="/huong-dan">Hướng dẫn mua hàng</a>
                            </li>
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="/cau-hoi">Câu hỏi thường gặp</a>
                            </li>
                            <li>
                                <a class="fw-4 ms-4 color-10 text-decoration-none" href="/lien-he">
                                    Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
