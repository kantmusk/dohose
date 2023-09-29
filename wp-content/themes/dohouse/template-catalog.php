<?php 
/*
Template name: Каталог
*/
?>

<?php get_header(); ?>
			<div class="home-projects">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="red">НАШИ ПРОЕКТЫ</h2>
						</div>
<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
		'post_type' => 'project',
		'posts_per_page' => 12,
    	'order'          => 'ASC',
     	'paged' => $paged
	);
?>
<?php  $wp_query = new WP_Query($args); ?>
<?php $i=1; ?>
<?php  while ( $wp_query->have_posts() ) { ?>
<?php $wp_query->the_post(); ?>

	<div class="col-lg-4">
		<div class="project-item">
			<div class="project-item__img">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
				<img src="<?php echo $url ?>" />
			</div>
			<div class="project-item__titleBox"><a class="project-item__title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</div>
			<div class="project-item__desc">
				<div class="project-item__descInner">
					<div class="project-item__descLeft">
						<div class="projectF-item">
							<div class="projectF-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf1.png" alt="" />
							</div>
							<div class="projectF-item__desc">Размер: <span>6x8 м</span>	
							</div>
						</div>
						<div class="projectF-item">
							<div class="projectF-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf2.png" alt="" />
							</div>
							<div class="projectF-item__desc projectF-item__ploschad">Площадь: <span>83 м2</span>
							</div>
						</div>
						<div class="projectF-item">
							<div class="projectF-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pf3.png" alt="" />
							</div>
							<div class="projectF-item__desc">Балкон: <span>Да</span>
							</div>
						</div>
					</div>
					<div class="project-item__descRight"><span>Цена сегодня</span>
						<div class="project-item__price">915 000 <span>Р.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="project-item__bottom"><a class="button-red button-more" href="<?php the_permalink() ?>"><span class="ico"></span><span>Подробности</span></a><a class="button-red button-order" href="#wanthouse" data-modal="modal-want"><span class="ico"></span><span>Хочу такой дом	</span></a>
			</div>
		</div>
	</div>

<?php $i++; ?>
<?php }

?>


					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="pagination">
								<?php $args = array(
										'base'               => '%_%',
										'format'             => '?paged=%#%',
										'total'              => 1,
										'current'            => 0,
										'show_all'           => false,
										'end_size'           => 1,
										'mid_size'           => 2,
										'prev_next'          => true,
										'prev_text'          => __(''),
										'next_text'          => __(''),
										'type'               => 'list',
										'add_args'           => false,
										'add_fragment'       => '',
										'before_page_number' => '',
										'after_page_number'  => ''); ?>

										<!-- Pagination links echoed in my home page -->
										<?php echo get_the_posts_pagination( $args ); ?>


										<?php 
										 $nav = get_the_posts_pagination();
										$nav = preg_replace('~<h2.*?h2>~', '', $nav);
										$nav = preg_replace('~Далее~', '', $nav);
										$nav = preg_replace('~Назад~', '', $nav);
										echo $nav;	

										?>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="zvonok-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="zvonok-inner"><a class="button button_red" href="#call" data-modal="modal">Заказать звонок</a>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>