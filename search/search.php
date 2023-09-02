<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="search.css"/>
    <link rel="stylesheet" href="../css/grid.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="./search.js"></script>
    <!--[if lt IE 9]>
    <div id="ie6-alert" style="width: 100%; text-align:center;">
        <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0"
             usemap="#Map" longdesc="http://die6.frontcube.com"/>
        <map name="Map" id="Map">
            <area shape="rect" coords="496,201,604,329"
                  href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank"
                  alt="Download Interent Explorer"/>
            <area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank"
                  alt="Download Apple Safari"/>
            <area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank"
                  alt="Download Opera"/>
            <area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank"
                  alt="Download Firefox"/>
            <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank"
                  alt="Download Google Chrome"/>
        </map>
    </div>
    <script src="../js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/ie.css">
    <![endif]-->
</head>
<body>
<div class="wrap-container">
    <div class="page">
        <!--============================== Header =================================-->
        <header id="header" class="header">
            <div id="stuck_container">
                <div class="container">
                    <div class="company">
                        <div class="company_cnt">
                            <h1 class="name">
                                <a href="#">Cleanex</a>
                            </h1>

                            <p class="company_slogan">on-line charity foundation</p>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="social-wrap">
                            <ul class="social-list">
                                <li>
                                    <a class="fa fa-facebook" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-rss" href="#"></a>
                                </li>
                            </ul>

                            <form id="search" class="search" action="search.php"
                                  method="get"
                                  accept-charset="utf-8">
                                <label class="input_wrap" for="search2">
                                    <input id="search2" onfocus="if(this.value == 'Search'){this.value = '';}"
                                           onblur="if(this.value == ''){this.value='Search';}" type="text" name="s"
                                           value="Search"/>
                                </label>
                                <a onclick="document.getElementById('search').submit()"
                                   href="#">
                                    <img src="../images/search.png" alt=""/>
                                </a>
                            </form>
                            <div class="clearfix"></div>
                        </div>


                        <nav>
                            <ul class="sf-menu">
                                <li>
                                    <a href="../index.html">Home</a>
                                </li>
                                <li>
                                    <a href="../index-1.html">About us</a>
                                    <ul>
                                        <li>
                                            <a href="#">History</a>
                                        </li>
                                        <li>
                                            <a href="#">News</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Latest</a>
                                                </li>
                                                <li>
                                                    <a href="#">Archive</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Testimonials</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../index-2.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="../index-3.html">Our Blog</a>
                                </li>
                                <li>
                                    <a href="../index-4.html">Contacts</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </header>
        <!--============================ Content ================================-->
        <div id="content" class="content">
            <div class="bg-content">
                <div class="wrapper_5 last-child">
                    <div class="container">
                        <div class="row">
                            <div class="grid_12">
                                <h2>Search Results</h2>

                                <div id="search-results"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--======================== Footer =================================-->
        <footer id="footer" class="footer">
            <div class="container">
                <p class="copyright">
                    <span id="copyright-year"></span> &copy;
                    <a href="../index-5.html">Privacy Policy</a>
                </p>
                <ul class="list">
                    <li>
                        <a href="#">Support</a>
                    </li>
                    <li>
                        <a href="#">FAQs</a>
                    </li>
                    <li>
                        <a href="#">Sitemap</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                </ul>
            </div>
        </footer>
        <div id="toTop">
            <span class="fa fa-angle-up"></span>
        </div>
    </div>
</div>
<script src="./script.js"></script>
</body>
</html>