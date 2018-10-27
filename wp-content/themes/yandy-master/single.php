<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yandy-master
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
        <div class="top-h1 "><?php the_title(); ?></div>
       <h4><span class="name-event">Y&Y CURRENT EVENTS</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="data-event"><?php the_date(); ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="writer-event">written by <?php the_author(); ?></span></h4>
   


<?php
the_content();?>
      </div>
    </div>
  </section>
<?php

			
 wp_reset_postdata();

  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();                

	
wp_footer();?>