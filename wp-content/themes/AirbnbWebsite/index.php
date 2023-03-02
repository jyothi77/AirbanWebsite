<?php

/**
 *  Template Name: home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
<?php get_the_title(); ?>

  <body>
  <?php include_once('inc/nav.php'); ?>
   <section>
   <?php if (get_field('banner_visibility')) { ?>
    <div class="container mt-3">
      <div class="position-relative">
        <div class="background-image">
          <img src="<?php echo get_field('banner_background_image');?>" class="img-fluid w-100" alt="">
        </div>
        <div class="text-font">
          <h2 class="section-heading"><?php echo get_field('banner_title');?></h2>
          <div>
            <button class="btn btn-1"><?php echo get_field('banner_button');?></button>
          </div>
        </div>
      </div>
    </div>
	<?php }?>
   </section> 
<section>
  <?php if (get_field('cards_section_visibility')) { ?>
<div class="container"> 
      <div class="section-mar">
        <h2 class="section-heading2"><?php echo get_field('cards_section_title');?></h2>
       <div class="swiper my_swiper">
                <div class="swiper-wrapper">
				 <?php  while(have_rows('cards')): the_row();?>
                    <div class="swiper-slide">
                       <div>
                           <div class="card border-0  card-width">
                             <img src="<?php echo get_sub_field('cards_image');?>" class="img-fluid bg-3" alt="" class="card-img-top" alt="...">
                              <div class="card-body bg-2">
                                  <h3 class="swiper-heading2"><?php echo get_sub_field('cards_title');?></h3>
                                 <p class="swiper-heading1"><?php echo get_sub_field('cards_subtitle');?></p>
                              </div>
                             </div>
                         </div>
                     </div>
						 <?php endwhile;?>
                 </div>
			
            </div>
			
        </div>
	 </div>
	
</div>

<?php }?>

</section>

<section>
<?php if (get_field('airbn_experiences_section_visibility')) { ?>
      <div class="container">
      <div class="section-mar">
          <h2 class="section-heading2"><?php echo get_field('airbn_experiences_title');?></h2>
        <div class="position-relative">
        <div class="row">
		<?php  while(have_rows('airbn_experiences_cards')): the_row();?>
          <div class="col-md-6 mb-3">
            <div>
                <div>
                    <img src="<?php echo get_sub_field('airbn_image');?>" class="img-fluid  toor" alt="pic">
                  </div>
                <div class="p11">
                    <h3 class="section-heading3"><?php echo get_sub_field('airbn_title');?> </h3>
                    <button type="button" class="btn btn-1"><?php echo get_sub_field('airbn_button');?></button>
                </div>
            </div>
         </div>
		 <?php endwhile;?>
         <!-- <div class="col-md-6 mb-3">
            <div>
                 <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 12.png" class="img-fluid toor" alt="pic">
                </div>
             <div class="p11">
                    <h3 class="section-heading3"> Things to do on your trip</h3>
                    <button type="button" class="btn btn-1">experience</button>
                </div>
            </div>
          </div>
            </div>
         </div> -->
        </div>
      </div>
	  <?php }?>
</section>
<section>
<?php if (get_field('hosting_section_visibility')) { ?>
    <p class="host"><?php echo get_field('hosting_section_title');?></p>
    <button class="host-button border-0"><?php echo get_field('hosting_section_button');?></button>
    <img src="<?php echo get_field('hosting_section_image');?>" class="phots img-fluid" alt="">
	<?php }?>
</section>
<?php get_footer();?>
    <script>
      var swiper = new Swiper(".my_swiper", {
    slidesPerView: 4,
    spaceBetween: 2,
    loop:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      375: {
        slidesPerView: 1,
      },
      425: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
        
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
</script>
</body>
</html>
