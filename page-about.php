<?php
require_once get_template_directory() . '/inc/image-url.php'; 

get_header();
?>

<div class="page-top">
  <div class="page-top__background page-top__background--about"
    style="background-image: url(<?php echo esc_url(get_theme_image_url('jane-bg-about-2.jpg')); ?>);">
    <!-- <div class="page-top__filter"></div> -->
  </div>
  <div class="page-top__content wrapper--medium">
    <figure class="page-top__figure">
      <img src="<?php echo esc_url(get_theme_image_url('jane-firefighters-2.jpg')); ?>"
        alt="Jane embracing her inner environmentalist">
    </figure>
    <div class="page-top__text">
      <h2 class="page-top__heading"><?php the_title();?></h2>
      <h3 class="page-top__subheading heading-tertiary">Citizen, Neighbor, Participant</h3>
    </div>
  </div>

</div>

<section class="page-section background--white">
  <div class="grid">
    <div class="grid__item content-box content-box--narrow">
      <!-- <h2 class="home-about__title heading-secondary heading-secondary--larger">Citizen, Neighbor, Participant</h2> -->
      <p>Jane Prince has been an active resident of St. Paul’s Ward 7 since 1984 when she
        and her husband purchased their family home in the Mounds Park neighborhood. Elected to St. Paul’s City Council in 2015, Jane passionately and effectively served her neighbors in Ward 7’s diverse neighborhoods until 2023. Now out of office, Jane's commitment to service and community continues as strong as ever.</p>
      <div class="">
      </div>
    </div>
  </div>
</section>

<section class="home-about background--green">
  <div class="grid">
    <div class="home-about__image grid__item grid__item--md-6" style="background: url(<?php echo esc_url(get_theme_image_url('jane-2-lg.jpg')); ?>) no-repeat center 30%;
    background-size: cover;">
    </div>
    <div
      class="home-about__content grid__item grid__item--md-6 content-box u-pv content-box--narrow content-box--narrow--half">
      <h2 class="heading-secondary">Representing Ward 7,<br>Saint
        Paul's East Side</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quas tenetur qui voluptatem voluptatum
        commodi ad est. Unde quo reprehenderit modi repudiandae provident labore delectus consequatur quia omnis
        similique. Ipsa.</p>
      <a href="#" class="btn btn--white">Learn More</a>
    </div>
  </div>
</section>

<section class="home-vision background--grey">
  <div class="home-vision__main grid">
    <div
      class="home-vision__content grid__item grid__item--md-6 content-box content-box--narrow content-box--narrow--half u-pv">
      <h2 class="heading-secondary">Jane's vision</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quas tenetur qui voluptatem voluptatum
        commodi ad est. Unde quo reprehenderit modi repudiandae provident labore delectus consequatur quia omnis
        similique. Ipsa.</p>
      <a href="#" class="btn btn--green">Learn More</a>
    </div>
    <div class="home-vision__image grid__item grid__item--md-6" style="background: url(<?php echo esc_url(get_theme_image_url('jane-vision-xl.jpg')); ?>) no-repeat center 30%;
    background-size: cover;">

    </div>
  </div>
</section>

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