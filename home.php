<?php

get_header();

?>

<div class="page-top">
  <div class="page-top__background page-top__background--group"
    style="background-image: url('https://janeprince.local/wp-content/uploads/2023/09/jane-bg-vision-2.jpg');">
    <!-- <div class="page-top__filter"></div> -->
  </div>
  <div class="page-top__content wrapper--medium">
    <figure class="page-top__figure">
      <img class="u-grid-img" src="https://janeprince.local/wp-content/uploads/2023/09/jane-speech.jpg" alt="Jane delivering a speech">
    </figure>
    <div class="page-top__text">
      <h2 class="page-top__heading">Vision</h2>
      <h3 class="page-top__subheading heading-tertiary">Getting things done by working with the community</h3>
    </div>
  </div>

</div>

<section class="page-section">
  <div class="wrapper">
  <div class="grid grid--1-col grid--gap-h">

  <?php
    while(have_posts()) {
      the_post(); ?>

    <div class="post-box">
      <figure class="post-box__image">
        <?php the_post_thumbnail(); ?>
      </figure>
      <div class="post-box__text">

        <div>
        <h2 class="post-box__title"><?php the_title();?></h2>
          <p class="post-box__meta">Posted on <?php the_time("n/j/y"); ?></p>
        </div>
        <div class="post-box__content">
          <?php
            if(has_excerpt()) {
              the_excerpt();
            } else {?>
                <p>
                  <?php echo wp_trim_words(get_the_content(), 40); ?>
                </p>
            <?php }
              ?>
        </div>
        <div class="post-box__button">
          <a href="<?php the_permalink(); ?>" class="btn btn--green">Read More</a>
        </div>
      </div>
    </div>

    <?php }wp_reset_postdata();
      ?>
  </div>
  </div>
</section>

<?php


get_footer();

?>
