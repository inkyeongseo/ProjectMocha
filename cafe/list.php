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
    <link rel="stylesheet" href="../css/list.css">
    <link href="../icon/tit_logo.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
<!--    <script src="../js/append_list.js"></script>-->
    <?php
    $cafe_loaction = $_GET['location'];
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include '../database/dbConnect.php';
    #한 페이지에 보여질 게시물의 수
    $cafe_cate = "";

    $query = "";
    if ($cafe_loaction == 1) {
        $cafe_cate = "원주";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC";
    } elseif ($cafe_loaction == 2) {
        $cafe_cate = "기타";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 3) {
        $cafe_cate = "강남,역삼,삼성";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 4) {
        $cafe_cate = "이태원,한남";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 5) {
        $cafe_cate = "가로수길,압구정,청담";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 6) {
        $cafe_cate = "광화문,종로,을지로";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 7) {
        $cafe_cate = "건대,성수";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 8) {
        $cafe_cate = "대학로,성신";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 9) {
        $cafe_cate = "신촌,홍대,연남";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } elseif ($cafe_loaction == 10) {
        $cafe_cate = "잠실,방이,송리단길";
        $query = "SELECT * FROM cafe_master WHERE cafe_cate='$cafe_cate' ORDER BY cafe_id DESC ";
    } else {
#$page_size만큼의 글을 가져온다.
        $query = "SELECT * FROM cafe_master ORDER BY cafe_id DESC";
#sql실행
    }

    ?>
    <script>
        //$(function (e) {
        //    append_list('<?//=$cafe_loaction?>//');
        //    //스크롤 이벤트
        //    $(window).scroll(function () {
        //        var dh=$(document).height();
        //        var wh=$(window).height();
        //        var wt=$(window).scrollTop();
        //        if(dh==(wh+wt)){
        //            append_list('<?//= $cafe_loaction?>//');
        //        }
        //    });
        //});

    </script>

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
                                <td class="table_first"><a href="../cafe/list.php?location=5" class="nav1_cont">가로수길, 압구정, 청담</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=9" class="nav1_cont">신촌, 홍대, 연남</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=8" class="nav1_cont">대학로, 성신</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=3" class="nav1_cont">강남, 역삼, 삼성</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=1" class="nav1_tit">원주</a></td>
                            </tr>
                            <tr>
                                <td class="table_first"><a href="../cafe/list.php?location=7" class="nav1_cont">건대, 성수</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=10" class="nav1_cont">잠실, 방이, 송리단길</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=6" class="nav1_cont">광화문, 종로, 을지로</a></td>
                                <td class="table_two"><a href="../cafe/list.php?location=4" class="nav1_cont">이태원, 한남</a></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
        <!--cont_menu-->
        <div id="cont_tit">
            <div class="container">
                <div class="tit">
                    <p>: <?php echo $cafe_cate ?> </p>
                </div>
            </div>
        </div>
        <!-- cont_tit -->
        <div id="cont_list">
            <div class="container">
                <div class="list">
                    <?php
                    $result = mysqli_query($connect, $query);
                    if ($result == null)
                        print "정보가 없습니다";

                    if ($result != null) {
                        $img = null;
                        while ($info = mysqli_fetch_array($result)) {
                            $cafe_id = $info['cafe_id'];
                            $query = "SELECT * FROM cafe_pic WHERE cafe_id='$cafe_id'";
                            $Rimg = mysqli_query($connect, $query);

                            if ($Rimg != null) {
                                while ($rimg = mysqli_fetch_array($Rimg)) {
                                    $img = $rimg['cafe_thum'];
                                }
                            } else {
                                $img = "마이테라스1.jpg";
                            } ?>
                            <div class="box">
                                <a href="view.php?number=<?php echo $info['cafe_id'] ?>"><img
                                        src="../cafeThumb/<?= $img ?>" alt="<?= $info['cafe_name']; ?>">
                                </a><br/>
                                <a class="text" href="view.php?number=<?php echo $info['cafe_id'] ?>"><?= $info['cafe_name']; ?></a>
                            </div>
                            <?php
                        }
                    } else {
                        mysqli_close($connect);
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- //cont_list -->
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
    $(".nav .btn").click(function (e) {
        e.preventDefault();
        $("#cont_menu").slideToggle();
        $(this).toggleClass("on");
    });
</script>
</body>
</html>
