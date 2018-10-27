<?php
/*
Template Name: Blog
Template Post Type: post, page, product
*/

get_header();
?> 
 
     <?php
if ( have_posts() ) : // если имеются записи в блоге.

  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>

  <section class="blog-banner container">
    
    <div class="img-fluid">
         <?php the_post_thumbnail(); ?>
    </div>
  </section>
        
  <section class="blog-header">
    <div class="container">
      <div  class="coming">
   
        <div class="top-h1 "><?php the_field('name'); ?></div>
      
        <h4><span class="name-event">Y&Y CURRENT EVENTS</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="data-event"><?php the_date(); ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="writer-event">written by <?php the_author(); ?></span></h4>
   


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

  <?php
if ( have_posts() ) : // если имеются записи в блоге.
 query_posts( array('cat' => '2'  ));    // указываем ID рубрик, которые необходимо вывести.
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?> 

          <?php 


$image = get_field('image');
$image2 = get_field('image2');


?>
  <section class="blog-info">
    <div class="container">
      <div class="blog-images">
     		


        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
         <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
       
      </div>
      <div class="blog-text">
   <div class="top-h1 "><a href="<?php the_permalink();?>" style="color:#000;"><?php the_title(); ?></a></div>
        <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
<?php
      
 wp_reset_postdata();

  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();                
?>  

  <?php wp_footer(); ?>