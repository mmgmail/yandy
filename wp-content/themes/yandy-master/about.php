<?php
/*
Template Name: About
Template Post Type: post, page, product
*/

get_header();
?> 
  <section class="blog-banner container">
  	   	 	<?php 

$prev = get_field('image_previe');
$images = get_field('image_desc2');
$image = get_field('image_desc');
$images = get_field('image_desc2');
$imageb = get_field('image_desc_bottom');
$imagesb = get_field('image_desc_bottom2');


?>


           <img src="<?php echo $prev['url']; ?>" alt="<?php echo $prev['alt']; ?>"  class="img-fluid">
  </section>
  <section class="blog-header">
    <div class="container">
      <div  class="coming">
        <div class="top-h1 "> <?php the_field('name'); ?></div>
         <?php
if ( have_posts() ) : // если имеются записи в блоге.

  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>
        <h4><span class="name-event">Y&Y CURRENT EVENTS</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span class="data-event"><?php the_date(); ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span class="writer-event"><?php the_author(); ?></span></h4>
   


<?php
the_content();
			
 wp_reset_postdata();

  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();                
?>
      </div>
    </div>
  </section>
  <section class="blog-info">
    <div class="container">
      <div class="blog-images">
     		


        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
         <img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>" class="img-fluid">
       
      </div>
      <div class="blog-text">
 
        <?php the_field('text_desc'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="blog-info">
    <div class="container">
      <div class="blog-images">
   

        <img src="<?php echo $imageb['url']; ?>" alt="<?php echo $imageb['alt']; ?>" class="img-fluid">
         <img src="<?php echo $imagesb['url']; ?>" alt="<?php echo $imagesb['alt']; ?>" class="img-fluid">
        

      </div>
      <div class="blog-text">
         <?php the_field('text_desc_bottom2'); ?>
        </div>
      </div>
    </div>
  </section>
  <?php wp_footer(); ?>