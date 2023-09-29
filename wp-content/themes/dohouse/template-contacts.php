<?php 
/*
Template name: Контакты
*/
?>

<?php get_header(); ?>
			<div class="contacts-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="trigger-home" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/contacts.jpg)">
								<h1>КОНТАКТНАЯ <br> ИНФОРМАЦИЯ</h1>
							</div>
							<div class="contacts-info">
								<?php
								$repeater = get_field('способы_связи');
								if ($repeater) {
									foreach ($repeater as $item) {
										?>
										<div class="contacts-item">
											<div class="contacts-item__icon">
												<img src="<?php echo $item['иконка']['url']; ?>" alt="">
											</div>
											<div class="contacts-item__name"><?php echo $item['заголовок']; ?></div>
											<div class="contacts-item__value">
												<?php echo $item['описание']; ?>
											</div>
											<div class="contacts-item__desc">
												<p><?php echo $item['второе_описение']; ?></p>
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
			<div class="zapis-block zapis-block_contacts">
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