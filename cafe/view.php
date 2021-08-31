<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../database/dbConnect.php';
$cafe_id = $_GET['number'];
#list.php에서 보내준 cafe_id를 받는다.
#$page_size만큼의 글을 가져온다.
$query = "SELECT * FROM cafe_master WHERE cafe_id='$cafe_id'";
$query_menu = " SELECT * FROM cafe_menu WHERE  cafe_id='$cafe_id'";
$query_pic = "SELECT * FROM cafe_pic WHERE cafe_id='$cafe_id'";
$query_menupic = "SELECT * FROM cafe_menupic WHERE cafe_id='$cafe_id'";
$query_service = "SELECT * FROM cafe_service WHERE cafe_id='$cafe_id'";
$query_workingday = "SELECT * FROM cafe_workingday WHERE cafe_id='$cafe_id'";
#sql실행
$result = mysqli_query($connect, $query);
$result_menu = mysqli_query($connect, $query_menu);
$result_pic = mysqli_query($connect, $query_pic);
$result_menupic = mysqli_query($connect, $query_menupic);
$result_service = mysqli_query($connect, $query_service);
$result_workingday = mysqli_query($connect, $query_workingday);
?>
<?php
$cafe_name = "";
$cafe_addr = "";
$cafe_cate = "";
$cafe_tel  = "";
$insta = "";
$insta2 = "";
$insta2 = "";
$facebook = "";
$facebook2 = "";
$blog = "";
$blog2 = "";
$etc = "";
$etc2 = "";
if ($result != null) {
    while ($info = mysqli_fetch_array($result)) {
        $cafe_name = $info['cafe_name'];
        $cafe_addr = $info['cafe_addr'];
        $cafe_cate = $info['cafe_cate'];
        $cafe_tel  = $info['cafe_tel'];
        $insta = $info['sns1'];
        $insta2 = $insta;
        if ($insta != "")
            $insta = "Instagram</br>";
        else
            $insta = "";
        $facebook = $info['sns2'];
        $facebook2 = $facebook;
        if ($facebook != "")
            $facebook = "Facebook</br>";
        else
            $facebook = "";
        $blog = $info['sns3'];
        $blog2 = $blog;
        if ($blog != "")
            $blog = "Blog</br>";
        else
            $blog = "";
        $etc = $info['sns4'];
        $etc2 = $etc;
        if ($etc != "")
            $etc = "Etc</br>";
        else
            $etc = "";
    }
}
$num = 0;
$cafe_picname = array();
$cafe_thum ="";
if ($result_pic != null) {
    while ($info = mysqli_fetch_array($result_pic)) {
        $cafe_thum = $info['cafe_thum'];
        if ($info['cafe_picname'] != $cafe_picname)
            $cafe_picname[$num++] = $info['cafe_picname'];
    }
}
$num = 0;
$cafe_menupic = array();
if ($result_menupic != null) {
    while ($info = mysqli_fetch_array($result_menupic)) {
        if ($info['menupic_name'] != $cafe_menupic)
            $cafe_menupic[$num++] = $info['menupic_name'];
    }
}
$num = 0;
$menu = array();
if ($result_menu != null) {
    while ($info = mysqli_fetch_array($result_menu)) {
        $menu[$info['menu_name']] = $info['menu_price'];
    }
}
$wifi = "";
$concent = "";
$sixPeople = "";
$innerToilet = "";
$toiletSex = "";
$valetparking = "";
$parkingSpace = "";
if ($result_service != null) {
    while ($info = mysqli_fetch_array($result_service)) {
        $wifi = $info['service1'];
        $concent = $info['service2'];
        $sixPeople = $info['service3'];
        if ($sixPeople == "O")
            $sixPeople = "6인석 확보</br>";
        else
            $sixPeople = "";
        $toiletSex = $info['service4'];
        $innerToilet = $info['service5'];
        $valetparking = $info['service6'];
        $parkingSpace = $info['service7'];
    }
}
$cafe_day = "";
$cafe_time1 = "";
$cafe_time2 = "";
$cafe_special ="";
$working=array();
if ($result_workingday != null) {
    while ($info = mysqli_fetch_array($result_workingday)) {
        $cafe_day = $info['cafe_day'];
        $cafe_time1 = $info['cafe_time1'];
        $cafe_time2 = $info['cafe_time2'];
        $working[$cafe_day] = $cafe_time1." - ".$cafe_time2;
        $cafe_special = $info['cafe_special'];
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="naver-site-verification" content="e9e131409725ad97c86e3ba564674dda7f528319" />
    <meta name="projectmocha" content="프로젝트목화 PROJECTMOCHA">
    <meta name="description" content="카페 정보를 한 눈에 볼 수 있는 프로젝트 목화">
    <meta name="keywords" content="카페, 카페추천, 카페투어, 핫플레이스, 대학로카페, 가로수길카페, 신촌카페, 홍대카페, 연남동카페, 잠실카페, 송리단길카페, 건대카페, 이태원카페, 한남동카페, 광화문카페, 을지로카페, 강남카페, 역삼카페, ">
    <meta property="og:title" content="프로젝트목화 PROJECTMOCHA">
    <meta property="og:description" content="카페 정보를 한 눈에 볼 수 있는 프로젝트 목화">
    
    <title>프로젝트목화 PROJECTMOCHA</title>
    
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/view.css">
    <link href="../icon/tit_logo.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet"> 
    
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div class="container">
                <div class="header">
                   <a href="http://www.projectmocha.co.kr"><img src="../icon/logo2.jpg"></a>
                </div>
            </div>
        </div>
        <!-- //header -->
        <div id="contents">
            <div id="cont_nav">
                <div class="container">
                    <div class="nav">
                        <a href="#" class="btn"><img src="../icon/menu.png"></a>
                        <a href="http://www.projectmocha.co.kr/cafe/about.php" class="nav1">about</a>
                        <a href="http://www.projectmocha.co.kr/news/news_list.php" class="nav1">news</a>
                        
                        <a href="https://m.facebook.com/projectmocha/" class="nav2">FACEBOOK</a>
                        <a href="https://www.instagram.com/project_mocha/" class="nav2">INSTAGRAM</a>
                        <a href="https://www.youtube.com/channel/UC-3ErGuzNkIquIHJddNYxMw" class="nav2">YOUTUBE</a>
                        <a href="https://blog.naver.com/projectmocha" class="nav2">BLOG</a>
                    </div>
                </div>
            </div>
            <!-- //cont_nav -->
            <hr>
            <div id="cont_menu">
                <div class="container">
                    <div class="menu">
                        <table>
                            <tr>
                                <td><a href="../cafe/list.php?location=5" class="nav1_cont">가로수길, 압구정, 청담</a></td>
                                <td><a href="../cafe/list.php?location=9" class="nav1_cont">신촌, 홍대, 연남</a></td>
                                <td><a href="../cafe/list.php?location=8" class="nav1_cont">대학로, 성신</a></td>
                                <td><a href="../cafe/list.php?location=3" class="nav1_cont">강남, 역삼, 삼성</a></td>
                                <td><a href="../cafe/list.php?location=1" class="nav1_tit">원주</a></td>
                            </tr>
                            <tr>
                                <td><a href="../cafe/list.php?location=7" class="nav1_cont">건대, 성수</a></td>
                                <td><a href="../cafe/list.php?location=10" class="nav1_cont">잠실, 방이, 송리단길</a></td>
                                <td><a href="../cafe/list.php?location=6" class="nav1_cont">광화문, 종로, 을지로</a></td>
                                <td><a href="../cafe/list.php?location=4" class="nav1_cont">이태원, 한남</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="cont_tit">
                <div class="container">
                    <div class="tit">
                        <p class="text1"><?php echo $cafe_name ?></p>
                        <p class="text2"><?php echo $cafe_addr ?></p>
                        <p class="text2"><?php echo $cafe_tel ?></p>
                    </div>
                </div>
            </div>
            <div id="cont_img">
                <div class="container">
                    
                    <div class="cont_img">
                           <div class="slide_wrapper">
                               <ul class="slides">
                                <li><img src="../cafeThumb/<?= $cafe_thum ?>" alt="카페대표사진"></li>
                                <?php
                                $num= 0;
                                while(!empty($cafe_picname[$num])){?>
                                    <li><img src="../cafeImage/<?= $cafe_picname[$num] ?>" alt="카페상세사진"></li>
                                <?php
                                    $num++;
                                }?>
                                <?php
                                $num2= 0;
                                while(!empty($cafe_menupic[$num2])){?>
                                    <li><img src="../cafeMenuPic/<?= $cafe_menupic[$num2] ?>" alt="카페메뉴사진"></li>
                                <?php
                                    $num2++;
                                }?>
                            </ul>
                           </div>
                    </div>
                    
                    
                </div>
            </div>
            <!-- //cont_img -->
            
            <div id="cont_button">
                <div class="container">
                    <div class="cont_button">
                        <p class="controls">
                        <span class="prev"><img src="../icon/prev.png" alt="이전버튼"></span>
                        <span class="next"><img src="../icon/next.png" alt="다음버튼"></span>
                        </p>
                    </div>
                </div>
            </div>
            <!--//cont_button-->
            
            <div id="cont_view">
                <div class="container">
                    <div class="view_l">
                        <div id="map" style="width:480px;height:360px;"></div>
                    </div>
                    <div class="view_r">
                        <table>
                            <tr>
                                <th>영업시간</th>
                                <td><?php
                                    foreach ($working as $d => $t) {
                                        echo "$d\t</br>\n";
                                    }
                                    ?>
                                </td>
                                <td><?php
                                    foreach ($working as $d => $t) {
                                        echo "$t\t</br>\n";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2"><?php echo $cafe_special ?></td>
                            </tr>
                            <tr>
                                <th style="padding-top:18px;">메뉴</th>
                                <td style="padding-top:18px;"><?php
                                    foreach ($menu as $m => $p) {
                                        echo "$m\t</br>\n";
                                    }
                                    ?></td>
                                <td style="padding-top:18px;"><?php
                                    foreach ($menu as $m => $p) {
                                        echo "$p</br>\n";
                                    }
                                    ?></td>
                            </tr>
                            <tr >
                                <th style="padding-top:18px;">와이파이</th>
                                <td style="padding-top:18px;"><?php echo $wifi ?></td>
                            </tr>
                            <tr>
                                <th>콘센트</th>
                                <td><?php echo $concent ?></td>
                            </tr>
                            <tr>
                                <th rowspan="2">주차</th>
                                <td>주차가능</td>
                                <td><?php echo $parkingSpace ?></td>
                            </tr>
                            <tr>
                                <td>발렛파킹</td>
                                <td><?php echo $valetparking ?></td>
                            </tr>
                            <tr>
                                <th rowspan="2">화장실</th>
                                <td>카페내부</td>
                                <td><?php echo $innerToilet ?></td>
                            </tr>
                            <tr>
                                <td>남녀구분</td>
                                <td><?php echo $toiletSex ?></td>
                            </tr>
                            <tr>
                                <th style="padding-top:18px;">SNS</th>
                                <td style="padding-top:18px;"><a href="<?php echo $insta2 ?>" target="_blank" style="color: #44536A;"><?php echo $insta ?></a><a href="<?php echo $facebook2 ?>" style="color: #44536A;"><?php echo $facebook ?></a><a href="<?php echo $blog2 ?>" style="color: #44536A;"><?php echo $blog ?></a><a href="<?php echo $etc2 ?>" style="color: #44536A;"><?php echo $etc ?></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>    
            </div>
            <!-- //cont_view -->
        </div>
        <!-- //contents -->
        <div id="footer">
            <div class="container">
                <div class="footer">
                    <span>프로젝트목화 Project Mocha</span>
                    <span>c.projectmocha@gmail.com</span>
                    <br>
                    <address>Copyright©projectmocha.co.kr All Right Reserved</address>
                </div>
            </div>
        </div>
        <!-- //footer -->
    </div>
    <!-- //wrap --> 
    <!--script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        //버튼을 클릭하면 전체 메뉴를 보이게 함
        $(".nav .btn").click(function(e){
            e.preventDefault();
            $("#cont_menu").slideToggle();
            $(this).toggleClass("on");
        });
    </script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dcf688f03c1ad34ff1288652e2133491&libraries=services"></script>
    
    <script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = {
            center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };  
    // 지도를 생성합니다    
    var map = new kakao.maps.Map(mapContainer, mapOption); 
    // 주소-좌표 변환 객체를 생성합니다
    var geocoder = new kakao.maps.services.Geocoder();
    // 주소로 좌표를 검색합니다
    geocoder.addressSearch('<?php echo $cafe_addr ?>', function(result, status) {
    // 정상적으로 검색이 완료됐으면 
     if (status === kakao.maps.services.Status.OK) {
        var coords = new kakao.maps.LatLng(result[0].y, result[0].x);
        // 결과값으로 받은 위치를 마커로 표시합니다
        var marker = new kakao.maps.Marker({
            map: map,
            position: coords
        });
        // 인포윈도우로 장소에 대한 설명을 표시합니다
        var infowindow = new kakao.maps.InfoWindow({
            content: '<div style="width:150px;text-align:center;padding:6px 0;"><?php echo $cafe_name ?></div>'
        });
        infowindow.open(map, marker);
        // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
        map.setCenter(coords);
    } 
});    
</script>

<script>
    var slides = document.querySelector('.slides'),
        slide = document.querySelectorAll('.slides li'),
        currentIdx = 0,
        slideCount = slide.length,
        prevBtn =document.querySelector('.prev'),
        slideWidth = 350,
        slideMargin = 35,
        nextBtn =document.querySelector('.next');
        
        slides.style.width = (slideWidth + slideMargin)*slideCount - slideMargin + 'px';
        
        function moveSlide(num){
            slides.style.left = -num * 1 * 355 +'px';
            currentIdx = num;
        }
        
        nextBtn.addEventListener('click', function(){
            if(currentIdx < slideCount-3){
                moveSlide(currentIdx+1); 
               }/*else{
                   moveSlide(0);
               }*/
        });
        
        prevBtn.addEventListener('click', function(){
            if(currentIdx > 0){
                moveSlide(currentIdx-1); 
               }
        });
    </script>
</body>
</html>