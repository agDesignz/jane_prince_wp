<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php
    wp_head();
  ?>

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <title>Jane Prince for Saint Paul Ward 7</title>
</head>

<body <?php body_class(); ?>>
<header class="navigation">
      <div class="navigation__container">
        <div class="navigation__title-box">
          <a href="<?php echo site_url(); ?>" class="navigation__title-link">
            <h1 class="navigation__title">Jane Prince</h1>
          </a>
        </div>
  
        <input type="checkbox" class="navigation__checkbox" id="nav-toggle">
        <label for="nav-toggle" class="navigation__button">
          <!-- <div class="navigation__button--background"> -->
          <span class="navigation__icon">&nbsp;</span>
          <!-- </div> -->
        </label>
  
        <div class="navigation__background">
          <nav class="navigation__nav">
            <?php
              wp_nav_menu([
                'theme_location' => 'headerMenuLocation',
                // 'menu_class' => 'navigation__list',
                'container' => 'null'
              ]);
            ?>
          </nav>
        </div>
      </div>
    </header>