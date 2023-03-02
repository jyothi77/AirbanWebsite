<?php

/**
 *  Template Name: About
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
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <?php get_header(); ?>
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
   
  <?php get_the_title(); ?>
    
  </head>
  <body>
  <?php include_once('inc/min-nav.php'); ?> 
  
<section>
<?php if(get_field('airban_cards_section')) {  ?>
  <div class="container">
    <div class="row row-cols-lg-5">
    <?php  
     $i=1;
   
     while(have_rows('airban_cards')): the_row();?>
        <div class="col-6 col-md-4   mt-4 ">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_sub_field('cards_image');?>" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_sub_field('cards_heartimage');?>"
              <?php if($i==1){ ?> id="heart2" <?php }?> class="red"
              <?php if($i==2){ ?> id="heart3" <?php }?> class="red"
              <?php if($i==3){ ?> id="heart4" <?php }?> class="red"
              <?php if($i==4){ ?> id="heart5" <?php }?> class="red"
              <?php if($i==5){ ?> id="heart6" <?php }?> class="red"
              <?php if($i==6){ ?> id="heart7" <?php }?> class="red"
              <?php if($i==7){ ?> id="heart8" <?php }?>  class="red"
              <?php if($i==8){ ?> id="heart9" <?php }?>  class="red"
              <?php if($i==9){ ?> id="heart10" <?php }?>  class="red"
              <?php if($i==10){ ?> id="heart11" <?php }?>  class="red"
              <?php if($i==11){ ?> id="heart12" <?php }?>  class="red"
              <?php if($i==12){ ?> id="heart13" <?php }?>  class="red"
              <?php if($i==13){ ?> id="heart14" <?php }?>  class="red"
              <?php if($i==14){ ?> id="heart15" <?php }?>  class="red"
              <?php if($i==15){ ?> id="heart16" <?php }?>  class="red"
              <?php if($i==16){ ?> id="heart17" <?php }?>  class="red"
              <?php if($i==17){ ?> id="heart18" <?php }?>  class="red"
              <?php if($i==18){ ?> id="heart19" <?php }?>  class="red"
              <?php if($i==19){ ?> id="heart20" <?php }?>  class="red"
              <?php if($i==20){ ?> id="heart21" <?php }?>  class="red">
              
              
              
              
             
            </div>
            <div>
            <img src="<?php echo get_sub_field('cards_starimage');?>" class="img-fluid" alt="">
            <img src="<?php echo get_sub_field('cards_subimage');?>" class="img-fluid" alt="">
            <p><?php echo get_sub_field('cards_description');?></p>
            <p><?php echo get_sub_field('cards_members');?></p>
             </div>
             </div>
        </div>
       <?php $i++; endwhile;?>
        <!-- <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 35.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width gr11" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p><?php echo get_sub_field('cards_description');?></p>
            <p><?php echo get_sub_field('cards_members');?></p>
             </div>
             </div>
        </div>
      
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 31.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width gr11" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
      
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 32.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
       </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 34.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 35.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 36.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 37.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 37.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 38.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 39.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 34.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 35.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 41.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 40.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 38.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 31.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 32.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4   mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 41.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div>
        <div class="col-6 col-md-4  mt-4">
          <div class="position-relative">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 40.png" class="img-fluid cards-width" alt="">
            </div>
            <div class="ab-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png" class="img-fluid cards-width" alt="">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/str.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.97 (39).png" class="img-fluid" alt="">
            <p>Must Try Mumbai Slum &Historical Tour</p>
            <p>From ₹1,850/person</p>
             </div>
             </div>
        </div> -->
        
      </div>
      

   
</div>
<?php }?>
</section>
</section>
<script>
  
let heart2 = document.getElementById('heart2');
heart2.addEventListener('click',()=>{
if(heart2.classList.contains('red')){
heart2.classList.remove('red');

heart2.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{

heart2.classList.add('red');
heart2.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

    let heart3 = document.getElementById('heart3');
heart3.addEventListener('click',()=>{
if(heart3.classList.contains('red')){
    heart3.classList.remove('red');
   
    heart3.src ='<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
    heart3.classList.add('red');
    heart3.src ='<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});


    let heart4 = document.getElementById('heart4');
heart4.addEventListener('click',()=>{
if(heart4.classList.contains('red')){
    heart4.classList.remove('red');
   
    heart4.src ='<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
    heart4.classList.add('red');
    heart4.src ='<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});


    let heart5 = document.getElementById('heart5');
heart5.addEventListener('click',()=>{
if(heart5.classList.contains('red')){
  heart5.classList.remove('red');
   
  heart5.src ='<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
  heart5.classList.add('red');
  heart5.src ='<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});


    let heart6 = document.getElementById('heart6');
    heart6.addEventListener('click',()=>{
if(heart6.classList.contains('red')){
  heart6.classList.remove('red');
   
  heart6.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
  heart6.classList.add('red');
  heart6.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

  
          let heart7 = document.getElementById('heart7');
          heart7.addEventListener('click',()=>{
      if(heart7.classList.contains('red')){
        heart7.classList.remove('red');
         
        heart7.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
      }else{
         
        heart7.classList.add('red');
        heart7.src ='<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
      }
  });
  
          let heart8 = document.getElementById('heart8');
          heart8.addEventListener('click',()=>{
      if(heart8.classList.contains('red')){
        heart8.classList.remove('red');
         
        heart8.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
      }else{
         
        heart8.classList.add('red');
        heart8.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
      }
  });
  
    let heart9 = document.getElementById('heart9');
    heart9.addEventListener('click',()=>{
if(heart9.classList.contains('red')){
  heart9.classList.remove('red');
   
  heart9.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
  heart9.classList.add('red');
  heart9.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

  
      let heart10 = document.getElementById('heart10');
      heart10.addEventListener('click',()=>{
  if(heart10.classList.contains('red')){
    heart10.classList.remove('red');
     
    heart10.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
  }else{
     
    heart10.classList.add('red');
    heart10.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
  }
  });
  
   
      let heart11 = document.getElementById('heart11');
      heart11.addEventListener('click',()=>{
  if(heart11.classList.contains('red')){
    heart11.classList.remove('red');
     
    heart11.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
  }else{
     
    heart11.classList.add('red');
    heart11.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
  }
  });
  
    
      let heart12 = document.getElementById('heart12');
      heart12.addEventListener('click',()=>{
  if(heart12.classList.contains('red')){
    heart12.classList.remove('red');
     
    heart12.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
  }else{
     
    heart12.classList.add('red');
    heart12.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
  }
  });
  
    
      let heart13 = document.getElementById('heart13');
      heart13.addEventListener('click',()=>{
  if(heart13.classList.contains('red')){
    heart13.classList.remove('red');
     
    heart13.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
  }else{
     
    heart13.classList.add('red');
    heart13.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
  }
  });
  
    let heart14 = document.getElementById('heart14');
    heart14.addEventListener('click',()=>{
if(heart14.classList.contains('red')){
  heart14.classList.remove('red');
   
  heart14.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
  heart14.classList.add('red');
  heart14.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

 
    let heart15 = document.getElementById('heart15');
    heart15.addEventListener('click',()=>{
if(heart15.classList.contains('red')){
  heart15.classList.remove('red');
   
  heart15.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
  heart15.classList.add('red');
  heart15.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});


    let heart16 = document.getElementById('heart16');
    heart16.addEventListener('click',()=>{
if(heart16.classList.contains('red')){
  heart16.classList.remove('red');
   
  heart16.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
   
  heart16.classList.add('red');
  heart16.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});


  let heart17 = document.getElementById('heart17');
  heart17.addEventListener('click',()=>{
if(heart17.classList.contains('red')){
heart17.classList.remove('red');
 
heart17.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
 
heart17.classList.add('red');
heart17.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});


  let heart18 = document.getElementById('heart18');
  heart18.addEventListener('click',()=>{
if(heart18.classList.contains('red')){
heart18.classList.remove('red');
 
heart18.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
 
heart18.classList.add('red');
heart18.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

  let heart19 = document.getElementById('heart19');
  heart19.addEventListener('click',()=>{
if(heart19.classList.contains('red')){
heart19.classList.remove('red');
 
heart19.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
 
heart19.classList.add('red');
heart19.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

  let heart20 = document.getElementById('heart20');
  heart20.addEventListener('click',()=>{
if(heart20.classList.contains('red')){
heart20.classList.remove('red');
 
heart20.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
 
heart20.classList.add('red');
heart20.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

</script>
<script>
  let heart21 = document.getElementById('heart21');
  heart21.addEventListener('click',()=>{
if(heart21.classList.contains('red')){
heart21.classList.remove('red');
 
heart21.src = '<?php echo get_template_directory_uri(); ?>/assets/images/gr11.png';
}else{
 
heart21.classList.add('red');
heart21.src = '<?php echo get_template_directory_uri(); ?>/assets/images/red.jpg';
}
});

  
   
</script>
<?php get_footer();?>
</body>
         

   
</html>
