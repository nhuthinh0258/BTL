<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/feed.css">  
</head>
<?php
    session_start();
    if(!isset($_SESSION['loginok'])){
        header("location:../index.php");
    }
?>
<body>
    <header class="header-wrap" id="header">
        <div class="page-header">
                    <ul id=navhead>
                        <li class="col-3 ps-0 pe-0" id=col1>
                            <a class="tophome" href="../views/feed.php"><img src="../img/VK.com-logo.svg.png" width="30" height="30"></a>
                        </li>
                        <li class="col-3 ps-0" id=col2>
                            <form>
                                <input class="topsearch" type="text"placeholder="Search" aria-label="Search">
                            </form>
                        </li>
                        <li class="buttonhead1" id=col3>
                            <a id="navbarDarkDropdownMenuLink1" data-bs-toggle="dropdown" ><span class="far fa-bell fa-lg"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            <a id="navbarDarkDropdownMenuLink2" data-bs-toggle="dropdown"><span class="fas fa-music fa-lg"></span>
                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink2">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </a>
                        </li>
                        <li class="space" id=col4>
                            
                        </li>
                        <li class="buttonhead2" id="col5">
                            <a id="navbarDarkDropdownMenuLink3" data-bs-toggle="dropdown" style="padding: 17px 15px;"><span class="fas fa-bars fa-lg"></span></a>
                                <ul class="dropdown-menu" >
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            <a id="navbarDarkDropdownMenuLink3" data-bs-toggle="dropdown">
                                <div class="camera"><span class="fas fa-camera fa-lg" id="camera"></span><span class="fas fa-chevron-down" id="down"></span></div>
                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink3">
                                        <?php
                                            if(isset($_SESSION['loginok']))
                                            {
                                                echo "<p class='drop-link'style='padding:5px;'>Hello ".$_SESSION['loginok']."</p>";
                                                echo "<a class='dropdown-item'>";
                                                echo "<span class='fas fa-cog'style='color:blue; margin-right:10px;'></span>";
                                                echo "<span style='color:black'>Settings</span>";
                                                echo "</a>";
                                                echo "<a class='dropdown-item'>";
                                                echo "<span class='far fa-question-circle'style='color:blue; margin-right:10px;'></span>";
                                                echo "<span style='color:black'>Helps</span>";
                                                echo "</a>";
                                                echo "<a class='dropdown-item' href='../model/logout.php'>";
                                                echo "<span class='fas fa-user-friends'style='color:blue; margin-right:10px;'></span>";
                                                echo "<span style='color:black'>Sign out</span>";
                                                echo "</a>";

                                            }
                                        ?>
                                </ul>
                            </a>
                        </li>
                    </ul>
        </div>
    </header>

    <main>
        <div class="page-layout">
            <div class="container">
                <div class="nav-wrap">
                    <nav class="sidebar-wrap">
                        <ol class="sidebar">
                            <li id="1_pf">
                                <a href="#" class="left_row">
                                    <span class="far fa-user"id="icon"></span>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li id="2_n">
                                <a href="#" class="left_row">
                                    <span class="far fa-newspaper"id="icon"></span>
                                    <span>News</span>
                                </a>
                            </li>
                            <li id="3_mes">
                                <a href="#" class="left_row">
                                    <span class="fab fa-facebook-messenger"id="icon"></span>
                                    <span>Messenger</span>
                                </a>
                            </li>
                            <li id="4_call">
                                <a href="#" class="left_row">
                                    <span class="fas fa-phone-alt"id="icon"></span>
                                    <span>Calls</span>
                                </a>
                            </li>
                            <li id="5_fr">
                                <a href="#" class="left_row">
                                    <span class="fas fa-user-friends"id="icon"></span>
                                    <span>Friends</span>
                                </a>
                            </li>
                            <li id="6_Com">
                                <a href="#" class="left_row">
                                    <span class="fas fa-users"id="icon"></span>
                                    <span>Communities</span>
                                </a>
                            </li>
                            <li id="7_pic">
                                <a href="#" class="left_row">
                                    <span class="far fa-image"id="icon"></span>
                                    <span>Picture</span>
                                </a>
                            </li>
                            <li id="8_Aud">
                                <a href="#" class="left_row">
                                    <span class="fas fa-file-audio"id="icon"></span>
                                    <span>Audio</span>
                                </a>
                            </li>
                            <li id="9_cl">
                                <a href="#" class="left_row">
                                    <span class="fas fa-film"id="icon"></span>
                                    <span>Clips</span>
                                </a>
                            </li>
                            <li id="10_gm">
                                <a href="#" class="left_row">
                                    <span class="fas fa-gamepad"id="icon"></span>
                                    <span>Games</span>
                                </a>
                            </li>
                            <li id="11_cl">
                                <a href="#" class="left_row">
                                    <span class="fab fa-atlassian"id="icon"></span>
                                    <span>Classifields</span>
                                </a>
                            </li>
                            <li id="12_fl">
                                <a href="#" class="left_row">
                                    <span class="far fa-snowflake"id="icon"></span>
                                    <span>Flurry</span>
                                </a>
                            </li>
                            <li id="13_app">
                                <a href="#" class="left_row">
                                    <span class="fab fa-atlassian"id="icon"></span>
                                    <span>Mini apps</span>
                                </a>
                            </li>
                            <div class="hr"></div>
                            <li id="14_VK">
                                <a href="#" class="left_row">
                                    <span class="fas fa-shapes"id="icon"></span>
                                    <span>Flurry</span>
                                </a>
                            </li>
                            <li id="15_VK">
                                <a href="#" class="left_row">
                                    <span class="fab fa-paypal"id="icon"></span>
                                    <span>VKpay</span>
                                </a>
                            </li>
                            <div class="hr"></div>
                            <li id="1_pf">
                                <a href="#" class="left_row">
                                    <span class="far fa-bookmark"id="icon"></span>
                                    <span>Bookmark</span>
                                </a>
                            </li>
                            <li id="1_ads">
                                <a href="#" class="left_row">
                                    <span class="fas fa-volume-up"id="icon"></span>
                                    <span>Ads</span>
                                </a>
                            </li>
                        </ol>
                        <div class="ads-left">

                        </div>
                        <div class="left-menu">
                            <a class="left_menu_nav" href="#" >Blog</a>
                            <a class="left_menu_nav" href="#" >Developers</a>
                            <a class="left_menu_nav" href="#" >About VK</a>
                        </div>
                    </nav>
                </div>
                <div class="page-body">
                    <div class="main">
                        <div class="main-col">
                            <div class="main-col-e">
                                <div class="main-drop">
                                    <a>
                                        <div class="camera">
                                            <span class="fas fa-camera fa-lg" id="camera"></span>
                                        </div>
                                    </a>
                                    <div class="text">
                                        <input type="email" class="form-control px-0 py-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What news">
                                    </div>
                                    <div class="icon">
                                    <a>
                                        <span class="fas fa-camera fa-lg"></span>
                                    </a>
                                    <a>
                                        <span class="fas fa-play-circle"></span>
                                    </a>
                                    <a>
                                        <span class="fas fa-music"></span>
                                    </a>
                                    <a>
                                        <span class="far fa-file-alt"></span>
                                    </a>
                                    |
                                    <a>
                                        <span class="far fa-lightbulb"></span>
                                    </a>
                                    <a>
                                        <span class="fas fa-lock"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main_content1">
                                <div class="story">
                                    Stories
                                    <div class="sett">
                                    Settings
                                    </div>
                                </div>
                                <div class="story_feed">
                                    <div class="story_item"></div>
                                </div>
                            </div>
                            <div class="main_content2">
                                <div class="user">
                                    <div class="avatar">
                                        <a><img src="../img/tải xuống.png" witdh="50px" height="50px"></a>
                                    </div>
                                    <div class="idname">
                                        <h5>
                                            <a class="name">Nguyễn Như Thịnh</a>
                                        </h5>
                                        <div class="hour">
                                            <a class="post_hour">one hour ago</a>
                                        </div>
                                    </div>
                                    <div class="interactive">
                                        <button class="follow"><span class="fas fa-plus icon1"></span>Follow</button>
                                        <span class="fas fa-ellipsis-h icon2"></span>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <div class="wall_text">
                                        <div class="wall_text2">
                                            <div class="text_wall">
                                                Công nghệ web
                                            </div>
                                            <div class="imagewall">
                                                <img src="../img/img1.jpeg" class="img-fluid">
                                            </div>
                                            <div class="post_copy">
                                                <a class="copy" href="#">Source: Công nghệ web</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="like_form">
                                        <div class="post_like">
                                            <div class="btn_like">
                                                <div class="like btn">
                                                    <span class="far fa-heart"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="comment btn" style="margin-left:8px;">
                                                    <span class="far fa-comment"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="share btn" style="margin-left:8px;">
                                                    <span class="far fa-share-square"></span>
                                                    <span class="1">1</span>
                                                </div>
                                            </div>
                                            <div class="view">
                                                <span class="far fa-eye"></span>
                                                <span class="1">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_content2">
                                <div class="user">
                                    <div class="avatar">
                                        <a><img src="../img/tải xuống.png" witdh="50px" height="50px"></a>
                                    </div>
                                    <div class="idname">
                                        <h5>
                                            <a class="name">Nguyễn Như Thịnh</a>
                                        </h5>
                                        <div class="hour">
                                            <a class="post_hour">one hour ago</a>
                                        </div>
                                    </div>
                                    <div class="interactive">
                                        <button class="follow"><span class="fas fa-plus icon1"></span>Follow</button>
                                        <span class="fas fa-ellipsis-h icon2"></span>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <div class="wall_text">
                                        <div class="wall_text2">
                                            <div class="text_wall">
                                                Công nghệ web
                                            </div>
                                            <div class="imagewall">
                                                <img src="../img/img1.jpeg" class="img-fluid">
                                            </div>
                                            <div class="post_copy">
                                                <a class="copy" href="#">Source: Công nghệ web</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="like_form">
                                        <div class="post_like">
                                            <div class="btn_like">
                                                <div class="like btn">
                                                    <span class="far fa-heart"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="comment btn" style="margin-left:8px;">
                                                    <span class="far fa-comment"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="share btn" style="margin-left:8px;">
                                                    <span class="far fa-share-square"></span>
                                                    <span class="1">1</span>
                                                </div>
                                            </div>
                                            <div class="view">
                                                <span class="far fa-eye"></span>
                                                <span class="1">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_content2">
                                <div class="user">
                                    <div class="avatar">
                                        <a><img src="../img/tải xuống.png" witdh="50px" height="50px"></a>
                                    </div>
                                    <div class="idname">
                                        <h5>
                                            <a class="name">Nguyễn Như Thịnh</a>
                                        </h5>
                                        <div class="hour">
                                            <a class="post_hour">one hour ago</a>
                                        </div>
                                    </div>
                                    <div class="interactive">
                                        <button class="follow"><span class="fas fa-plus icon1"></span>Follow</button>
                                        <span class="fas fa-ellipsis-h icon2"></span>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <div class="wall_text">
                                        <div class="wall_text2">
                                            <div class="text_wall">
                                                Công nghệ web
                                            </div>
                                            <div class="imagewall">
                                                <img src="../img/img1.jpeg" class="img-fluid">
                                            </div>
                                            <div class="post_copy">
                                                <a class="copy" href="#">Source: Công nghệ web</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="like_form">
                                        <div class="post_like">
                                            <div class="btn_like">
                                                <div class="like btn">
                                                    <span class="far fa-heart"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="comment btn" style="margin-left:8px;">
                                                    <span class="far fa-comment"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="share btn" style="margin-left:8px;">
                                                    <span class="far fa-share-square"></span>
                                                    <span class="1">1</span>
                                                </div>
                                            </div>
                                            <div class="view">
                                                <span class="far fa-eye"></span>
                                                <span class="1">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main_content2">
                                <div class="user">
                                    <div class="avatar">
                                        <a><img src="../img/tải xuống.png" witdh="50px" height="50px"></a>
                                    </div>
                                    <div class="idname">
                                        <h5>
                                            <a class="name">Nguyễn Như Thịnh</a>
                                        </h5>
                                        <div class="hour">
                                            <a class="post_hour">one hour ago</a>
                                        </div>
                                    </div>
                                    <div class="interactive">
                                        <button class="follow"><span class="fas fa-plus icon1"></span>Follow</button>
                                        <span class="fas fa-ellipsis-h icon2"></span>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <div class="wall_text">
                                        <div class="wall_text2">
                                            <div class="text_wall">
                                                Công nghệ web
                                            </div>
                                            <div class="imagewall">
                                                <img src="../img/img1.jpeg" class="img-fluid">
                                            </div>
                                            <div class="post_copy">
                                                <a class="copy" href="#">Source: Công nghệ web</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="like_form">
                                        <div class="post_like">
                                            <div class="btn_like">
                                                <div class="like btn">
                                                    <span class="far fa-heart"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="comment btn" style="margin-left:8px;">
                                                    <span class="far fa-comment"></span>
                                                    <span class="1">1</span>
                                                </div>
                                                <div class="share btn" style="margin-left:8px;">
                                                    <span class="far fa-share-square"></span>
                                                    <span class="1">1</span>
                                                </div>
                                            </div>
                                            <div class="view">
                                                <span class="far fa-eye"></span>
                                                <span class="1">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="wrap-nar">
                        <div class="nar-col">
                            <div class="nar-col-e">
                                <a class="nar-drop" href="#">
                                    <span>News</span>
                                    <span class="fas fa-plus"></span>
                                    <span class="fas fa-sliders-h"></span>
                                </a>
                                <a class="nar-drop1" href="#">
                                    <span>Photos</span>
                                </a>
                                <a class="nar-drop1" href="#">
                                    <span>Videos</span>
                                </a>
                                <a class="nar-drop1" href="#">
                                    <span>Podcasts</span>
                                </a>
                                <a class="nar-drop1" href="#">
                                    <span>Coronalvirus</span>
                                </a>
                                <a class="nar-drop" href="#">
                                    <span>Recommended</span>
                                </a>
                                <a class="nar-drop" href="#">
                                    <span>Search</span>
                                </a>
                                <div class="space"></div>
                                <a class="nar-drop" href="#">
                                    <span>Reactions</span>
                                </a>
                                <a class="nar-drop" href="#">
                                    <span>Updates</span>
                                </a>
                                <a class="nar-drop" href="#">
                                    <span>Comments</span>
                                </a>
                            </div>
                            <div id="feed_filters">
                                <div class="feed-block">
                                    <div class="ui_toggler_wrap hot form-check form-switch">
                                        <div class="ui_toggler_label">Interesting at the top<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>