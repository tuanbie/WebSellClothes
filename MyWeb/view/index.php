<?php

?>
<!DOCTYPE html>
<html lang="vi">

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
            <li><a class="fa fa-shopping-bag" href="./cart.php"></a></li>
        </div>
    </header>
    <!-- --------=--display---------------->
    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="../images/1.jpg" />
            <img src="../images/2.jpg" />
            <img src="../images/5.jpg" />
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
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