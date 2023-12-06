<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>文章</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/css.css">
  <style>
    .aside {
      background-image: url(./img/18-2500x1667.jpg);
      opacity: 0.9;

    }

    .main {
      height: 105vh;
    }

    .h3 {
      border-left: 10px solid brown;
      font-size: x-large;
      font-weight: bolder;
    }

  
    h3>p {
      font-size: 20px;
      line-height: 30px;
    }

    .footer {
      margin-top: 0px;
    }

    .box {
      margin-top: 50px;
      width: 33%;
      height: 33%;

    }


  </style>
</head>


<body>

  <header class=" h-11 bg-gray container-fluid">
    <div class="row bg-gray">
      <div class="test col-md-2 ms-3 logo-area">
        <a href="index.php" data-bs-toggle="modal" data-bs-target="#myModal-2">
          <img src="./img/logo1.png" alt="" width="85%" height="100%"></a>
      </div>
      <div class="test col-md-2 mt-4 pt-3">

        <a href="index.php">
          <h2 style="font-weight:600;">奇多喵合作社</h2>
        </a>

      </div>
      <div class="col-md-4 test-1 pt-5">
        <div class="page-link ">

          <ul>
            <li class="nav-item me-3">
              <a href="index.php">回首頁</a>
              <div class="unloading-bar"></div>
              <div class="loading-bar"></div>
            </li>


        </div>

      </div>

      <div class="col-md-1 pt-4 test" style="margin-top:8px;margin-left:37px">
        <a class="shopping-cart-a" target="_blank" href="">
          <i class="fa-sharp fa-solid fa-cart-shopping shopping-cart fa-l" style="  font-size: 2em;"></i>
          <p class="mt-1 shopping-cart-p">Buy it !</p>
        </a>

      </div>


      <div class="test col-md-1 pt-4 " style="margin-top:8px;margin-left:37px">

        <div class="offcanvas offcanvas-end" id="demo">
          <div class="offcanvas-header">
            <h1 class="offcanvas-title">會員中心<img src="./img/logo1.png" alt="" width="60px"></h1>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <div class="modal-header">
              <h4 class="modal-title">請先登入</h4>


            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- 插入程式碼要有頭跟END，方便日後維護及辨識 -->
              <!-- Modal body container.. -->
              <div class="container mt-3">


                <form action="/action_page.php">

                  <div class="row">
                    <div class="col-12">
                      <div class="mb-3">
                        <label for="price">帳號:</label>
                        <input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-3">
                        <label for="unit">密碼:</label>
                        <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-12 mt-1">
                      <div class="mb-3">
                        <div class="d-flex gap-2">
                          <button type="reset" class="btn btn-primary btn-secondary col-6">重置</button>
                          <button type="submit" class="btn btn-primary btn-warning  col-6">送出</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Modal body container end -->
            </div>
          </div>
        </div>
        <div>

          <i class="fa-regular fa-circle-user me-5" style=" font-size: 2em;" data-bs-toggle="offcanvas"
            data-bs-target="#demo"></i>

          <p class="mt-1 me-5 shopping-cart-p">Menbership</p>
        </div>
        </button>
      </div>
      <div class="col-md-1 test pt-4" style="margin-top:20px;margin-left:37px">
        <form class="d-flex">
          <input class="search-wrapper me-2 myInput " type="text" placeholder="Search">
          <button class="btn btn-primary rounded-pill btn-bg" style="width:130px" type="button">Search</button>
        </form>
      </div>
    </div>
  </header>

  <!-- ---- -->
  <div class="container">
    <div class="d-flex main flex-wrap">
      <div class="box">
        <h3 class="h3">&nbsp;幼貓照護指南：啟蒙與關愛的開始</h3>
        <a href="./articles/articles_1.php"><img class="pt-3" src="./img/kitten.jpg" alt="" width="375px"
            height="300px"></a>

        <a href="./articles/articles_1.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

      </div>
      <div class="box">
        <h3 class="h3">&nbsp;成貓照護指南：健康與活力的秘訣</h3>
        <a href="./articles/articles_2.php"><img class="pt-3" src="./img/adult.jpg" alt="" width="375px" height="300px"></a>

        <a href="./articles/articles_2.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>


      </div>
      <div class="box">
        <h3 class="h3">&nbsp;老貓照護指南：柔情伴隨，溫馨陪伴</h3>
        <a href="./articles/articles_3.php"><img class="pt-3" src="./img/cat4.jpg" alt="" width="375px" height="300px"></a>

        <a href="./articles/articles_3.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>


      </div>
      <div class="box">
        <h3 class="h3">&nbsp;從幼到老：貓咪生命的三個重要階段</h3>
        <a href="./articles/articles_4.php"><img class="pt-3" src="./img/cat11.webp" alt="" width="375px" height="300px"></a>

        <a href="./articles/articles_4.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>


      </div>
      <div class="box">
        <h3 class="h3">&nbsp;探索貓咪的時光隧道</h3>
        <a href="./articles/articles_5.php"><img class="pt-3" src="./img/cat2.jpeg" alt="" width="375px" height="300px"></a>

        <a href="./articles/articles_5.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

      </div>
      <div class="box">
        <h3 class="h3">&nbsp;貓咪的皮膚護理學問</h3>
        <a href="./articles/articles_6.php"><img class="pt-3" src="./img/cat3.webp" alt="" width="375px" height="300px"></a>

        <a href="./articles/articles_6.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

      </div>

    </div>
  </div>

  <?php
