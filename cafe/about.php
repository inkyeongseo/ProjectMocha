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
    <link rel="stylesheet" href="../css/about.css">
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
            <div id="cont_cont">
                <div class="container">
                    <div class="cont">
                        <h3>ABOUT Project Mocha</h3>
                        <h2>HISTORY</h2>
                        <p class="cont_top">국내 카페의 유용한 정보를 제공하는 서비스 플랫폼 프로젝트목화.</p>
                        <p class="cont_text">프로젝트목화는 카페의 소소하지만 알고 싶은 정보들을 한눈에 담고 싶은 친구들의 바람을 현실로 이루기 위해 시작한 브랜드입니다.</p>    
                        <p class="cont_text">이 공간은 카페를 사랑하는 6人이 직접 모은 정보로 구성되어 있습니다.</p>
                        <h2>VISION</h2>
                        <p class="cont_top">프로젝트목화의 꿈은 카페 정보 공유를 통해 소비자의 편의성을 향상시키고</p>
                        <p class="cont_text">컨설팅과 마케팅을 제공하여 카페 문화와 사업의 발전에 기여하는 최고의 서비스 플랫폼이 되는 것입니다.</p>
                        <h2>CONTACT</h2>
                        <p class="cont_top"><strong>e-mail.</strong> c.projectmocha@gmail.com</p>
                    </div>
                </div>
            </div>
            <!-- //cont_img -->
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