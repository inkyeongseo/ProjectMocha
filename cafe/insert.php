<?php
    include '../database/dbConnect.php';
    
    
    $date = date("YmdHis");
    

    //---------------cafe_master 삽입-----------------
    $cafeName = $_POST['cafeName'];
    $cafeTel = $_POST['cafeTel'];
    $cafeCate = $_POST['cafeCate'];
    $cafeAddr = $_POST['cafeAddr'];
    //카페 이름, 전화번호, 카테고리, 주소

    $cafe_id = $date.$cafeName;

    $sns1 = $_POST['sns1'];
    $sns2 = $_POST['sns2'];
    $sns3 = $_POST['sns3'];
    $sns4 = $_POST['sns4'];


    $sql = "insert into cafe_master(cafe_id,cafe_name,cafe_tel,cafe_addr,cafe_cate,sns1,sns2,sns3,sns4) values('$cafe_id','$cafeName','$cafeTel','$cafeAddr','$cafeCate','$sns1','$sns2','$sns3','$sns4')";
    $result1 = $connect -> query($sql);

    //-------------cafe_master 끝 -----------------------------
    

    //-------------cafe_pic 삽입--------------------------------
    $thumbPath = '../cafeThumb/';
    $picPath = '../cafeImage/';
    
    $thumbPath2 = '../mobile/cafeThumb/';
    $picPath2 = '../mobile/cafeImage/';

    // 썸네일 부분 
    if(isset($_FILES['cafeThumb']['name'])){
        $thumbName = $cafe_id.$_FILES['cafeThumb']['name'];
        move_uploaded_file($_FILES['cafeThumb']['tmp_name'], $thumbPath2.$thumbName);
    }else{
        $thumbPath = '';
        $thumbName = ''; 
    }

    for($i=0;$i<count($_FILES['cafePic']['size']);$i++){      
        if(strstr($_FILES['cafePic']['type'][$i], 'image')!==false){
            $picName = $cafe_id.$_FILES['cafePic']['name'][$i];
            move_uploaded_file($_FILES['cafePic']['tmp_name'][$i], $picPath2.$picName);
            $sql = "insert into cafe_pic(cafe_id,cafe_thum,	cafe_picname) values('$cafe_id', '$thumbName', '$picName')";
            $result2 = $connect -> query($sql);
        }
    }
    //-----------cafe_pic 끝-------------------------


    //-----------cafe_menupic 삽입-------------------
    $menuPicPath = '../cafeMenuPic/';
    $menuPicPath2 = '../mobile/cafeMenuPic/';

    for($i=0;$i<count($_FILES['menupic']['size']);$i++){      
        if(strstr($_FILES['menupic']['type'][$i], 'image')!==false){
            $menuPic = $cafe_id.$_FILES['menupic']['name'][$i];
            move_uploaded_file($_FILES['menupic']['tmp_name'][$i], $menuPicPath.$menuPic);
            move_uploaded_file($_FILES['menupic']['tmp_name'][$i], $menuPicPath2.$menuPic);
            $sql = "insert into cafe_menupic(cafe_id,menupic_name) values('$cafe_id', '$menuPic')";
            $result3 = $connect -> query($sql);
        }
    }
    //---------cafe_menupic 끝-----------------------


    //----------cafe_service 삽입 -------------------
    $service1 = $_POST['service1'];
    $service2 = $_POST['service2'];
    $service3 = $_POST['service3'];
    $service4 = $_POST['service4'];
    $service5 = $_POST['service5'];
    $service6 = $_POST['service6'];
    $service7 = $_POST['service7'];
    
    $sql = "insert into cafe_service(cafe_id,service1,service2,service3,service4,service5,service6,service7) values('$cafe_id','$service1','$service2','$service3','$service4','$service5','$service6','$service7')";
    $result4 = $connect -> query($sql);
    
    //----------cafe_service 끝 - -------------------

    //----------cafe_post 삽입 -----------------------
    $postwrite = $_POST['postwrite'];

    $sql = "insert into cafe_post(cafe_id,post_write) values('$cafe_id', '$postwrite')";
    $result5 = $connect -> query($sql);

    //----------cafe_post 끝--------------------------

    
    //----------cafe_menu 삽입 -----------------------
    
    if($_POST['cafeMenuname'][0]!=''){
        $cafeMenuname = $_POST['cafeMenuname'];
        $cafePrice = $_POST['cafePrice'];

        for ($i =0; $i < count($cafeMenuname); $i++) {
            $sql = "insert into cafe_menu(cafe_id,menu_name,menu_price) values ('$cafe_id','".$cafeMenuname[$i]."', '".$cafePrice[$i]."')";
            $connect -> query($sql);
        }
    }

    //----------cafe_menu 끝 ---------------------------

    //----------cafe_workingday 삽입 -------------------
    $cafespecial = $_POST['cafespecial'];
    $instacheck =$POST['instacheck'];


    if($_POST['day'][0]!=''){
        $day = $_POST['day'];
        $time1 = $_POST['time1'];
        $time2 = $_POST['time2'];

        for ($i =0; $i < count($day); $i++) {
            $sql = "insert into cafe_workingday(cafe_id,	cafe_time1,	cafe_time2,cafe_day,cafe_special,insta_check) values('$cafe_id', '".$time1[$i]."','".$time2[$i]."','".$day[$i]."','$cafespecial','$instacheck')";
            $result7 = $connect -> query($sql);
        }
    }


    
    //-----------cafe_workingday 끝 --------------------


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
    <link rel="stylesheet" href="../css/insert.css">
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
            <!--cont_menu-->
            
            <div id="cont_cont">
                <div class="container">
                    <div class="cont">
                    <h3>♥참여해주셔서 감사합니다♥</h3>
                    <h2>문의사항이 있으신 분은 c.projectmocha@gamil.com로 해주세요</h2>
                    <h1>앞으로 많은 이용부탁드립니다.</h1>
                    <a href="http://www.projectmocha.co.kr">-메인 페이지로 이동-</a><br>
                    <a href="http://www.projectmocha.co.kr/cafe/write.php">-카페작성 페이지로 이동-</a>
                    </div>
                </div>
            </div>    
            
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
</body>
</html>
