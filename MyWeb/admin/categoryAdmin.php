<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/MyWeb/css/admin.css" />
    <link rel="stylesheet" href="/MyWeb/css/base.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>VTA</title>
  </head>
  <body>
    <nav class="sidebar close">
      <header>
        <!-- tên admin -->
        <div class="image-text">
          <div class="text logo-text">
            <span class="name">BIE</span>
          </div>
        </div>
        <!-- nút thu đóng danh mục -->
        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <!-- thanh search sản phẩm -->
        <div class="menu">
          <li class="search-box">
            <i class="bx bx-search icon"></i>
            <input type="text" placeholder="Search..." />
          </li>
          <!-- nút vào trang sản phẩm và mặc định là ở đây -->
          <ul class="menu-links">
            <li class="nav-link">
              <a href="">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Sản phẩm</span>
              </a>
            </li>
            <!-- nút vào ttrang quản lý khách hàng -->
            <li class="nav-link">
              <a href="./customerAdmin.html">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="text nav-text">Khách hàng</span>
              </a>
            </li>
            <!-- nút vào trang thống kê -->
            <li class="nav-link">
              <a href="./thongke.html">
                <i class="bx bx-pie-chart-alt icon"></i>
                <span class="text nav-text">Thống kê</span>
              </a>
            </li>
          </ul>
          <!-- nút đăng xuất -->
          <div class="bottom-content">
            <li class="#">
              <a href="./Login.html">
                <i class="bx bx-log-out icon"></i>
                <span class="text nav-text">Logout</span>
              </a>
            </li>
            <!-- nút chuyển màn hình  -->
            <li class="mode">
              <div class="sun-moon">
                <i class="bx bx-moon icon moon"></i>
                <i class="bx bx-sun icon sun"></i>
              </div>
              <span class="mode-text text">Dark mode</span>

              <div class="toggle-switch">
                <span class="switch"></span>
              </div>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- màn hình danh mục -->
    <section class="home">
      <div class="text">
        <div class="admin-conten-right">
          <div class="admin-conten-right-category_li">
            <h1>Danh sách sản phẩm</h1>
            <table>
              <tr>
                <th>STT</th>
                <th>STT</th>
                <th>STT</th>
                <th>STT</th>
                <th>STT</th>
                <th>STT</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>

    <script src="/MyWeb/js/admin.js"></script>
  </body>
</html>
