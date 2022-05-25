<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VTA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <header>
        <div class="logo">
            <li><a href="index.php">VTA</a></li>
        </div>
        <div class="menu">
            <li><a href="category.php">SẢN PHẨM</a></li>
            <li><a href="sale.php">SALE</a></li>
        </div>
        <div class="other">
            <li>
                <input placeholder="Tìm Kiếm" type="text" /><i class="fas fa-search"></i>
            </li>
            <li><a class="fa fa-user" href="./loginRegistration.php"></a></li>
            <li><a class="fa fa-shopping-bag" href=""></a></li>
        </div>
    </header>
    <!-- --------=--display---------------->
    <!--  trạng thái khi thanh tonas -->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-delivery delivery-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="delivery-top-adress delivery-top-item">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- nhập thông tin khách hàng -->
        <div class="container cachle">
            <div class="delivery-conten row">
                <div class="delivery-conten-left">
                    <p>Nhập địa chỉ giao hàng</p>
                    <div class="delivery-conten-left-input-top row">
                        <div class="delivery-conten-left-input-top-item">
                            <label for="">Họ tên <span style="color: rgb(253, 0, 0)">*</span></label>
                            <input type="text" />
                        </div>
                        <div class="delivery-conten-left-input-top-item">
                            <label for="">SDT <span style="color: rgb(253, 0, 0)">*</span></label>
                            <input type="text" />
                        </div>
                        <div class="delivery-conten-left-input-top-item">
                            <label for="">Email </span></label>
                            <input type="text" />
                        </div>
                        <div class="delivery-conten-left-input-top-item">
                            <label for="">Địa chỉ <span style="color: rgb(253, 0, 0)">*</span></label>
                            <input type="text" />
                        </div>
                    </div>
                    <div class="delivery-conten-left-button row">
                        <a href="./cart.php"><span>&#171;</span>
                            <p>Quay lại giỏ hàng</p>
                        </a>
                        <button>
                            <p style="font-weight:bold">Đặt hàng</p>
                        </button>
                    </div>
                </div>
                <div class="delivery-conten-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Màu</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>Quần Tây Nam Nano Ống Đứng Thời Trang</td>
                            <td>
                                <p>489.000 <sup>đ</sup></p>
                            </td>
                            <td>Xám ghi</td>
                            <td>1</td>
                            <td>
                                <p>489.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Quần Tây Nam Nano Ống Đứng Thời Trang</td>
                            <td>
                                <p>489.000 <sup>đ</sup></p>
                            </td>
                            <td>Đỏ</td>
                            <td>1</td>
                            <td>
                                <p>489.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold" colspan="3">Tổng</td>
                            <td style="font-weight:bold">
                                <p>976.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight:bold">
                                <p>976.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------below-------------- -->
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
                Thời trang VTA<sup>&#174;</sup><br />
                Địa chỉ: 475A Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM, Việt Nam<br />
                Số điện thoại: <b>0373272294</b>
            </p>
        </div>
    </div>
</body>
<script src="../js/sliderdotJS.js"></script>

</html>