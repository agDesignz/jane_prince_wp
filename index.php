<?php
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
        <img class="home-top__img"
          src="https://janeprince.local/wp-content/uploads/2023/09/jane-portrait-lg-cropped.jpg"
          alt="Portrait of Jane Prince">
      </picture>
    </figure>
  </div>

</div>
</header>

<section class="page-section background--white">
  <div class="grid">
    <div class="grid__item content-box content-box--narrow">
      <h2 class="home-about__title heading-secondary heading-secondary--larger">Citizen, Neighbor, Participant</h2>
      <p>Jane Prince has been an active resident of St. Paul’s Ward 7 since 1984 when she
        and
        her husband purchased
        their family home in the Mounds Park neighborhood. Elected to St. Paul’s City Council in 2015, Jane
        passionately
        and effectively serves her neighbors in Ward 7’s diverse neighborhoods.</p>
      <div class="">
        <a href="#" class="btn btn--green">Learn more <i class="fa-solid fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="home-about background--green">
  <div class="grid">
    <div class="home-about__image grid__item grid__item--md-6">
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
    <div class="home-vision__image grid__item grid__item--md-6">

    </div>
  </div>
</section>

<section class="home-feed page-section background--white">
  <div class="wrapper grid grid--gap-h">
    <h2 class="heading-secondary grid__item grid__item--ctr">Stay Up To Date</h2>
    <div class="home-feed__container grid__item">

      <?php
      $homepagePosts = new WP_Query([
        'posts_per_page' => 3,
        'category_name' => 'home-page'
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
