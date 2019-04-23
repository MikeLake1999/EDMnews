<?php
    require("user.php");
    $user = new user();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>EDM NEWS For Everyone</title>
    <!-- Favicons -->
  <link href="https://loopcentral.net/wp-content/uploads/2018/01/loopcentral-logo-150x110.png" rel="icon">
  <link href="https://loopcentral.net/wp-content/uploads/2018/01/loopcentral-logo-150x110.png" rel="icon">
    <link rel="stylesheet" id="cb-main-stylesheet-css" href="https://loopcentral.net/wp-content/themes/15zine/library/css/style.min.css?ver=3.1.2" type="text/css" media="all">
  <style type="text/css">body, #respond, .cb-font-body { font-family: 'Open Sans', sans-serif; } h1, h2, h3, h4, h5, h6, .cb-font-header, #bbp-user-navigation, .cb-byline{ font-family:'Montserrat', sans-serif; }</style><style>.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286:hover, .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286:focus { background:# !important ; }

</style>
<style>
        
        .title {
            font-size: 12px;
           
        }

        

       
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7COpen+Sans%3A400%2C700%2C400italic">
    <link rel="stylesheet" id="cb-main-stylesheet-css" href="https://loopcentral.net/wp-content/themes/15zine/library/css/style.min.css?ver=3.1.2" type="text/css" media="all">
    <script type="text/javascript" src="https://loopcentral.net/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
    
<style type="text/css">img#wpstats{display:none}</style><style type="text/css">.home-nav {
    background: #3dce27;
}

.menu-primary li.home-nav a:hover {
    background: #fff;
	color: #333;
}

.beg-vid-nav {
    background: #1A3A4F;
}

.menu-primary li.beg-vid-nav a:hover {
    background: #fff;
	color: #333;
}

.set-word-nav {
    background: #265573;
}

.menu-primary li.set-word-nav a:hover {
    background: #fff;
	color: #333;
}

.inst-word-nav  {  
background: #386D73;
}

.menu-primary li.inst-word-nav a:hover {
    background: #fff;
	color: #333;
}

.tools-nav {  
background: #81A68A;
}

.menu-primary li.tools-nav a:hover {
    background: #fff;
	color: #333;
}

.contact-nav {  
background: #9FBF8F;
}

.menu-primary li.contact-nav a:hover {
    background: #fff;
	color: #333;
}

.blog-nav {  
background: #D4D9B0;
}

.menu-primary li.blog-nav a:hover {
    background: #fff;
	color: #333;
}

.nav-primary a:hover, .nav-primary .current-menu-item > a {
    color: #333;
	background: #fff;
}

.menu-primary a:hover {
-webkit-box-shadow: 5px 5px 5px rgba(50, 50, 50, 50);
-moz-box-shadow:    5px 5px 5px rgba(50, 50, 50, 50);
box-shadow:         5px 5px 5px rgba(50, 50, 50, 50);
}

.menu-primary a, .menu a {
color: #fff;
}

.genesis-nav-menu .sub-menu a {
color: #333;
}#cb-nav-bar .cb-mega-menu-columns .cb-sub-menu > li > a { color: #f2c231; } .cb-entry-content a {color:#b72126; } .cb-entry-content a:hover {color:#b72126; } .cb-entry-content a:active {color:#b72126; } .cb-entry-content a:visited {color:#b72126; } .cb-entry-content a:focus {color:#b72126; }.cb-meta-style-1 .cb-article-meta { background: rgba(0, 0, 0, 0.5); }@media only screen and (min-width: 768px) {
                .cb-module-block .cb-meta-style-1:hover .cb-article-meta { background: rgba(0, 0, 0, 0.75); }
                .cb-module-block .cb-meta-style-2:hover img, .cb-module-block .cb-meta-style-4:hover img, .cb-grid-x .cb-grid-feature:hover img, .cb-grid-x .cb-grid-feature:hover .cb-fi-cover, .cb-slider li:hover img { opacity: 0.25; }
            }@media only screen and (min-width: 1020px){ body { font-size: 15px; }}.cb-mm-on.cb-menu-light #cb-nav-bar .cb-main-nav > li:hover, .cb-mm-on.cb-menu-dark #cb-nav-bar .cb-main-nav > li:hover { background: #b72126; }</style><!-- end custom css --><style type="text/css">body, #respond, .cb-font-body { font-family: 'Open Sans', sans-serif; } h1, h2, h3, h4, h5, h6, .cb-font-header, #bbp-user-navigation, .cb-byline{ font-family:'Montserrat', sans-serif; }</style><style>.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286:hover, .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286:focus { background:# !important ; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286 .cb-big-menu { border-top-color: #; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21026:hover, .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21026:focus { background:# !important ; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21026 .cb-big-menu { border-top-color: #; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21028:hover, .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21028:focus { background:# !important ; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21028 .cb-big-menu { border-top-color: #; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21027:hover, .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21027:focus { background:# !important ; }
.cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-21027 .cb-big-menu { border-top-color: #; }</style><link rel="icon" href="https://loopcentral.net/wp-content/uploads/2017/11/LC-Favicon-100x100.jpg" sizes="32x32">
<link rel="icon" href="https://loopcentral.net/wp-content/uploads/2017/11/LC-Favicon.jpg" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="https://loopcentral.net/wp-content/uploads/2017/11/LC-Favicon.jpg">
<meta name="msapplication-TileImage" content="https://loopcentral.net/wp-content/uploads/2017/11/LC-Favicon.jpg">
			<style type="text/css" id="wp-custom-css">
				/*
You can add your own CSS here.

Click the help icon above to learn more.
*/
a:link {color: #b72126; text-decoration: none; }			
</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" id="cb-main-stylesheet-css" href="https://loopcentral.net/wp-content/themes/15zine/library/css/style.min.css?ver=3.1.2" type="text/css" media="all">
    <style type="text/css">
        body,
        #respond,
        .cb-font-body {
            font-family: 'Open Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .cb-font-header,
        #bbp-user-navigation,
        .cb-byline {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <style>
        .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286:hover,
        .cb-mm-on #cb-nav-bar .cb-main-nav .menu-item-20286:focus {
            background: # !important;
        }
    </style>
    <!-- Sticky Sidebar -->
    <style>
    
        .sidebar-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            /* Position the items */
            // &:nth-child(2) { top: 25%; }
            // &:nth-child(3) { top: 50%; }
            // &:nth-child(4) { top: 75%; }
        }

        
        body,html
        {
                padding:0px !important;
        }


        .make-me-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;

            padding: 0 15px;
        }

        .affix {
            top: 0;
            width: 100%;
            z-index: 99 !important;
            background-color: rgba(255, 255, 255, 0.9);
        }
        


        }
    </style>
    
  
</head>

<body data-rsssl="1" class="home page-template page-template-page-15zine-builder page-template-page-15zine-builder-php page page-id-21  cb-sidebar-right  cb-sticky-mm cb-sticky-sb-on  cb-tm-dark cb-body-light cb-menu-light cb-mm-dark cb-footer-dark   cb-m-logo-off cb-m-sticky cb-sw-tm-box cb-sw-header-box cb-sw-menu-box cb-sw-footer-box cb-menu-al-left  cb-fis-b-standard">
    <div class="container">
       
         <?php require("header.php"); ?>
         <div class="author-span" style="margin-top:20px;margin-bottom:20px"><a class="title text-dark"><dt>Home&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Video</dt></a> </div>
         <div class="cb-module-header cb-category-header">
            <h1 class="cb-module-title">VIDEO</h1> </div>    
         
         <div class="row" style="margin-bottom: 10px;">
         <div class="embed-responsive embed-responsive-16by9">
         <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bLZHcnuqscU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         </div>
         
         
          <div class="row">
          
                  <div class="video col-lg-6 col-md-6 col-sm-12 col-xs-12 embed-responsive embed-responsive-16by9" style="margin-bottom:4px">
                  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bLZHcnuqscU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  
                  <div class="video col-lg-6 col-md-6 col-sm-12 col-xs-12 embed-responsive embed-responsive-16by9" style="margin-bottom:4px">
                  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bLZHcnuqscU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  
                  <div class="video col-lg-6 col-md-6 col-sm-12 col-xs-12 embed-responsive embed-responsive-16by9" style="margin-bottom:4px">
                  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bLZHcnuqscU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  
                  <div class="video col-lg-6 col-md-6 col-sm-12 col-xs-12 embed-responsive embed-responsive-16by9" style="margin-bottom:4px">
                  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bLZHcnuqscU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
          
          </div>
         
         
        <?php require("footer.php"); ?>
    </div>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2156766074436627',
      xfbml      : true,
      version    : 'v3.2'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
$(function(){
    $('iframe').addClass('embed-responsive-item');
});
</script>
</body>

</html>