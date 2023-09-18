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
  <link href="../../common.css" rel="stylesheet">
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

  <section class="container">
    <h2 class="h4 pshop_details_title">상세보기</h2>
    <div class="pshop_details_01 d-flex gap-5">
      <img src="../img/example08.png" alt="" class="shadow-sm">
      <div class="col pshop_details_text">
        <img class="cate_icon" src="../img/main_html.png" alt="">
        <h3 class="h4">HTML - 기본문법</h3>
        <p class="mc-gray4">프론트엔드>HTML>초급</p>
        <p class="pshop_details_01_contetn">본 수업은 HTML에 대한 심화된 내용을 다룹니다. <br>
          HTML의 기본문법과 HTML의 주요한 태그들에 대한 수업을 담고 있습니다.</p>
        <p class="h4 d-flex justify-content-end pshop_details_price">￦5,000</p>
      </div>
    </div>

    <div class="pshop_details_02 d-flex justify-content-between">
      <div class="d-flex">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 21C10.5 21 9 21 9 19.5C9 18 10.5 13.5 16.5 13.5C22.5 13.5 24 18 24 19.5C24 21 22.5 21 22.5 21H10.5ZM16.5 12C17.6935 12 18.8381 11.5259 19.682 10.682C20.5259 9.83807 21 8.69347 21 7.5C21 6.30653 20.5259 5.16193 19.682 4.31802C18.8381 3.47411 17.6935 3 16.5 3C15.3065 3 14.1619 3.47411 13.318 4.31802C12.4741 5.16193 12 6.30653 12 7.5C12 8.69347 12.4741 9.83807 13.318 10.682C14.1619 11.5259 15.3065 12 16.5 12ZM7.824 21C7.60163 20.5317 7.49074 20.0183 7.5 19.5C7.5 17.4675 8.52 15.375 10.404 13.92C9.46364 13.6303 8.48392 13.4886 7.5 13.5C1.5 13.5 0 18 0 19.5C0 21 1.5 21 1.5 21H7.824ZM6.75 12C7.74456 12 8.69839 11.6049 9.40165 10.9017C10.1049 10.1984 10.5 9.24456 10.5 8.25C10.5 7.25544 10.1049 6.30161 9.40165 5.59835C8.69839 4.89509 7.74456 4.5 6.75 4.5C5.75544 4.5 4.80161 4.89509 4.09835 5.59835C3.39509 6.30161 3 7.25544 3 8.25C3 9.24456 3.39509 10.1984 4.09835 10.9017C4.80161 11.6049 5.75544 12 6.75 12Z" fill="#212529"/>
        </svg>
        <p>123</p>
      </div>
      <button class="btn btn-lg btn-primary fs-6 h6">장바구니 담기</button>
    </div>

    <div class="pshop_details_03">
      <p class="h5 mb-3">수업의 목적</p>
      <p class="mb-5">본 수업은 HTML에 대한 심화된 내용을 다룹니다. HTML의 기본문법과 HTML의 주요한 태그들에 대한 수업을 담고 있습니다.</p> 

      <p class="h5 mb-3">선행학습</p>
      <p class="mb-5">본 수업을 효과적으로 수행하기 위해서는 웹애플리케이션에 대한 전반적인 이해가 필요합니다. 이를 위해서 준비된 수업은 아래 링크를 통해서 접근하실 수 있습니다. </p>
      
      <p class="h5 mb-3">최종목표</p>
      <p class="mb-5">위의 수업에서는 웹을 구성하고 있는 여러기술을 얕고 넓게 배웁니다. 각각의 기술들이 어떻게 관계하고 있는지를 알려드리는 것이 위 수업의 목적입니다. </p>

      <p class="h5 mb-3">진도</p>
      <p class="mb-5">우리 수업에서는 기본적이고, 중요한 것을 앞에 배치하고 있습니다. 이 수업을 모두 완주 할 필요 없습니다! 완주한다고 해도 어차피 전체 지식의 일부일 뿐이기 때문입니다. 공부할 수 있는 만큼 하다가 바빠지거나, 재미가 없거나, 공부의 의미를 못 느낀다면 나중에 다시 처음부터 보시면 됩니다. 공부를 지속할 수 없어서 처음부분만 여러번 열심히 보게 되는 것이 나쁜 것이 아닙니다. 어차피 처음 나오는 부분이 제일 중요하거든요. 본 수업은 youtube 재생목록으로도 제공되고 있습니다. </p>
    </div>

    <div class="d-flex justify-content-end pshop_details_04">
      <button class="btn btn-primary fs-6 h6" onclick="location.href='../product/product_shop_list.html';">강의탐색으로 돌아가기</button>
    </div>
  </section>

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