<?php
/*
Template Name: Page Home
Template Post Type: post, page, product
*/

get_header();
?>

<?php

	$menu = get_field('menu');
	
?>

<section class="top-slider">
		<div class="container">

			<div class="row">

				<div class="col-12">

					<div class="carousel-inner sl1 single-item">
<?php
if ( have_posts() ) : // если имеются записи в блоге.
   query_posts( array('cat' => '2', 'posts_per_page' => '4',  ));    // указываем ID рубрик, которые необходимо вывести.
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога


?>

						<div class="carousel-item active">
							<div class="d-block">
								<?php the_post_thumbnail(); ?>
							</div>
								<div class="top-text">
								<div class="top-h1"><?php the_title(); ?></div>
									<div class="top-p"><?php the_excerpt(); ?></div>
								<a href="<?php the_permalink();?>" class="top-btn"><u>Read More</u></a>
							</div>
						</div>


<?php wp_reset_postdata();

  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();
?>
					</div>


				</div>
			</div>
		</div>
	</section>


	<section class="hand-crafted">
		<div class="container">
			<div class="flex-box">
				<div class="hand-p1">
					<div class="top-h1"><span>Hand Crafted Cocktails</span></div>
					<div class="top-p">Our cocktail menu at You & Yours<br> Distilling Co. was brought to life with a desire to feature original creations while also paying homage to some timeless classics and always highlighting the spirits that we produce in house</div>
					<a class="top-btn js-menu-popup" href="<?php echo $menu['url']; ?>"><u>See Full Menu</u></a>
				</div>




		<?php
if ( have_posts() ) : // если имеются записи в блоге.
   query_posts( array('cat' => '3',  'posts_per_page' => '3',  ));    // указываем ID рубрик, которые необходимо вывести.
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога


?>
<div class="hand-p2">
					<?php the_post_thumbnail(); ?>
					<p><a class="top-btn" href="<?php the_permalink();?>" style="color:#000;"><u><?php the_title(); ?></u></a></p>
				</div>

<?php wp_reset_postdata();

  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();
?>

			</div>
		</div>
	</section>

	<section class="slider-2">
		<div class="top-h1 text-center"><span>San Diego’s First Urban Distillery.</span></div>
		<div class="top-p text-center">Premium, distilled-on-site spirits and a world-class<br> cocktail program to match</div>
		<div class="container-fluid">

			<div class="center slider popup-gallery">

				<a href="<?php echo get_template_directory_uri();?>/img/slider2.1.png"><img src="<?php echo get_template_directory_uri();?>/img/slider2.1.png"></a>


				<a href="<?php echo get_template_directory_uri();?>/img/slider2.2.png"><img src="<?php echo get_template_directory_uri();?>/img/slider2.2.png"></a>


				<a href="<?php echo get_template_directory_uri();?>/img/slider2.3.png"><img src="<?php echo get_template_directory_uri();?>/img/slider2.3.png"></a>


				<a href="<?php echo get_template_directory_uri();?>/img/slider2.3.png"><img src="<?php echo get_template_directory_uri();?>/img/slider2.3.png"></a>
			</div>
		</div>
	</section>
	<section class="room">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 popup-gallery text-center">
					<a href="<?php echo get_template_directory_uri();?>/img/testing.png"><img src="<?php echo get_template_directory_uri();?>/img/testing.png" data-object-fit="true" class="img-fluid room-img" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/testing.png">
						<div class="gallery-btn">
							<div><i class="fa fa-search" aria-hidden="true"></i></div>
							<div><span>Gallery</span></div>
						</div>
					</a>
				</div>
				<div class="col-12 col-lg-6 room-text">
					<div class="top-h1"><span>Tasting Room & Event Space</span></div>
					<div class="top-p">Our light and airy space provides the perfect relaxed-yet-sophisticated setting to enjoy an elevated imbibing experience. Stop by for a coctail, enjoy a tasting filght or book an event with us. We can accommodate groups of up to 85.</div>
					<a href="blog2.html" class="top-btn"><u>Read More</u></a>
				</div>
			</div>
		</div>
	</section>
	<section class="bringing">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6 bringing-text ">
					<div class="marker">“</div>
					<div class="top-h1"><span>It’s about bringing people together.</span></div>
					<div class="top-p">Launched in March of 2017 after almost three years of planning, You & Yours Distilling Co. is a full production distillety, tasting room and event space, comlete with a world-class coctail program highlighting our current spirits offerings.</div>
					<div class="top-p">Salvaged wood, whitewashed brick, exposed concrete, push velvet, denim linen, copper and marble accents come together to create a fresh, unique and insta-worthy atmosphare.</div>
					<a href="<?php the_field('book-event'); ?>" class="top-btn" target="_blank"><u>Book Event</u></a>
				</div>
				<div class="col-12 col-xl-6 bringing-photo">
					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br1.png" alt="photo">
					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br2.png" alt="photo">
					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br3.png" alt="photo">
					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br4.png" alt="photo">
				</div>
			</div>
		</div>
	</section>
	<section class="products">
		<div class="top-h1 text-center"><span>Our Flagship Products</span></div>
		<div class="top-p text-center">Premium, distilled-on-site spirits and a world-class<br> cocktail program to match</div>
		<div class="container">
			<div class="flex-box prod-block">
				<div class="popup-gallery ">
					<a href="<?php echo get_template_directory_uri();?>/img/prod1.png"><img src="<?php echo get_template_directory_uri();?>/img/prod1.png" class="img-fluid pd" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/prod1.png">
						<div class="gallery-btn gallery-btn-2">
							<span><i class="fa fa-search" aria-hidden="true"></i></span></div>
					</a>
				</div>
				<div class="popup-gallery ">
					<a href="<?php echo get_template_directory_uri();?>/img/prod2.png"><img src="<?php echo get_template_directory_uri();?>/img/prod2.png" class="img-fluid pd" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/prod2.png">
						<div class="gallery-btn gallery-btn-2 ">
							<span><i class="fa fa-search" aria-hidden="true"></i></span></div>
					</a>
				</div>
				<div class="popup-gallery">
					<a href="<?php echo get_template_directory_uri();?>/img/prod3.png"><img src="<?php echo get_template_directory_uri();?>/img/prod3.png" class="img-fluid pd" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/prod3.png">
						<div class="gallery-btn gallery-btn-2 ">
							<span><i class="fa fa-search" aria-hidden="true"></i></span></div>
					</a>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
