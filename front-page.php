<?php
  require_once get_template_directory() . '/inc/image-url.php'; 
  get_header();
?>

<div class="home-top__container">

  <div class="home-top__content">
    <h2 class="home-top__subtitle">Working for<br>Saint
      Paul<br>and the<br>East Side</h2>
  </div>

  <div class="home-top__portrait">
    <figure class="home-top__fig">
      <picture>
        <!-- <source srcset="assets/images/jane-portrait--lg.jpg" media="(min-width: 600px)"> -->
        <img class="home-top__img" src="<?php echo esc_url(get_theme_image_url('jane-portrait-lg-cropped.jpg')); ?>" alt="Portrait of Jane Prince">
      </picture>
    </figure>
  </div>

</div>
</header>

<section class="page-section page-section--top-padding background--white">
  <div class="grid">
    <div class="grid__item content-box content-box--narrow">
      <h2 class="home-about__title heading-secondary heading-secondary--larger">Citizen, Neighbor, Participant</h2>
      <p>Jane Prince has been an active resident of St. Paul’s Ward 7 since 1984 when she
      and her husband purchased their family home in the Mounds Park neighborhood. Elected to St. Paul’s City Council in 2015, Jane passionately and effectively served her neighbors in Ward 7’s diverse neighborhoods until 2023. Now out of office, Jane's commitment to service and community continues as strong as ever.</p>
      <div class="">
        <a href="/about" class="btn btn--green">Learn more <i class="fa-solid fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>



<section class="home-feed page-section background--white">
  <div class="wrapper grid grid--gap-h">
    <h2 class="heading-secondary grid__item grid__item--ctr">Stay Up To Date</h2>
    <div class="home-feed__container grid__item">

      <?php
      $homepagePosts = new WP_Query([
        'post_type' => 'post', // Fetch blog posts
        'posts_per_page' => 10 // Number of posts to display
      ]);

      while ($homepagePosts->have_posts()) {
        $homepagePosts->the_post();
    ?>

      <a href="<?php the_permalink(); ?>" class="box-link">
        <div class="box-link__container" style="background: url(<?php the_post_thumbnail_url(); ?>)">
          <div class="box-link__bg">
              <h3 class="box-link__title"><?php the_title(); ?></h3>
              <div class="box-link__excerpt">
                    <?php if (has_excerpt()) {
                      the_excerpt();
                    } else {
                      ?><p class="box-link__text"><?php echo wp_trim_words(get_the_content(), 40);?></p><?php
                    }?>
                <h4 class="box-link__tag">Read More</h4>
              </div>
          </div>
        </div>
      </a>

      <?php } wp_reset_postdata();
         ?>

    </div>
  </div>
</section>


<?php
    get_footer();
  ?>