<?php require 'header.php' ?>

	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
    <div id="main">
        <div class="container">
            <div class="row">

      <?php require 'profile.php' ?>

                 <!-- Blog Post (Right Sidebar) Start -->
<div class="col-md-9">
  <div class="col-md-12 page-body">
    <div class="row">
      <div class="sub-title">
        <h2>My Blog / ກ່ອງບັນທືກບົດຄວາມ</h2>
          <a href="<?php the_permalink(); ?>"><i class="icon-envelope"></i></a>
      </div>
    <div class="col-md-12 content-page">


<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?> 
    <!-- Blog Post Start -->
  <a href="<?php the_permalink(); ?>">
    <div class="col-md-12 blog-post">
    <div class="post-image">
      <div class="img-responsive">
        <?php if ( has_post_thumbnail() ) {
  the_post_thumbnail('large');
} ?>
      </div>
        </div>
          <div class="post-title">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
              </div>
              <div class="post-info">
            <span>ວັນທີ: <?php echo get_the_date(); ?> by <a href="#" target="_blank">ປິຕິ ພັນທະສົມບັດ</a></span>
          </div>
        <p></p>
      <a href="<?php the_permalink(); ?>" class="button button-style button-anim fa fa-long-arrow-right"><span>ອ່ານທັງໝົດ</span></a>
    <hr>
</div>
  </a>

  <?php endwhile; ?>
<?php endif; ?>
          <!-- Blog Post End -->

<div class="col-md-12 text-center">
      <a href="javascript:void(0)" id="load-more-post" class="load-more-button">ເພີ່ມຕື່ມ</a>
      <div id="post-end-message"></div>
</div>

</div>

</div>
                        <!-- Subscribe Form Start -->
    <div class="col-md-8 col-md-offset-2">
      <form id="mc-form" method="post" action="">
				<div class="subscribe-form margin-top-20">
				 <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
						<button class="submit-btn" type="submit">Submit</button>
						</div>
            <p>Subscribe ເພື່ອຕິດຕາມຂ່າວສານບ໋ອກຂ້າພະເຈົ້າ</p>
					<label for="mc-email" class="mc-label"></label>
			</form>
    </div>
</div>

<?php  require 'footer.php' ?>
