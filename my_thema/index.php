<html>
<head>
  <title><?php wp_title('｜', true, 'right'); ?></title>
  <meta name="robots" content="index, follow">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="format-detection" content="telephone=no">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><script>

  <?php wp_head(); ?>
</head>

<body>
  <?php get_header(); ?>

  <main>
    <div class="lp-body">
      コンテント
    </div>
  </main>

  <?php get_footer(); ?>

  <?php wp_footer(); ?>
</body>
</html>
