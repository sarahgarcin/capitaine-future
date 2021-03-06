<!DOCTYPE html>
<html lang="<?php echo $site->language() ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php echo css('bower_components/slick-carousel/slick/slick.css') ?>
  <?php echo css('bower_components/vis/dist/vis-timeline-graph2d.min.css') ?>
  <?php echo css('assets/css/photoswipe.css') ?>
  <?php echo css('assets/css/default-skin/default-skin.css') ?>
 
  <?php if ( c::get('environment') == 'local' ) : ?>

  <?php echo css('assets/css/main.css') ?>

  <?php else: ?>

  <?php echo css('assets/production/main.min.css') ?>

  <?php endif ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn’t work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta property="og:site_name" content="<?php echo $site->ogsite_name()->html() ?>">
  <meta property="og:title" content="<?php echo $site->title()->html() ?>">
  <meta property="og:description" content="<?php echo $site->description()->html() ?>">
  <meta property="og:url" content="<?php echo $site->url() ?>">
  <meta property="og:image" content="<?php echo $site->ogimage()->html() ?>">
  <meta property="og:type" content="website">

  <meta name="twitter:title" content="<?php echo $site->title()->html() ?>">
  <meta name="twitter:description" content="<?php echo $site->description()->html() ?>">
  <meta name="twitter:url" content="<?php echo $site->url() ?>">
  <meta name="twitter:image" content="<?php echo $site->ogimage()->html() ?>">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="<?php echo $site->author()->html() ?>">

  <meta name="apple-mobile-web-app-capable" content="yes">

  <!-- Piwik -->
  <script type="text/javascript">
    // var _paq = _paq || [];
    // /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    // _paq.push(['trackPageView']);
    // _paq.push(['enableLinkTracking']);
    // (function() {
    //   var u="//capitainefutur.voyage/analytics/";
    //   _paq.push(['setTrackerUrl', u+'piwik.php']);
    //   _paq.push(['setSiteId', '1']);
    //   var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    //   g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    // })();
  </script>
  <!-- End Piwik Code -->

</head>
<body
   data-login="<?php e($site->user(),'true', 'false') ?>"
   data-template="<?php echo $page->template() ?>"
   data-intended-template="<?php echo $page->intendedTemplate() ?>">

   <?php snippet('menu') ?>
   <?php snippet('menu-mobile') ?>