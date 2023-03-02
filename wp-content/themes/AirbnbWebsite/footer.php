<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>    <section>
<div class="container mt-5">
  <div class="mar-footer">
	 <div class="row">
	 <?php while (have_rows('footer',82)) : the_row(); ?>
	  <div class="col-md-3">
	
		  <h3 class="section-heading4"><?php echo get_sub_field('footer_heading',82);?></h3>
		  <ul class="">
			  <li class="foot-list"><?php echo get_sub_field('footer_description',82);?></li>
			  <!-- <li class="foot-list"> <?php //echo get_sub_field('footer_description',82);?></li>
			  <li class="foot-list"><?php //echo //get_sub_field('footer_description',82);?></li>
			  <li class="foot-list"><?php //echo get_sub_field('footer_description',82);?></li>
			  <li class="foot-list"><?php //echo get_sub_field('footer_description',82);?></li>
			  <li class="foot-list"><?php// echo get_sub_field('footer_description',82);?></li> -->
		  </ul>
		
	  </div>
	  <?php endwhile;?>
	  <!-- <div class="col-md-3">
		  <h3 class="section-heading4"> Community</h3>
		  <ul class="">
		  <li class="foot-list">Airbnb.org: disaster relief housing</li>
		  <li class="foot-list"> Support Afghan refugees</li>
		  <li class="foot-list"> Celebrating diversity & belonging</li>
		  <li class="foot-list"> Combating discrimination</li>
	  </ul>
	  </div>
	  <div class="col-md-3">
		  <h3 class="section-heading4"> Hosting</h3>
	   <ul class="">
			  <li class="foot-list"> Try hosting</li>
			  <li class="foot-list"> AirCover: protection for Hosts</li>
			  <li class="foot-list"> Explore hosting resources</li>
			  <li class="foot-list"> Visit our community forum</li>
			  <li class="foot-list">How to host responsibly</li>
		  </ul>          
	  </div>
	  <div class="col-md-3">
		  <h3 class="section-heading4">Newsroom</h3>
		  <ul class="">
		  <li class="foot-list">Learn about new features</li>
		  <li class="foot-list">Letter from our founders</li>
		  <li class="foot-list">Careers</li>
		  <li class="foot-list">Investors</li>
		  <li class="foot-list">Airbnb Luxe</li>
		  </ul>
	  </div> -->
	  
	  </div>
	</div>
</div>
</div>
</section>
<section>
  <div class="container-fluid">
	  <div>
		<hr class="footer-line">
	  </div>
	   </div> 
<div class="container">
<div class="mar-1">
   <div class="row">
	  <div class="col-md-6">
		  <p class="ft-t">© 2021 Airbnb, Inc.
		   Privacy  ·  Terms  ·  Sitemap  ·  Company details</p>
		  </div>
	  <div class="col-md-3">
		  <p class="ft-t">English (IN). ₹ INR</p>
		</div>
	  <div class="col-md-3">
		  <?php if (ot_get_option('facebook_link') != NULL) { ?><a href="<?php echo ot_get_option('facebook_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg"  class="img-fluid mr-2"  alt="Facebook_Icon"></a><?php } ?>
		  <?php if (ot_get_option('instagram_link') != NULL) { ?><a href="<?php echo ot_get_option('instagram_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg"  class="img-fluid mr-2"  alt="Instagram_Icon"></a><?php } ?>
		  <?php if (ot_get_option('twitter_link') != NULL) { ?><a href="<?php echo ot_get_option('twitter_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/install.svg"  class="img-fluid mr-2"  alt="Twitter_Icon"></a><?php } ?>
		</div>
	</div>
   </div>
 </div>
</section> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrapValidator.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/about.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php wp_footer();?>