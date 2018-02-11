<?php require 'header.php' ?>

	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
    <div id="main">
        <div class="container">
            <div class="row">
                 <!-- About Me (Left Sidebar) Start -->

<?php require 'profile.php' ?>

                <!-- About Me (Left Sidebar) End -->
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                        <div class="sub-title">
                           <a href="index.php" title="Go to Home Page"><h2>Back Home / ກັບໜ້າຫຼັກ</h2></a>
                              <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
                             </div>
<?php while ( have_posts() ) : the_post(); ?>
<div class="col-md-12 content-page">
  <div class="col-md-12 blog-post">
    <div class="img-responsive">
      <?php if ( has_post_thumbnail() ) {
the_post_thumbnail('large');
} ?>
    </div>
    <div class="post-title">
        <h2><?php the_title(); ?></h2>
            </div>

            <div class="post-info">
  <span>ວັນທີ: <?php echo get_the_date(); ?> by <a href="#" target="_blank">ປິຕິ ພັນທະສົມບັດ</a></span>
</div>
<p><?php the_content(); ?></p>


                                  <!-- Post Author Bio Box Start -->
<div class="about-author margin-top-70 margin-bottom-50">
    <div class="picture">
        <img src="<?php bloginfo("template_url"); ?>/images/blog/author.png" class="img-responsive" alt="">
                </div>
              <div class="c-padding">
            <h3>ຂຽນໂດຍ:<a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook ປິຕິ"> ປິຕິ ພັນທະສົມບັດ</a></h3>
        <p>ສະບາຍດີຂ້ອຍຊື່: " ປິຕິ " ເປັນຄົນທີ່ມັກຮັກດ້ານເຕັກໂນໂລຊີທັນສະໄໝ ເປັນນັກສືກສາຄະນະວິສະວະກຳສາດ: Computer Engineering</p>
    </div>
</div>
                                    <!-- Post Author Bio Box End -->
                                  <!-- Post Comment (Disqus) Start -->
<center>
  <div id="comment" class="comment">
    <h3>ສະແດງຄວາມຄິດເຫັນ:</h3>
    <div class="fb-comments" data-href="https://facebook.com/piti.laos" data-numposts="10"></div>
  </div>
</center>
        </div>
      </div>
      <?php endwhile; // end of the loop. ?>
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

            <?php require 'footer.php' ?>
