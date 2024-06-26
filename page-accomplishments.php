<?php
require_once get_template_directory() . '/inc/image-url.php'; 
get_header();
while(have_posts()) {
  the_post();

?>

<div class="page-top">
  <div class="page-top__background page-top__background--group"
    style="background-image: url(<?php echo esc_url(get_theme_image_url('jane-bg-skyline.jpg')); ?>);">
    <!-- <div class="page-top__filter"></div> -->
  </div>
  <div class="page-top__content wrapper--medium">
    <figure class="page-top__figure">
      <img src="<?php echo esc_url(get_theme_image_url('jane-housing-2-768x768.jpg')); ?>" alt="Jane being inspiring">
    </figure>
    <div class="page-top__text">
      <h2 class="page-top__heading"><?php the_title();?></h2>
      <h3 class="page-top__subheading heading-tertiary">Getting things done by working with the community</h3>
    </div>
  </div>

</div>

    <?php }
      ?>

<section class="page-section">
  <div class="wrapper">
  <div class="grid grid--1-col grid--gap-h">

  <?php
    $accomplishmentPosts = new WP_Query([
      'post_type' => 'accomplishment'
    ]);

    while($accomplishmentPosts->have_posts()) {
      $accomplishmentPosts->the_post(); 
      if (has_post_thumbnail()) {
        $imgUrl = esc_url(get_the_post_thumbnail_url());
      } else {
        $imgUrl = esc_url(get_template_directory_uri() . '/assets/images/jane-housing-2-768x768.jpg');
      }
      ?>

    <div class="post-box">
      <figure class="post-box__image">
      <img src="<?php echo $imgUrl; ?>">
      </figure>
      <div class="post-box__text">
        <h2 class="post-box__title"><?php the_title();?></h2>
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
