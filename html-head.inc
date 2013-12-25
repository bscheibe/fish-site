<?php
/**
 * @global $title
 * @global $description
 * @global $keywords
 */
  $name = basename($_SERVER['SCRIPT_NAME'], '.php');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php print $title; ?></title>
    <meta name="description" content="<?php print $description; ?>" />
    <meta name="keywords" content="<?php print $keywords; ?>">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/grid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/menu-style.css" type="text/css" media="screen">
    <script type="text/javascript" src="/js/jquery-1.4.4.js"></script>
    <script type="text/javascript" src="/js/cufon-yui.js"></script>
    <script type="text/javascript" src="/js/cufon-replace.js"></script>
    <script type="text/javascript" src="/js/James_Fajardo_400.font.js"></script>
    <script type="text/javascript" src="/js/Franklin_Gothic_Medium_400.font.js"></script>
    <script type="text/javascript" src="/js/superfish.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="/js/easyTooltip.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".list-services a.tooltips").easyTooltip();
      });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
      <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
        <img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt=""/>
      </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-25262297-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <!-- includes for the photos page -->
    <?php if ($name == 'photos') { ?>
      <script type="text/javascript" src="/js/slides.min.jquery.js"></script>
      <link rel="stylesheet" type="text/css" media="screen" href="/css/slides.css">
      <script type="text/javascript" src="/js/slides.js"></script>
    <?php } ?>

    <script type="text/javascript">
      <!--//--><![CDATA[//><!--
      // Run when the DOM is loaded.
      $(function(){
        // Get the current page name.
        var page = String(window.location).match(/[^\/]*$/);
        if (page == '') page = 'index.php';
        // Add a class to the link with the current page.
        $('.menu a[href="' + page + '"]').addClass('active');
      });
      //--><!]]>
    </script>
  </head>