include "./inc/login.php"
?>
  

  <footer class="footer " id="footer">
    <div class="container-fluid">
      <div class="row" style="padding-top:35px">

        <div class="col-md-3 contact col" style="margin-top: 30px;margin-left:100px;">
          <img src="./img/logo1.png" alt="" width="130px">


          <p style="font-size:15px">243 新北市泰山區貴子里致遠新村55之1號</p>
          <a style="font-size:15px" href="mailto: wunshengliao@gmail.com">EMAIL: wunshengliao@gmail.com</a>
          <a style="font-size:15px" href="tel:+886123456789">TEL: +886-1-2345-6789</a>


        </div>
        <div class="font-awesome mt-5 col-md-1 col ps-4">
          <a aria-label="instagram" target="_blank" href="">
            <i class="fa-brands fa-instagram  fa-2xl pt-3 " style="padding-left:25px;font-size: 40px;"></i>
          </a>
          <br>
          <br>
          <a aria-label="facebook" target="_blank" href="">
            <i class="fa-brands fa-facebook  fa-2xl pt-4 " style="padding-left:25px;"></i>
          </a>
          <br>
          <br>
          <a aria-label="line" target="_blank" href="https://www.instagram.com/kingone_design">
            <i class="fa-brands fa-line fa-2xl pt-4 " style="padding-left:25px"></i>
          </a>
          <br>
          <br>
          <a aria-label="Youtube" target="_blank" href="">
            <i class="fa-brands fa-youtube  fa-2xl pt-4 " style="padding-left:23px"></i>
          </a>

        </div>
        <div class=" mt-5 col-md-5 col" style="border-left:5px solid white;margin-left:-5px">
          <ul class="pages">
            <li>
              <a class="footer-header" href="./aboutUs.php#">關於我們</a>
            </li>
            <li>
              <a href="./aboutUs.php#">起源</a>
            </li>
            <li>
              <a href="./aboutUs.php#origin">目標</a>
            </li>
            <li>
              <a href="./aboutUs.php#cheetos">店貓－奇多（Cheetos）</a>
            </li>

          </ul>

          <ul class="pages">
            <li>
              <a class="footer-header" href="#">貓咪文章</a>
            </li>
            <li>
              <a class="" href="#">幼貓</a>
            </li>
            <li>
              <a class="" href="#">成貓</a>
            </li>
            <li>
              <a class="" href="#">老貓</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href="./index.php#store">購物商城</a>
            </li>
            <li>
              <a class="" href="./index.php#store">食物</a>
            </li>
            <li>
              <a class="" href="./index.php#store">玩具</a>
            </li>
            <li>
              <a class="" href="./index.php#store">生活用品</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href="" data-bs-toggle="offcanvas" data-bs-target="#demo">會員專區</a>
            </li>
            <li>
              <a href="">加入會員</a>
            </li>
            <li>
              <a href="">修改密碼</a>
            </li>
            <li>
              <a href="">訂單查詢</a>
            </li>
            <li>

          </ul>



        </div>

        <a class="footer-headerp join-us pt-1 text-center"
          style="color:#ffc94a;font-size: 55px;font-weight:bolder;border:3px solid#ffb71b;width:150px;height:180px;margin-top:60px;margin-left:35px"
          href="">Join Us!</a>

      </div>
  </footer>
  <div class="copyright">
    <p>© WSL Web ALL Reserved.</p>
  </div>
  </div>
</body>

  </html>