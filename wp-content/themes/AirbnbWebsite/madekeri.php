<?php

/**
 *  Template Name: madekeri
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/madekeri.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" />
    <?php get_the_title(); ?>
    <body>
        <?php include_once('inc/madekeri-nav.php');?>
<section>
<?php if (get_field('madekeri_guests_house_section_visibility')) { ?>
<div class="container">
<div class="mar">
        <div class="row">
          <div class="col-md-8">
                <div class="d-flex">
                     <div>
                        <img src=" <?php echo get_field('madekeri_guests_house_prize');?>" class="img-fluid" alt="">
                    </div>
                    <div class="ml-3">
                      <?php echo get_field('madekeri_guests_house_title');?>
                    </div>
                </div>
                <div class="row no-gutters">
                <?php  
                $i=1;
                while(have_rows('house')): the_row();?>
                    <div class="col-md-6 mt-3">
                        <img src="<?php echo get_sub_field('house_image');?>" class="img-fluid" alt="">
                        </div>
                    
                    <div class="col-md-6 mt-3">
                        <div class="d-f">
                            <h2 class=""><?php echo get_sub_field('house_title');?></h2>
                        <div class="mx-auto">
                            <div class="wrapper">
                            <a class="a-heart"><img src="<?php echo get_sub_field('heart_image');?>"<?php if($i==1){ ?>id="heart"<?php }?> id="hearts" class="red"></a>
                            </div>
                         </div>
                           
                        </div>
                        <div>
                            <p><?php echo get_sub_field('house_description');?></p>
                        </div>
                        <div>
                            <div class="d-1 mt-5">
                                <div>
                                    <img src="<?php echo get_sub_field('house_star_image');?>" class="img-fluid" alt="">
                              <img src="<?php echo get_sub_field('house_subimage');?>" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <p><?php echo get_sub_field('house_subdescription');?></p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile;?>
                   
                    <!-- <div class="col-md-6 mt-3">
                       <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/Rectangle 33.png" class="img-fluid" alt="">
                       </div>
                     
                    <div class="col-md-6 mt-3">
                        <div class="d-f">
                            <h2 class="">Wenge House</h2>
                            <div class="wrapper">
                              <a class="a-heart"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" id="hearts" class="red"></a>
                          </div>
                        </div>
                        <div>
                            <p>6 guests 2 bedrooms 2 beds 2 bathroomsWifi Free Parking</p>
                        </div>
                        <div>
                            <div class="d-1 mt-5">
                                <div>
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
                              <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/5.0 (201 reviews).png" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <p><b>999/</b> night</p>
                                </div>
                              
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div>
                    <img src="<?php echo get_field('map_image'); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
   </div>
</div>
<?php }?>
</section>
<?php get_footer();?>
<script>
        let heart = document.getElementById('heart');
heart.addEventListener('click',()=>{
    if(heart.classList.contains('red')){
        heart.classList.remove('red');
       
        heart.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
    }else{
      
        heart.classList.add('red');
        heart.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
    }
});
      </script>
           <script>
            let hearts = document.getElementById('hearts');
    hearts.addEventListener('click',()=>{
        if(hearts.classList.contains('red')){
            hearts.classList.remove('red');
           
            hearts.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
        }else{
           
            hearts.classList.add('red');
            hearts.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
        }
    });
          </script>
          </body>
          </html>