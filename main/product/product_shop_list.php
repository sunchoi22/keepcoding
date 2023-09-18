<?php
  $title =  '강의 탐색';
  include_once $_SERVER['DOCUMENT_ROOT'].'/keepcoding/main/inc/header.php';
  // include_once $_SERVER['DOCUMENT_ROOT'].'/keepcoding/main/inc/admin_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
  integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
  crossorigin="anonymous" referrerpolicy="no-referrer">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
  integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
  crossorigin="anonymous" referrerpolicy="no-referrer">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- summernote 시작--> 
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <!-- summernote 끝 -->
  <link href="/keepcoding/common.css" rel="stylesheet">
  <link href="/keepcoding/css/test.css" rel="stylesheet">
  <link href="/keepcoding/css/main_style.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!-- summernote 시작-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <!-- summernote 끝 -->
  <title>KEEP CODING</title>
</head>
<body>
  <!-- header 시작 -->
  <header class="header_wrap">
    <div class="nav nav-tabs container d-flex justify-content-between">
      <!-- 로고 시작 -->
        <h1 class="main_logo"><a href="../index.html"><span>keep coding</span></a></h1>
      <!-- 로고 끝 -->
      
      <!-- 메뉴 시작 -->
        <ul class="nav d-flex col-4 justify-content-between nav_menu">
          <li class="nav-item dropdown">
            <a class="dropdown-toggle h5" data-bs-toggle="dropdown" href="../product/product_shop_list.html" role="button" aria-expanded="false">강의탐색</a>
            <ul class="dropdown-menu nav_dropdown shadow-sm">
              <li class="fs-6"><a class="dropdown-item fs-6" href="../product/product_shop_list.html">프론트엔드</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="../product/product_shop_list.html">백엔드</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="../product/product_shop_list.html">기초강의</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
          <a class="h5" href="#">이벤트</a>
          </li>

          <li class="nav-item dropdown">
            <a class="dropdown-toggle h5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">커뮤니티</a>
            <ul class="dropdown-menu nav_dropdown shadow-sm">
              <li><a class="dropdown-item fs-6" href="#">공지사항</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="#">Q&amp;A</a></li>
            </ul>
          </li>
        </ul>
      <!-- 메뉴 끝 -->

      <!-- 장바구니,로그인 시작 -->
        <ul class="nav nav-login">
          <li class="nav-item item_cart"><a class="fs-6" href="../cart/cart.html">장바구니</a></li>
          <li class="nav-item"><a class="fs-6" href="../login.html">로그인</a></li>
          <!-- <li class="nav-item"><a class="fs-6" href="../mypage/myproduct_list.html">아이디</a></li> -->
          <li class="nav-item"><a class="fs-6" href="../signup.html">회원가입</a></li>
          <!-- <li class="nav-item"><a class="fs-6" href="../login_out.php">로그아웃</a></li> -->
        </ul>
      <!-- 장바구니,로그인 끝 -->
    </div>
  </header>
  <!-- header 끝 -->

  <h2 class="h4 container pshop_title">강의탐색</h2>
  <div class="container d-flex justify-content-between">
    <!-- pshop_section01 시작 -->
  <section class="pshop_section01 col-3">
    <div class="d-flex justify-content-between">
      <p class="h6"><img src="../img/pshop_sliders.svg" alt="필터"> 필터</p>
      <p class="h6"><a href="#" class="mc-gray1">초기화 <img src="../img/pshop_repeat.svg" alt="초기화"></a></p>
    </div>
    
    <div class="pshop_section01_list">
    <div class="pshop_section01_category">
      <h3 class="h6">카테고리</h3>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="category01">
        <label class="form-check-label" for="category01">
          프론트엔드
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="category02">
        <label class="form-check-label" for="category02">
          백엔드
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="category03" checked>
        <label class="form-check-label" for="category03">
          기초강의
        </label>
      </div>

    <div class="pshop_section01_recommend">
      <h3 class="h6">추천</h3>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="recommend">
        <label class="form-check-label" for="recommend">
          BEST 강의
        </label>
      </div>
    </div>
    
    <div class="pshop_section01_type">
      <h3 class="h6">유형</h3>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type" id="type01">
        <label class="form-check-label" for="type01">
          숏강의
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type" id="type02">
        <label class="form-check-label" for="type02">
          일반강의
        </label>
      </div>
    </div>

    <div class="pshop_section01_level">
      <h3 class="h6">난이도</h3>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="level01">
        <label class="form-check-label" for="level01">
          초급
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="level02">
        <label class="form-check-label" for="level02">
          중급
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="level03">
        <label class="form-check-label" for="level03">
          고급
        </label>
      </div>
    </div>
  </div>
  </div>
  </section>
  <!-- pshop_section01 끝 -->

  <!-- pshop_section02 시작 -->
  <section class="pshop_section02 col-9">
    <h2 class="h6"><span>24개</span>의 강의</h2>
    <div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="제목 및 내용 검색하기" aria-label="Search">
        <button class="btn btn-outline-primary col-1" type="submit">검색</button>
      </form>
    </div>

    <div class="card_list d-flex justify-content-between gap-3 row m-0">
      <!-- <div class="card sec2 text-center" data-bs-theme="dark">
        <a href="#">
          <div class="card-img-top-wrap">
            <img src="../img/example01.png" class="card-img-top" alt="example img">
          </div>
        </a>
          <div class="card-body z-3">
            <p class="card-title text-center fw-semibold">HTML - 기본 문법 학습</p>
            <p class="card-text text-center fs-12">코딩 기초 필수! 기본 문법 다지기!</p>
            <a href="#" class="btn btn-primary fs-10 mt-2">HTML</a>
            <a href="#" class="btn btn-primary fs-10 mt-2">￦1000</a>
          </div>
      </div> -->
    </div>

    <div class="d-flex justify-content-center">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- pshop_section02 끝 -->
  </div>

  <!-- footer 시작  -->
  <footer class="main_footer d-flex flex-column">
    <ul class="d-flex h6 justify-content-center">
      <li><a href="#">이용약관</a></li>
      <li><a href="#">윤리경영</a></li>
      <li><a href="#">개인정보처리방침</a></li>
      <li><a href="#">이메일무단수집거부</a></li>
      <li><a href="#">고객지원</a></li>
    </ul>
    <div class="d-flex justify-content-center">
      <address class="footer_address">
        <p>대표 <span>Zootopia</span> TEL<span>02-722-2111</span></p>
        <p>주소<span>서울특별시 종로구 관수동 수표로 96 2F 국일관</span></p>
          <div class="d-flex justify-content-center footer_item gap-4">
            <p><a aria-label="facebook" target="_blank" href="#">
              <img src="../img/footer_facebook.svg" alt="zootopiafacebook"></a></p>
            <p><a aria-label="youtube" target="_blank" href="#">
              <img src="../img/footer_youtube.svg" alt="zootopiayoutube"></a></p>
          </div>
        <p class="footer_copyright"><span>Copyright &copy; Zootopia Co. Ltd. All Rights Reserved.</span></p>
      </address>
    </div>
  </footer>
  <!-- footer 끝  -->
  <script>
    $("#datepicker").datepicker();

    $('#summernote').summernote({
      placeholder: 'Hello keep coding',
      tabsize: 2,
      height: 100
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="../main/js/jquery.number.min.js"></script>
  <script src="../main/js/active.js"></script>
  <script src="../main/js/main.js"></script>
  <script src="../js/product_shop_list.js"></script>
</body>
</html>
