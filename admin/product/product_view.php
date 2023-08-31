<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
    integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

  <link href="/common.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet" />



  <!-- summernote 시작-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <!-- summernote 끝 -->

  <title>product_view</title>

  <!-- 
  $servername = "localhost"; // 데이터베이스 서버 주소
  $username = "username"; // 사용자명
  $password = "password"; // 비밀번호
  $dbname = "database_name"; // 데이터베이스 이름
  
  // 데이터베이스 연결 생성
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // 연결 확인
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 


$sql = "SELECT column_name FROM table_name"; // 가져올 데이터 SQL 쿼리
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "데이터: " . $row["column_name"] . "<br>";
    }
} else {
    echo "데이터가 없습니다.";
}
-->


</head>

<body>
  <!-- 이은서 header 시작 -->
  <nav class="navbar">
    <div class="nav_top container-fluid">
      <h1 class="logo"><a href="index.html"><span>keep coding</span></a></h1>
      <div class="d-flex align-items-center">
        <div class="d-flex gap-3 align-items-center">
          <span><i class="bi bi-bell mc-gray3"></i></span>
          <div class="user d-flex align-items-center gap-3">
            <p class="mc-gray3">총관리자</p>
            <img src="../img/Ellipse 3.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="nav_side navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">대시보드</a>
        </li>
        <li>
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="#">카테고리 관리</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" aria-disabled="true">강좌 관리</a>
            </li>
          </ul>
        </li>
        <li>
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="#">강사 관리</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" aria-disabled="true">수강생 관리</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">쿠폰 관리</a>
        </li>
        <li>
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="#">공지사항</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" aria-disabled="true">Q&A 게시판</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul>
        <li class="nav-item d-flex justify-content-between">
          <a class="nav-link mc-b-rgba" aria-current="page" href="#">로그아웃</a>
          <a class="nav-link mc-b-rgba" aria-current="page" href="#"><i class="bi bi-gear-wide-connected"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- 이은서 header 끝 -->


  <!-- 박민용 product_view 시작 -->

  <div class="product_view_sec1 content mcbg-white d-flex flex-column">

    <div>
      <h4 class=" h4 pd48">강의상세보기</h4>
      <hr>
    </div>

    <!-- product_view_sec1  강좌명 -->

    <div class="product_view_sec2 row ">
      <div class="col">
        <h6 class="">강좌명</h6>
        <p class="">JavaScript 입문 수업</p>
      </div>

      <div class="col">
        <h6 class="">카테고리</h6>
        <p class="">기초강의>javascript>초급</p>
      </div>

    </div>

    <!-- product_view_sec2 수강기간, 판매금액,상태 -->

    <hr>
    <div class="product_view_sec2 row ">
      <div class="col">
        <h6 class="">수강 기한</h6>
        <p class="">무제한</p>
      </div>

      <div class="col">
        <h6 class="">시작일</h6>
        <p class="">2023.09.09</p>
      </div>

    </div>

    <hr>
    <!-- product_view_sec3 강좌설명 -->


    <div class="col">
      <h6>강좌설명</h6>
      <p class="">1.수업소개<br><br>
        &nbsp &nbsp a. 본 모듈은 자바스크립트 언어에 대한 기초 수업입니다. <br><br>
        &nbsp &nbsp b.텍스트 수업과 동영상 수업이 함께 제공 됩니다. 텍스트만으로도 완주 하실 수 있고, 동영상만으로도 완주 할 수 있도록 구성되었습니다.</p>
      <hr>
    </div>


    <!-- product_view_sec4 썸네일이미지 -->

    <div class="col">
      <h6 class="">썸네일</h6>
      <p class="mb-24">오리엔테이션.jpg</p>
      <br>
      <img src="../img/Ellipse 3.png" alt="">
    </div>

    <hr>
    <!-- product_view_sec5 영상업로드 -->


    <div class="product_view_sec2 row ">
      <h6 class="">강의 영상</h6>

      <div class="col">
        <p class="">JavaScript - 오리엔테이션</p>
      </div>


      <div class="col">
        <p class="col text-nowrap">
          <a href="#" data-toggle="modal" data-target="#videoModal">
            http://www.youtube.com/playlist?list=PLuHgQVnccGMA4uSig3hCjl7wTDeyIeZVU
          </a>

        </p>

      </div>

    </div>

    <hr>
    <!-- 3buttons -->

    <div class="d-flex gap-3 justify-content-end">
      <a href="#" class="btn btn-primary ">수정</a>
      <a href="#" class="btn btn-outline-success  ">삭제</a>
      <a href="#" class="btn btn-primary  ">강좌 리스트</a>
    </div>
  </div>



  <!-- modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <iframe width="100%" height="485"
            src="https://www.youtube.com/embed/videoseries?list=PLuHgQVnccGMA4uSig3hCjl7wTDeyIeZVU" frameborder="0"
            allowfullscreen></iframe>
          <h4 class="">WEB2 -JavaScript</h4>
          <p class="">기초강의 > javascript > 중급</p>

          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary ml-auto" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div> <!-- contents끝 -->

  <style>
    .content {
      height: 100%;
    }

    .modal-dialog {
      max-width: 600px;
      /* 모달 창 최대 너비 설정 */
    }

    hr {
      margin-top: calc(var(--base-unit) * 1);
      margin-bottom: calc(var(--base-unit) * 1);
    }


    h6 {
      margin-bottom: 24px;
      color: #6C757D;
    }
  </style>

  <script>



  </script>

  <!-- 박민용 product_list 끝 -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>