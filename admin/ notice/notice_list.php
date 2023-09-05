<?php
$title = '공지사항';
include_once $_SERVER['DOCUMENT_ROOT'].'/keepcoding/admin/inc/header.php';

$pagenationTarget = 'notice';
include_once $_SERVER['DOCUMENT_ROOT'].'/keepcoding/admin/inc/pagenation.php';

$bno = $_GET['idx'];
$search_keyword = $_GET['search_keyword'] ?? '';
$search_where = '';

if($search_keyword){
  $search_where .= " and (name like '%{$search_keyword}%' or content like '%{$search_keyword}%')";
  //제목과 내용에 키워드가 포함된 상품 조회
}

$sql = "SELECT * from notice where 1=1" ;
$sql .= $search_where;
$order = " order by idx desc";//최근순 정렬
$limit = " limit $statLimit, $endLimit";
$query = $sql.$order.$limit; //쿼리 문장 조합
$result = $mysqli->query($query);
// $newhit = $row['hit'] + 1;
while($rs = $result -> fetch_object()){
  $rsc[] = $rs;
}


?>


<!-- 최성희 notice_list 시작 -->
<div class="content">
  <h2 class="pd72 fs-4">공지 사항</h2>
    <form class="d-flex pd48" role="search">
      <input class="form-control form-control-lg me-4" name="search_keyword" id="search_keyword" type="search" placeholder="제목 및 내용 검색하기" aria-label="Search">
      <button class="btn btn-outline-primary nowrap col-1" type="submit">검색</button>
    </form>
  <table class="table notice_list_table">
    <thead>
      <tr class="fw-bold">
        <th class="col-1">No.</th>
        <th class="col-5">제목</th>
        <th class="col-1">작성자</th>
        <!-- <th class="col-1">댓글</th> -->
        <th class="col-1">조회</th>
        <th class="col-2">작성일</th>
        <th class="col-1">삭제</th>
      </tr>
    </thead>
    <tbody>
      <!-- notice_list_tr 시작 -->
      <?php
        if(isset($rsc)){
          foreach($rsc as $item){            
      ?>

      <tr>
        <td class="align-middle listIdx"><?= $item -> idx; ?></td>
        <td class="align-middle"><a href="/keepcoding/admin/notice/notice_view.php?idx=<?= $item-> idx; ?>"><?= $item -> title; ?></a></td>
        <td class="align-middle"><?= $item -> name; ?></td>
        <!-- <td class="align-middle">0</td> -->
           
        <td class="align-middle"><?= $item -> hit; ?> </td>
     

        <td class="align-middle">
        <?php $date = str_replace('-', '.', $item -> regdate ); 
        echo $date;
        ?>

        </td>
        
        <td class="align-middle">
          <a href="/keepcoding/admin/notice/notice_del.php?idx=<?= $item-> idx?>" id="delete" class="btn btn-outline-primary btn-sm">삭제</a>
        </td>
      </tr>
      <!-- notice_list_tr 끝 -->
      <!-- notice_list_tr 시작 -->
      <!-- <tr>
        <td class="align-middle">149</td>
        <td class="align-middle"><a href="notice_view.html">[보도자료/기사] 킵코딩 ‘킵콘 2023’... 성황리 종료</a></td>
        <td class="align-middle">관리자</td>
        <td class="align-middle">0</td>
        <td class="align-middle">0</td>
        <td class="align-middle">2023.09.09</td>
        <td class="align-middle">
          <button type="button" class="btn btn-outline-primary btn-sm">삭제</button>
        </td>
      </tr> -->
      <!-- notice_list_tr 끝 -->
 
      <?php
        } 
      } 
      ?>  

    </tbody>
  </table>
  <div class="d-flex align-items-center pd48">
    <nav aria-label="Page navigation example" class="col-11">
      <ul class="pagination justify-content-center">
      <?php
        if($pageNumber>1){                   
            echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?pageNumber=1\">&lt;&lt;</a></li>";
            if($block_num > 1){
                $prev = ($block_num - 2) * $block_ct + 1;
                echo "<li class=\"page-item\"><a href='?pageNumber=$prev' class=\"page-link\">이전</a></li>";
            }
        }
        for($i=$block_start;$i<=$block_end;$i++){
          if($pageNumber == $i){
              echo "<li class=\"page-item active\" aria-current=\"page\"><a href=\"?pageNumber=$i\" class=\"page-link\">$i</a></li>";
          }else{
              echo "<li class=\"page-item\"><a href=\"?pageNumber=$i\" class=\"page-link\">$i</a></li>";
          }
        }
        if($pageNumber<$total_page){
          if($total_block > $block_num){
              $next = $block_num * $block_ct + 1;
              echo "<li class=\"page-item\"><a href=\"?pageNumber=$next\" class=\"page-link\">다음</a></li>";
          }
          echo "<li class=\"page-item\"><a href=\"?pageNumber=$total_page\" class=\"page-link\">&gt;&gt;</a></li>";
        }
      ?>           
        <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">11</a></li>
        <li class="page-item"><a class="page-link" href="#">12</a></li>
        <li class="page-item"><a class="page-link" href="#">13</a></li>
        <li class="page-item active"><a class="page-link" href="#">14</a></li>
        <li class="page-item"><a class="page-link" href="#">15</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
      </ul>
    </nav>
    <a href="notice_up.php" class="btn btn-primary col-1">공지등록</a>
    <!-- <button type="button" class="btn btn-primary col-1" onClick="notice_up.php">공지등록</button> -->
  </div>
  
<div>
<!-- 최성희 notice_list 끝 -->

<script>
    // let btn = document.querySelector('#delete');

    // btn.addEventListener('click',(e)=>{
    //   e.preventDefault();
    //   let link = $(this).attr('href');
    //   console.log(link);
    //   if(confirm('삭제하시겠습니까?')){
    //     $(this).unbind('click').click();
    //     location.href= link;
    //   }else{
    //     alert('취소되었습니다');
    //   }
    // });

</script>

<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/keepcoding/admin/inc/footer.php';
?>
