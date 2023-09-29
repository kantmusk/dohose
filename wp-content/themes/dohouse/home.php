<?php 
/*
Template name: Главная
*/
?>
<?php get_header(); ?>
			<div class="home-slider-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="home-slider">
								<?php 
								$image_repeater = get_field('слайдер');
								if ($image_repeater) {
									foreach ($image_repeater as $item) {
										?>
										<div class="item">
											<img src="<?php echo $item['изображение']['url'] ?>" alt="">
												<div class="home-slider-info">
													<h1><?php echo $item['заголовок'] ?></h1>
													<div class="home-slider-info__middle">
														<span><?php echo $item['первый_подзаголовок'] ?></span>
														<p>
															<?php echo $item['второй_подзаголовок'] ?>	
														</p>
															<a href="#count" data-modal="modal">Расчитать мой проект</a> 	
													</div>
												</div>
										</div>
										<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="advantages">
				<div class="container">
					<div class="row">
						<?php 
						$image_repeater = get_field('преимущества');
						if ($image_repeater) {
							$i = 1;
							foreach ($image_repeater as $item) {
								if (($i == 1) ||($i == 3) || ($i == 5))  {
									?>
										<div class="col-lg-4">
									<?php
								}
								?>
								<div class="adv-item">
									<div class="adv-item__ico">
										<img src="<?php echo $item['иконка']['url'] ?>" alt="">
									</div>
									<div class="adv-item__right">
										<div class="adv-item__title"><?php echo $item['заголовок']; ?></div>
										<div class="adv-item__desc"><?php echo $item['описание']; ?></div>
									</div>
								</div>
								
								<?php
								if (($i == 2) ||($i == 4) || ($i == 6))  {
									?>
										</div>
									<?php
								}
								?>
								
								<?php
								$i++;
							}
						}
						?>
					</div>
				</div>
			</div>
			<div class="home-about">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<?php
							$group = get_field('о_компании');
							?>
							<h2><?php echo $group['заголовок']; ?></h2>
							<p><?php echo $group['описание']; ?></p>

							<?php 
							
							$group = get_field('технологии');
							
							?>
							<h3><?php echo $group['заголовок']; ?></h3>
							<div class="row">
								<?php
								$repeater = $group['технология'];
								if ($repeater) {
									$i = 1;
									foreach ($repeater as $item) {
										?>
										<div class="col-lg-3">
											<div class="techi-item">
												<div class="techi-item__ico">
													<img src="<?php echo $item['иконка']['url']; ?>" alt="">
												</div>
												<div class="techi-item__desc"><?php echo $item['заголовок']; ?></div>
											</div>
										</div>
										<?php
									}
								}
								?>
							</div>
							<?php 
							
							$group = get_field('компоненты');
							
							?>
							<h3><?php echo $group['заголовок']; ?></h3>
							<div class="row">
							<?php
								$repeater = $group['технология'];
								if ($repeater) {
									$i = 1;
									foreach ($repeater as $item) {
										?>
										<div class="col-lg-3">
											<div class="techi-item">
												<div class="techi-item__ico">
													<img src="<?php echo $item['иконка']['url']; ?>" alt="">
												</div>
												<div class="techi-item__desc"><?php echo $item['заголовок']; ?></div>
											</div>
										</div>
										
										<?php
									}
								}
								?>
								<div class="col-lg-3">
									<div class="techi-item">
										<div class="techi-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tech5.png" alt="">
										</div>
										<div class="techi-item__desc">Из газосиликатного блока</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="techi-item">
										<div class="techi-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tech6.png" alt="">
										</div>
										<div class="techi-item__desc">Керамзитобетонного блока</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="techi-item">
										<div class="techi-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tech7.png" alt="">
										</div>
										<div class="techi-item__desc">Пеноблока</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="techi-item">
										<div class="techi-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tech8.png" alt="">
										</div>
										<div class="techi-item__desc">Использованием железобетонных монолитных конструкций</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="work">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h3>Строительство каменного коттеджа можно выполнить:</h3>
							<div class="work-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/work.png" alt="">
								<div class="work-item work-item_1">
									<p>Готовы удовлетворить потребности клиентов как с небольшим бюджетом, так и крупных заказчиков с запросом по строительству торговых, развлекательных, гостиничных комплексов на несколько тысяч квадратных метров помещений</p>
								</div>
								<div class="work-item work-item_2">
									<p>Многолетний опыт работы в данной сфере в связке с современными методами и подходами к работе делают компанию Woodhaus лидером деревянного домостроения</p>
								</div>
								<div class="work-item work-item_3">
									<p>
										И самое главное - мы ежедневно стремимся повысить качество всех этапов сотрудничества. Начиная от знакомства по телефону (либо в выставочном доме) и не заканчивая нашего с Вами общения никогда!


									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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

<?php //$is_display_homepage = carbon_get_post_meta( get_the_ID(), 'crb_show_content' ); ?>

<?php if ($is_display_homepage == 1) { ?>

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
<?php } ?>

<?php $i++; ?>
<?php }

?>						


					</div>
				</div>
			</div>
			<div class="include">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h3>Каркасный дом под ключ от компании “DoHouse” <br> включает в себя:</h3>
							<div class="include-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/include-img.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="zapis-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="red-convert">
								<h2>ПРИЕЗЖАЙТЕ К НАМ НА ВЫСТАВОЧНУЮ ПЛОЩАДКУ!</h2>
								<p>Убедитесь лично в качестве используемых материалов</p><a class="button" href="#call" data-modal="modal">Записаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="map-block">
				<div id="mape"></div>
			</div>
<?php get_footer(); ?>			