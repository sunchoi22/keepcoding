<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="icon" type="image/png" href="../../admin/img/logo_favicon.ico" crossorigin="anonymous">
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
  <link href="../../common.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/test.css" rel="stylesheet">
  <link href="../css/main_style.css" rel="stylesheet">

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
            <a class="dropdown-toggle h5" data-bs-toggle="dropdown" href="#none" role="button" aria-expanded="false">강의탐색</a>
            <ul class="dropdown-menu nav_dropdown shadow-sm">
              <li class="fs-6"><a class="dropdown-item fs-6" href="../product/product_shop_list.html">프론트엔드</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="../product/product_shop_list.html">백엔드</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="../product/product_shop_list.html">기초강의</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="../product/product_shop_list.html">숏강의</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="h5" href="../shorts/shorts.html">숏강의?</a>
          </li>

          <li class="nav-item dropdown">
            <a class="dropdown-toggle h5" data-bs-toggle="dropdown" href="#none" role="button" aria-expanded="false">커뮤니티</a>
            <ul class="dropdown-menu nav_dropdown shadow-sm">
              <li><a class="dropdown-item fs-6" href="#none">공지사항</a></li>
              <li><hr></li>
              <li><a class="dropdown-item fs-6" href="#none">Q&amp;A</a></li>
            </ul>
          </li>
        </ul>
      <!-- 메뉴 끝 -->

      <!-- 장바구니,로그인 시작 -->
        <ul class="nav nav-login">
          <li class="nav-item item_cart"><a class="fs-6" href="../cart/cart.html">장바구니</a></li>
          <!-- <li class="nav-item"><a class="fs-6" href="../login.html">로그인</a></li> -->
          <li class="nav-item"><a class="fs-6" href="../mypage/myproduct_list.html"><span>아이디</span></a></li>
          <!-- <li class="nav-item"><a class="fs-6" href="../members/signup.html">회원가입</a></li> -->
          <li class="nav-item"><a class="fs-6" href="../login.html">로그아웃</a></li>
        </ul>
      <!-- 장바구니,로그인 끝 -->
    </div>
  </header>
  <!-- header 끝 -->

  <!-- myproduct_list 시작 -->
  <section class="container myproduct_list d-flex justify-content-between">
    <div class="myproduct_list_my col-3">
      <h2 class="h4 myproduct_list_id"><span>아이디</span>님</h2>
      <p class="myproduct_list_main"><span>id@email.net</span></p>
      <ul>
        <li class="h6"><a class="mc-gray1" href="myproduct_list.html">나의 강의</a></li>
        <li class="h6"><a class="mc-gray1" href="mycoupon_list.html">나의 쿠폰</a></li>
      </ul>
    </div> 

    <div class="myproduct_list_list col-9">
      <h2 class="h4">나의 강의</h2>
      <div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="제목 및 내용 검색하기" aria-label="Search">
          <button class="btn btn-primary col-1 h6" type="submit">검색</button>
        </form>
      </div>

      <div>

        <div class="cart">
          <div class="cart_card shadow-sm mcbg-white w-100 d-flex justify-content-between">
            <div class="d-flex gap-4 row">
              <img src="../img/example06.png" alt="cart img" class="shadow-sm col">
              <div class="cart_info d-flex flex-column justify-content-between col-8">
                <div class="cart_about d-flex flex-column gap-1">
                  <h3 class="h5"><a href="../product/product_shop_details.html" class="mc-gray1">HTML - 기본문법</a></h3><br>
                  <p class="mc-gray4">프론트엔드>HTML>초급</p><br>
                </div>
                <p class="d-flex">본 수업은 HTML에 대한 심화된 내용을 다룹니다. 
                  HTML의 기본문법과 HTML의 주요한 태그들에 대한 수업을 담고 있습니다.
                  본 수업은 HTML에 대한 심화된 내용을 다룹니다. </p>
              </div>
            </div>
            <div class="d-flex flex-column align-items-end col-1">
              <a href="" class="mc-gray1 cart_trash justify-content-end">삭제
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="cart">
          <div class="cart_card shadow-sm mcbg-white w-100 d-flex justify-content-between">
            <div class="d-flex gap-4 row">
              <img src="../img/example10.png" alt="cart img" class="shadow-sm col">
              <div class="cart_info d-flex flex-column justify-content-between col-8">
                <div class="cart_about d-flex flex-column gap-1">
                  <h3 class="h5"><a href="../product/product_shop_details.html" class="mc-gray1">HTML - 기본문법</a></h3><br>
                  <p class="mc-gray4">프론트엔드>HTML>초급</p><br>
                </div>
                <p class="d-flex">본 수업은 HTML에 대한 심화된 내용을 다룹니다. 
                  HTML의 기본문법과 HTML의 주요한 태그들에 대한 수업을 담고 있습니다.
                  본 수업은 HTML에 대한 심화된 내용을 다룹니다. </p>
              </div>
            </div>
            <div class="d-flex flex-column align-items-end col-1">
              <a href="" class="mc-gray1 cart_trash justify-content-end">삭제
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="cart">
          <div class="cart_card shadow-sm mcbg-white w-100 d-flex justify-content-between">
            <div class="d-flex gap-4 row">
              <img src="../img/example05.png" alt="cart img" class="shadow-sm col">
              <div class="cart_info d-flex flex-column justify-content-between col-8">
                <div class="cart_about d-flex flex-column gap-1">
                  <h3 class="h5"><a href="../product/product_shop_details.html" class="mc-gray1">HTML - 기본문법</a></h3><br>
                  <p class="mc-gray4">프론트엔드>HTML>초급</p><br>
                </div>
                <p class="d-flex">본 수업은 HTML에 대한 심화된 내용을 다룹니다. 
                  HTML의 기본문법과 HTML의 주요한 태그들에 대한 수업을 담고 있습니다.
                  본 수업은 HTML에 대한 심화된 내용을 다룹니다. </p>
              </div>
            </div>
            <div class="d-flex flex-column align-items-end col-1">
              <a href="" class="mc-gray1 cart_trash justify-content-end">삭제
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#none">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#none">1</a></li>
            <li class="page-item"><a class="page-link" href="#none">2</a></li>
            <li class="page-item"><a class="page-link" href="#none">3</a></li>
            <li class="page-item"><a class="page-link" href="#none">Next</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </section>
  <!-- myproduct_list 끝 -->

  <!-- footer 시작  -->
  <footer class="main_footer d-flex flex-column">
    <ul class="d-flex h6 justify-content-center">
      <li><a href="#none">이용약관</a></li>
      <li><a href="#none">윤리경영</a></li>
      <li><a href="#none">개인정보처리방침</a></li>
      <li><a href="#none">이메일무단수집거부</a></li>
      <li><a href="#none">고객지원</a></li>
    </ul>
    <div class="d-flex justify-content-center">
      <address class="footer_address">
        <p>대표 <span>Zootopia</span> TEL<span>02-722-2111</span></p>
        <p>주소<span>서울특별시 종로구 관수동 수표로 96 2F 국일관</span></p>
          <div class="d-flex justify-content-center footer_item gap-4">
            <p><a aria-label="facebook" target="_blank" href="#none">
              <img src="../img/footer_facebook.svg" alt="zootopiafacebook"></a></p>
            <p><a aria-label="youtube" target="_blank" href="#none">
              <img src="../img/footer_youtube.svg" alt="zootopiayoutube"></a></p>
          </div>
        <p class="footer_copyright"><span>Copyright &copy; Zootopia Co. Ltd. All Rights Reserved.</span></p>
      </address>
    </div>
  </footer>
  <!-- footer 끝  -->
  <script src="../main/js/jquery.number.min.js"></script>
  <script src="../main/js/active.js"></script>
  <script src="../main/js/main.js"></script>
</body>
</html>
