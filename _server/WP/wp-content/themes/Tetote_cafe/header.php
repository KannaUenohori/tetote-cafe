<?php
global $template_url;
global $home_url;

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>

<html lang="ja">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2XGPYY747P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2XGPYY747P');
  </script>
  <meta name="google-site-verification" content="lQVDIsTUHjugK0CowuZ0opgRdcSgcqaGkaYPw8BloFs" />
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <title></title>

  <link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/css/sp.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/css/slick-theme.css">
  <script>
    (function(d) {
      var config = {
          kitId: 'esy6hfh',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <script>
    (function(d) {
      var config = {
          kitId: 'esy6hfh',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>


  <?php wp_head(); ?>

</head>

<body>
  <div id="wrapper">
    <header class="header-top outer-block">
      <div class="nav">
        <div class="nav-wrap">
          <div class="nav-open">
            <a href="<?php echo $home_url; ?>/">
              <img class="logo" src="<?php echo $template_url; ?>/image/home/tetote_logo.png" alt="Tetote Cafe">
            </a>
            <img src="<?php echo $template_url; ?>/image/home/menu_bar.svg" class="menu-bar sp" alt="">
          </div>
          <div class="nav-close">
            <img class="cross sp" src="<?php echo $template_url; ?>/image/home/cross.png" alt="">
            <ul class="nav-list">
              <li><a href="<?php echo $home_url; ?>/news/">NEWS</a></li>
              <li><a href="<?php echo $home_url; ?>/menu/">MENU</a></li>
              <li><a href="<?php echo $home_url; ?>/shop-info/">SHOP INFO</a></li>
              <li><a href="<?php echo $home_url; ?>/contact/">CONTACT</a></li>
              <li><a href="/">
                  <svg xmlns="http://www.w3.org/2000/svg" class="instagram" width="32" height="32" viewBox="0 0 256 256">
                    <path fill="currentColor" stroke="currentColor" d="M128 84a44 44 0 1 0 44 44a44.05 44.05 0 0 0-44-44m0 80a36 36 0 1 1 36-36a36 36 0 0 1-36 36m48-136H80a52.06 52.06 0 0 0-52 52v96a52.06 52.06 0 0 0 52 52h96a52.06 52.06 0 0 0 52-52V80a52.06 52.06 0 0 0-52-52m44 148a44.05 44.05 0 0 1-44 44H80a44.05 44.05 0 0 1-44-44V80a44.05 44.05 0 0 1 44-44h96a44.05 44.05 0 0 1 44 44ZM188 76a8 8 0 1 1-8-8a8 8 0 0 1 8 8" />
                  </svg>

                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>