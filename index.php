<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Hello, world!</title>
  <style>
   .blik {
      margin-top: 1.2rem;
      font-size: 1.4rem;
    }

    i.fa-solid.fa-magnifying-glass {
      margin-top: 1.1rem;
      font-size: 1.5rem;
    }

    .navAdd {
      background-color: #454545;
      color: white;
    }

    .main-menu {
      margin-top: .7rem;
    }

    .main-menu li {
      display: inline-block;
      position: relative;
    }

    .main-menu li a {
      font-size: 1rem;
      color: var(--mdark);
      font-weight: 400;
      padding: 0 12px;
      text-decoration: none;
      text-transform: uppercase;
    }

    .main-menu li a:hover {
      color: #000;
    }

    .main-menu>li:hover>a,
    .sub_menu>li:hover>a,
    .main-menu li.active a {
      color: #000;
    }

    .main-menu>li:last-child a {
      padding-right: 0px;
      /* color:#000; */
    }

    ul.sub-menu {
      position: absolute;
      width: 156px;
      top: 39px;
      opacity: 0;
      visibility: hidden;
      text-align: left;
      z-index: 2;
      background: #f0f0f0;
      transform: rotateY(37deg) scale(1, 0.7);
      box-shadow: 0 4px 8px #787878;
    }

    .sub-menu li {
      display: block;
      color: var(--mdark);
    }

    .sub-menu>li>a {
      line-height: normal;
      padding: 14px 46px;
      font-size: 13px;
      display: block;
      color: (--mdark);
    }

    .sub-menu>li>a::before {
      content: "\eb81";
      font-family: icofont;
      left: 0;
      opacity: 0;
      font-size: 35px;
      visibility: hidden;
      position: absolute;
      padding-left: 5px;
      top: 0px;
    }

    .sub-menu a:hover:before {
      opacity: 1;
      visibility: visible;
      left: 5px;
    }

    .main-menu>li:hover ul.sub-menu {
      opacity: 1;
      visibility: visible;
      transform: rotate(0deg);
      color: #000;
    }

    .main-menu li a,
    ul.sub-menu,
    .sub-menu>li>a::before {
      transition-duration: .5s;
    }

    .firstImg {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 4rem;
      height: 3.2rem;
    }

    .imageClass {
      width: 90vh;
      height: 50vh;

    }

    .borderw {
      border: none !important;
    }
    .travel{
      background-color: #313132 !important;
      color:#f0f0f0 !important;
    } 
  </style>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-around navAdd">

      <div>
        <i class="fa-solid fa-angle-up blik" style="color:aliceblue;"></i>
      </div>
      <div>
        <nav class="navbar navbar-expand-lg  ">

          <ul class="main-menu text-center">
            <li><a href="">Shop</a>
            </li>
            <li><a href="">Products</a>
            </li>
            <li><a href="">Service</a></li>
            <li><a href="">Contact</a>
            <li><a href="">Support</a>
            </li>
          </ul>
      </div>
      <div>
        <i class="fa-solid fa-magnifying-glass" style="color:aliceblue;"></i>
      </div>


      </nav>
    </div>

    <!-- Second -->
    <div class="d-flex justify-content-center">
      <div class="me-3">
        <img src="jenus.png" class="firstImg" alt="no-image">
      </div>
      <div class="mt-3">
        <p> EMPOWERING COMMUNITIES TO GIVE CHILDREN A BRIGHTER FUTURE.<span class="text-primary">Learn More></span></p>
      </div>

    </div>
    <!-- Third -->

    <div class="card borderw text-center" style="width: 100%;">

      <div class="card-body mx-auto ">
        <h5 class="card-title">ASSISTANT GLOBAL</h5>
        <p class="card-text">F O R T H E P E O P L E</p>
        <p text="center">Learn more></p>
      </div>
      <img src="image/world.png" class="imageClass mx-auto" alt="...">
    </div>

    <!-- Fourth -->
    <div class="mb-2">
      <div class="d-flex justify-content-between mb-2">
        <div class="me-2">
          <div class="card text-center" style="width: 100%;">

            <div class="card-body travel   ">
              <h5 class="card-title"><i class="fa-solid fa-angle-up me-2 mt-1" style="font-weight:900; font-size:3rem"></i><span class="mt-3" style="font-size:3rem">TRAVEL</span></h5>
              <p class="card-text">F O R T H E P E O P L E</p>
              <p text="center"> <span class="text-primary">Explore > </span></p>
            </div>
            <img src="image/second.png" class="imageClass mx-auto" alt="...">
          </div>

        </div>

        <div class="card text-center" style="width: 100%;">

          <div class="card-body mx-auto ">
            <h5 class="card-title">ASSISTANT GLOBAL</h5>
            <p class="card-text">F O R T H E P E O P L E</p>
            <p text="center">Learn more></p>
          </div>
          <img src="image/third.png" class="imageClass mx-auto" alt="...">
        </div>
      </div>
      <div class="d-flex justify-content-between mb-2">
        <div class="me-2">
          <div class="card text-center" style="width: 100%;">

            <div class="card-body mx-auto ">
              <h5 class="card-title">ASSISTANT GLOBAL</h5>
              <p class="card-text">F O R T H E P E O P L E</p>
              <p text="center">Learn more></p>
            </div>
            <img src="image/4.png" class="imageClass mx-auto" alt="...">
          </div>

        </div>

        <div class="card text-center" style="width: 100%;">

          <div class="card-body mx-auto ">
            <h5 class="card-title">ASSISTANT GLOBAL</h5>
            <p class="card-text">F O R T H E P E O P L E</p>
            <p text="center">Learn more></p>
          </div>
          <img src="image/5.png" class="imageClass mx-auto" alt="...">
        </div>
      </div>
      <div class="d-flex justify-content-between mb-2">
        <div class="me-2">
          <div class="card text-center" style="width: 100%;">

            <div class="card-body mx-auto ">
              <h5 class="card-title">ASSISTANT GLOBAL</h5>
              <p class="card-text">F O R T H E P E O P L E</p>
              <p text="center">Learn more></p>
            </div>
            <img src="image/6.png" class="imageClass mx-auto" alt="...">
          </div>

        </div>

        <div class="card text-center" style="width: 100%;">

          <div class="card-body mx-auto ">
            <h5 class="card-title">ASSISTANT GLOBAL</h5>
            <p class="card-text">F O R T H E P E O P L E</p>
            <p text="center">Learn more></p>
          </div>
          <img src="image/7.jpg" class="imageClass mx-auto" alt="...">
        </div>
      </div>


      <div class="d-flex justify-content-between mb-2">
        <div class="me-2">
          <div class="card text-center" style="width: 100%;">

            <div class="card-body mx-auto ">
              <h5 class="card-title">ASSISTANT GLOBAL</h5>
              <p class="card-text">F O R T H E P E O P L E</p>
              <p text="center">Learn more></p>
            </div>
            <img src="image/8.jpg" class="imageClass mx-auto" alt="...">
          </div>

        </div>

        <div class="card text-center" style="width: 100%;">

          <div class="card-body mx-auto ">
            <h5 class="card-title">ASSISTANT GLOBAL</h5>
            <p class="card-text">F O R T H E P E O P L E</p>
            <p text="center">Learn more></p>
          </div>
          <img src="image/9.jpg" class="imageClass mx-auto" alt="...">
        </div>
      </div>


      <div class="d-flex justify-content-between mb-2">
        <div class="me-2">
          <div class="card text-center" style="width: 100%;">

            <div class="card-body mx-auto ">
              <h5 class="card-title">ASSISTANT GLOBAL</h5>
              <p class="card-text">F O R T H E P E O P L E</p>
              <p text="center">Learn more></p>
            </div>
            <img src="image/4.png" class="imageClass mx-auto" alt="...">
          </div>

        </div>

        <div class="card text-center" style="width: 100%;">

          <div class="card-body mx-auto ">
            <h5 class="card-title">ASSISTANT GLOBAL</h5>
            <p class="card-text">F O R T H E P E O P L E</p>
            <p text="center">Learn more></p>
          </div>
          <img src="image/5.png" class="imageClass mx-auto" alt="...">
        </div>
      </div>
    </div>

    <!-- Fifth Portion -->
    <div class="me-5 ms-5 mt-5">
      <div class="d-flex justify-content-between me-5 ms-5">
        <div>
          <p>More ways to trade: Call-0008 876575 87</p>
        </div>
        <div>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-twitter"></i>
        </div>

      </div>
      <hr style="width:93%; margin-left:2rem" , size="3" , color=black>

      <div class="d-flex justify-content-between me-5 ms-5">
        <div>
          <p class="fs-3">Assistant Global</p>
        </div>
        <div>
          <ul class="main-menu text-center">
            <li><a href="">Help</a>
            </li>
            <li><a href="">Send Feedback</a>
            </li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Terms</a>
            <li><a href="">Disclaimer</a>
            </li>
          </ul>
        </div>
      </div>













    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>