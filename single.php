<?php
get_header();
while(have_posts()) {
  the_post();

  if (has_post_thumbnail()) {
    $imgUrl = esc_url(get_the_post_thumbnail_url());
  } else {
    $imgUrl = esc_url(get_template_directory_uri() . '/assets/images/jane-speech.jpg'); // Update the path as needed
  }
?>

<div class="page-top">
  <div class="page-top__background page-top__background--blank">
    <!-- <div class="page-top__filter"></div> -->
  </div>
  <div class="page-top__content wrapper--medium">
    <figure class="page-top__figure">
    <img class="home-top__img" src="<?php echo $imgUrl; ?>">
    </figure>
    <div class="page-top__text">
      <h2 class="heading-secondary"><?php the_title();?></h2>
      <!-- <h3 class="page-top__subheading heading-tertiary"><?php the_title();?></h3> -->
    </div>
  </div>

</div>

<section class="page-section">
  <div class="wrapper">
    <div class="content-box content-box--narrow">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php
}
get_footer();
?>
