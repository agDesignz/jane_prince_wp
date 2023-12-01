<?php
get_header();
?>

<div class="page-top">
  <div class="page-top__background page-top__background--about"
    style="background-image: url(https://janeprince.local/wp-content/uploads/2023/09/jane-bg-about-2.jpg);">
    <!-- <div class="page-top__filter"></div> -->
  </div>
  <div class="page-top__content wrapper--medium">
    <figure class="page-top__figure">
      <img src="https://janeprince.local/wp-content/uploads/2023/09/jane-tree.jpg"
        alt="Jane embracing her inner environmentalist">
    </figure>
    <div class="page-top__text">
      <h2 class="page-top__heading"><?php the_title();?></h2>
      <h3 class="page-top__subheading heading-tertiary">Getting things done by working with the community</h3>
    </div>
  </div>

</div>

<section class="about-intro page-section">
  <div class="content-box content-box--narrow">
    <?php
      $current_page = get_queried_object();
      $content      = apply_filters( 'the_content', $current_page->post_content );
      echo $content;
    ?>
    <a class="btn btn--blue btn--center" href="#">Curriculum Vitae</a>
  </div>
</section>

<?php
get_footer();
?>