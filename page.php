<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>

<div class="page-top">
    <div class="page-top__background page-top__background--group" style="background-image: url('https://janeprince.local/wp-content/uploads/2023/09/jane-bg-vision-2.jpg');">
      <!-- <div class="page-top__filter"></div> -->
    </div>
    <div class="page-top__content wrapper--medium">
      <?php if(the_post_thumbnail()) { ?>
      <figure class="page-top__figure">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php } ?>
      <div class="page-top__text">
        <h2 class="page-top__heading"><?php the_title();?></h2>
        <h3 class="page-top__subheading heading-tertiary">A collection of writings, and news updates from Jane</h3>
      </div>
    </div>

  </div>


  <section class="about-intro page-section page-section--top-padding">
    <div class="content-box content-box--narrow">
      <?php
          the_content();
        } wp_reset_postdata();
      ?>
    </div>
  </section>

  <?php

  get_footer();

  ?>
