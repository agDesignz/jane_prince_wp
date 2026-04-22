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
      <img src="<?php echo esc_url(get_theme_image_url('jane-housing-2.jpg')); ?>" alt="Jane being inspiring">
    </figure>
    <div class="page-top__text">
      <h2 class="page-top__heading"><?php the_title();?></h2>
      <h3 class="page-top__subheading heading-tertiary">Notes from Jane</h3>
    </div>
  </div>

</div>

<section class="page-section background--white">
  <div class="wrapper">
    <div class="content-box content-box--narrow">
      <?php
        $current_page = get_queried_object();
        $content      = apply_filters( 'the_content', $current_page->post_content );
        echo $content;
      ?>
    </div>
  </div>
</section>

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
        $imgUrl = esc_url(get_template_directory_uri() . '/assets/images/jane-housing-2.jpg');
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
