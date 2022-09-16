<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="./public/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <script src="./admin.js"></script>
    <title>ADMIN</title>
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2 f1">
          <div class="logo">
            <a href="">
            <img  src="./public/img/masthead_logo.jpg" alt="">
            </a>
          </div>
          <div class="user">
            <img src="./public/img/user.jpg" alt="">
            <span class="user_name">Nguyễn Duy Nguyện
              <i style="margin-left:2px; color:#fff; cursor:pointer;padding:0px 3px" class="fa-solid fa-caret-down"></i>
              <div class="more_user">
                <ul class="more-list">
                  <li>
                    <a href="">My profile</a>
                  </li>
                  <li>
                    <a href="">Settings</a>
                  </li>
                  <li>
                    <a href="">Log out</a>
                  </li>
                </ul>
              </div>
            </span>
            <div class="user_level">Sales Manager</div>
          </div>
          <div class="sidebar_menu">
            <div class="handle">
              <a href="?dm" class="lable">
                <i class="fa-solid fa-bars"></i>DANH MỤC
            </a>
            </div>
            <div class="handle">
              <a href="?sp" class="lable">
                <i class="fa-light fa-boxes-stacked"></i>SẢN PHẨM
                </a>
              
            </div>
          </div>
          </ul>
        </div>
        <div class="col-10 f2">
              <?php
                  include "admin_dm.php"
              ?>
        </div>
      </div>
    </div>
</body>
</html>