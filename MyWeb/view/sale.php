<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VTA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="/MyWeb/css/style.css" />
</head>

<body>
    <header>
        <div class="logo">
            <li><a href="./index.php">VTA</a></li>
        </div>
        <div class="menu">
            <li><a href="category.php">SẢN PHẨM</a></li>

            <div class="coler">
                <li><a href="sale.php">SALE</a></li>
            </div>
        </div>

        <div class="other">
            <li>
                <input placeholder="Tìm Kiếm" type="text" /><i class="fas fa-search"></i>
            </li>
            <li><a class="fa fa-user" href="./loginRegistration.html"></a></li>
            <li><a class="fa fa-shopping-bag" href="./cart.html"></a></li>
        </div>
    </header>
    <!-- ------------category-------------- -->
    <section class="category">
        <div class="container">
            <div class="category-top row">
                <p>Trang chủ</p>
                <span>&#8594; </span>
                <p>Quần</p>
                <span>&#8594;</span>
                <p>Quần tây</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="category-left">
                    <ul>
                        <li class="category-left-li block">
                            <a href="#">QUẦN</a>
                            <ul>
                                <li><a href="">Quần tây</a></li>
                                <li><a href="">Quần Kaki</a></li>
                                <li><a href="">Quần jean</a></li>
                                <li><a href="">Quần jogger</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li">
                            <a href="#">ÁO</a>
                            <ul>
                                <li><a href="">Áo nam mới về</a></li>
                                <li><a href="">Quần nam mới về</a></li>
                                <li><a href="">Giày về</a></li>
                                <li><a href="">Áo nam mới về</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li">
                            <a href="#">PHỤ KIỆN</a>
                            <ul>
                                <li><a href="">Nón</a></li>
                                <li><a href="">Ví</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="category-right row">
                    <div class="category-right-top-item">
                        <p>Quần tây</p>
                    </div>
                    <div class="category-right-top-item">
                        <button>
                            <span>Bộ lọc</span><i class="fas fa-sort-down"></i>
                        </button>
                    </div>
                    <div class="category-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá từ cao đến thấp</option>
                            <option value="">Giá từ thấp đến cao</option>
                        </select>
                    </div>
                    <div class="category-right-content row">
                        <div class="category-right-content-items">
                            <img src="../images/i1.jpg" alt="" />
                            <h1>Quần Tây Slimfit Cài Nút QT033 Màu Xám</h1>
                            <p>385.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i2.jpg" alt="" />
                            <h1>Quần Tây Trơn Lai Lơ Vê QT032 Màu Kem</h1>
                            <p>445.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i4.jpg" alt="" />
                            <h1>Quần Tây Caro Trơn QT029 Màu Xanh Đen</h1>
                            <p>425.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i5.jpg" alt="" />
                            <h1>Quần Tây Caro Trơn QT027 Màu Xanh</h1>
                            <p>425.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i6.jpg" alt="" />
                            <h1>Quần Tây Lưng Thun QT030</h1>
                            <p>385.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i7.jpg" alt="" />
                            <h1>Quần Tây Trơn QT024 Màu Xám Chuột Đậm</h1>
                            <p>425.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i8.png" alt="" />
                            <h1>Quần Tây NAZAFU QT005 Màu Xám</h1>
                            <p>475.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i9.png" alt="" />
                            <h1>Quần Tây NAZAFU QT006 Màu Xanh Đen</h1>
                            <p>475.000<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-items">
                            <img src="../images/i10.png" alt="" />
                            <h1>Quần Tây NAZAFU QT006 Màu Xanh Đen</h1>
                            <p>345.000<sup>đ</sup></p>
                        </div>
                    </div>
                    <div class="category-right-bottom row">
                        <div class="category-right-bottom-items">
                            <p>Hiển thị 2 <span> | </span>4 sản phẩm</p>
                        </div>
                        <div class="category-right-bottom-items">
                            <p>
                                <span>&#171;</span> 1 2 3 4 5 <span>&#187;</span>Trang cuối
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------bottom-------------- -->
    <section id="slider"></section>
    <div class="indexbottom">
        <div class="footer-top">
            <li>
                <a href="https://www.facebook.com/tuanbie201/" class="fab fa-facebook-f"></a>
                <a href="https://www.youtube.com/channel/UCpeyO_Hso1x2VtFqCfu_xqw" class="fab fa-youtube"></a>
                <hr />
            </li>
        </div>
        <div class="footer-center">
            <p>
                Thời trang VTA<sup>&#174;</sup> <br />
                Địa chỉ: 475A Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM, Việt Nam<br />
                Số điện thoại: <b>0373272294</b>
            </p>
        </div>
    </div>
    <script src="./js/categoryJS.js"></script>
</body>

</html>