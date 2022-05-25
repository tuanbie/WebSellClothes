<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VTA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/loginRegistration.css" />
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
            <li><a class="fa fa-user" href=""></a></li>
            <li><a class="fa fa-shopping-bag" href="./cart.php"></a></li>
        </div>
    </header>
    <!-- --------=--display---------------->
    <section id="slider">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>

                    <form action="#">
                        <!-- nhập tên đăng nhập cảu khách hàng -->
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" required />
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <!-- nhập mật khẩu của khách hàng -->
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Enter your password" required />
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck" />
                                <label for="logCheck" class="text">Remember me</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <input type="button" value="Login Now" />
                        </div>
                    </form>
                    <!-- nút chuyển sang màn  hình đăng kí -->
                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Signup now</a>
                        </span>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="form signup">
                    <span class="title">Registration</span>

                    <form action="#">
                        <!-- chổ nhập tên khách hàng -->
                        <div class="input-field">
                            <input type="text" placeholder="Enter your name" required />
                            <i class="uil uil-user"></i>
                        </div>
                        <!-- nhập email khách hàng -->
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" required />
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <!-- nhập passworf -->
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Create a password" required />
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <!-- nhập lại mật khẩu -->
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Confirm a password" required />
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>
                        <!-- luu mật khẩu -->
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="sigCheck" />
                                <label for="sigCheck" class="text">Remember me</label>
                            </div>
                        </div>
                        <!-- nút đăng kí -->
                        <div class="input-field button">
                            <input type="button" value="Login Now" />
                        </div>
                    </form>
                    <!-- nút quay lại màn hình đăng nhập -->
                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text login-link">Signup now</a>
                        </span>
                    </div>
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
<script>
const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");

//   js code to show/hide password and change icon
pwShowHide.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach((pwField) => {
            if (pwField.type === "password") {
                pwField.type = "text";

                pwShowHide.forEach((icon) => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                });
            } else {
                pwField.type = "password";

                pwShowHide.forEach((icon) => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                });
            }
        });
    });
});

// js code to appear signup and login form
signUp.addEventListener("click", () => {
    container.classList.add("active");
});
login.addEventListener("click", () => {
    container.classList.remove("active");
});
</script>

</html>