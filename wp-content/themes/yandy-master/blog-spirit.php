<?php
/*
Template Name: Spirit-blog
Template Post Type: red_book
*/
get_header();


          
?>






  <section class="blog-banner container">
  	<?php
if ( have_posts() ) : // если имеются записи в блоге.

  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>
  	
    <div  class="img-fluid">
    	<?php the_post_thumbnail(); ?>
    </div>
  </section>
  <section class="blog-header">
    <div class="container">
      <div  class="coming">
      	       
        <div class="top-h1 "><?php the_title(); ?></div>

 
        <h4><span class="name-event">Y&Y CURRENT EVENTS</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="data-event"><?php the_date(); ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="writer-event">written by <?php the_author(); ?></span></h4>
   



     <?php
the_content();
?>
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



  	<?php


  	  $args = array(
                   'post_type' => 'red_book',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
               );
            
            query_posts($args);
if ( have_posts() ) : // если имеются записи в блоге.

  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>
  <section class="container spirits-img-line">
  	<?php 
        	$foto_one = get_field('foto_one');
$foto_two = get_field('foto_two');
$foto_three = get_field('foto_three');
$foto_four = get_field('foto_four');
$brend = get_field('brend'); ?>

    <div  class="img-fluid">
    	<img src="<?php echo $brend['url']; ?>" alt="<?php echo $brend['alt']; ?>">
    </div>

  </section>
  <section class="spirits-blog">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-6 spirit-photo">
        	
            	<?php the_post_thumbnail(); ?>
          <img src="<?php echo $foto_one['url']; ?>" alt="<?php echo $foto_one['alt']; ?>">
          <img src="<?php echo $foto_two['url']; ?>" alt="<?php echo $foto_two['alt']; ?>">
          <img src="<?php echo $foto_three['url']; ?>" alt="<?php echo $foto_tree['alt']; ?>">
          <img src="<?php echo $foto_four['url']; ?>" alt="<?php echo $foto_four['alt']; ?>">
        </div>
        <div class="col-12 col-xl-6 spirit-text">
        	 <div class="top-h1 "><?php the_title(); ?></div>
         <?php the_content(); ?>
          <a href="" class="spirit-btn">Order Sunday Gin</a>
          </div>
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
