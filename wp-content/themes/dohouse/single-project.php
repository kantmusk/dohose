<?php get_header(); ?>

			<div class="catalog-page">
				<div class="catalog-top-page">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
				

					<div class="catalog-top-page__img" style="background-image:url(<?php echo $url; ?>)"></div>
					<div class="catalog-top-page__info">
						<div class="catalog-top-page__info-item active" data-img="background-image:url(<?php echo $url; ?>)">Общий вид</div>
						<?php
						$image_repeater = get_field('фотографии_проекта');
						if ($image_repeater) {
							$i=1;
							foreach ($image_repeater as $image_item) {
								$image_url = $image_item['фоторяд_проекта']['url'];
								?>
								<div class="catalog-top-page__info-item" data-img="background-image:url(<?php echo esc_url($image_url); ?>)">
									<?php if ($i == 1) { ?>
										1 этаж <span>(план)</span>
									<?php } else {?>
										2 этаж <span>(план)</span>
									<?php } ?>	
								</div>
							<?php
							}
						}
						?>
					</div>
				</div>
				<div class="catalog-middle-page">
					<div class="catalog-parameters">
						<?php
						$image_repeater = get_field('характеристики_');
						if ($image_repeater) {
							$i=1;
							foreach ($image_repeater as $image_item) {
								$image_url = $image_item['значок_характеристики']['url'];
								?>
								<div class="catalog-parameters-item">
									<div class="catalog-parameters-item__ico">
										<img src="<?php echo esc_url($image_url); ?>" alt="">
									</div>
									<div class="catalog-parameters-item__value"><span><?php echo $image_item['описание_характеристики']?>: </span><strong><?php echo $image_item['значение_характеристки']?></strong>
									</div>
								</div>
							<?php
							}
						}
						?>
					</div>
					
					
					<div class="calc-block">
						<div class="calc-left">
							<div class="calc-left__right">
								<h3>Технология строительства</h3>
								<div class="type-item type-item_karkas active">
									<div class="type-item__ico">
										<img src="<?php echo get_template_directory_uri(); ?>/img/type1.svg" alt="">
									</div>
									<div class="type-item__value">КАРКАС</div>
								</div>
								<h3>Выбор комплектации</h3>
								<div class="calc-left__right-types">
									<?php
									$image_repeater = get_field('выбор_комплектации');
									if ($image_repeater) {
										$i=1;
										$first_item_complect = '';
										$active_class = '';
										foreach ($image_repeater as $image_item) {
											$image_url = $image_item['иконка_комплектации']['url'];
											$add_chars = $image_item['дополнительные_характеристики'];
											$complect = $image_item['комплектация'];
											if ($i == 1 ) {
												$first_item_complect = $complect;
												$first_add_chars = $add_chars;
												$active_class = 'active';
											} else {
												$active_class = '';
											}
											?>
											<div class="type-item type-item-real <?php echo $active_class; ?>">
												<div class="type-item__ico">
													<img src="<?php echo esc_url($image_url); ?>" alt="">
												</div>
												<div class="type-item__value">
													<?php echo $image_item['название_комплектации_']; ?>
												</div>
												<div class="type-item__description">
													<?php echo $image_item['особенности_комплектации']; ?>
												</div>
												<div class="type-item__price">
													<?php echo $image_item['цена']; ?>
												</div>
												<div class="type-item__oldprice">
													<?php echo $image_item['цена_со_скидкой']; ?>
												</div>
												<div class="type-item__add_chars">
													<?php foreach ($add_chars as $item) { ?>
														<div class="osob-item">
															<span>
															<span>
																<?php echo $item['название_дополнительной_характеристики']; ?>
															</span>
																<?php echo $item['значение_дополнительной_характеристики']; ?>
															</span>
														</div>
													<?php } ?>
												</div>
												<div class="type-item__complect">
													<?php foreach ($complect as $item) { ?>
														<div class="char-list__item">
															<div class="char-list__itemCol">
																<span>
																	<?php echo $item['название_комплектации']?>
																</span>
															</div>
															<div class="char-list__itemCol">
																<span>
																<?php echo $item['значение_комплектации']?>
																</span>
															</div>
														</div>
													<?php } ?>
												</div>
											</div>									
										<?php
										$i++;
										}
									}
									?>
								</div>
								
								<h3>Особенности комплектации</h3>
								<div class="osobenosty">
									<p>Дом для сезонного проживания,
										<br>базовая комплектация</p>
								</div>
								<div class="osob-block">
								
									
								<?php foreach ($first_add_chars as $item) { ?>
									<div class="osob-item">
										<span>
										<span>
											<?php echo $item['название_дополнительной_характеристики']; ?>
										</span>
											<?php echo $item['значение_дополнительной_характеристики']; ?>
										</span>
									</div>
								<?php } ?>						
									
									
								</div>
								<div class="character">
									<div class="character-title">
										<div class="character-title__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/k1.svg" alt="">
										</div>
										<div class="character-title__heading">Комплектация</div>
									</div>
									<div class="character-content">
										<div class="char-list">
											<div class="char-list__content">
									        <?php
												$image_repeater = get_field('выбор_комплектации');
												if ($image_repeater) {
													$i=1;
													foreach ($image_repeater as $image_item) {
														if ($i > 1 ) break;
														$complect = $image_item['комплектация'];

														foreach ($complect as $item) {
															?>
															<div class="char-list__item">
																<div class="char-list__itemCol">
																	<span>
																		<?php echo $item['название_комплектации']?>
																	</span>
																</div>
																<div class="char-list__itemCol">
																	<span>
																	<?php echo $item['значение_комплектации']?>
																	</span>
																</div>
															</div>
														<?php
														$i++;
														}
													}
												}
											?>
											</div>
											<div class="char-list__item">
												<div class="char-list__itemCol">
													<a class="button-red button-more_small button-red_small button-red_gray" href="#complect" data-modal="modal-complect">
														<div class="ico"></div><span>Подробности</span>
													</a>
												</div>
												<div class="char-list__itemCol"></div>
												<div class="char-list__itemCol"></div>
											</div>
										</div>
									</div>
								</div>
<br><br>
								<div class="character">
									<div class="character-title">
										<div class="character-title__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/k3.svg" alt="">
										</div>
										<div class="character-title__heading">Пакет инженерных коммуникаций</div>
									</div>
									<div class="character-content">
										<div class="pakety">
											<?php
												$repeater = get_field('пакет_инженерных_коммуникаций');
												if ($repeater) {
													$i=1;
													$total_price= 0;
													foreach ($repeater as $item) { 
														$image_url = $item['иконка_пакет_инженерных_коммуникаций']['url'];
														$title = $item['описание_пакет_инженерных_коммуникаций'];
														$add_price = $item['дополнительная_цена_пакет_инженерных_коммуникаций'];
														$price = $item['цена'];
														$total_price = $total_price + intval($price) + intval($add_price);
														$active_class = '';
														if ($i == 1 ) {
															$active_class = 'active';
														} else {
															$active_class = '';
														}
														?>
														<div class="pak-item <?php echo $active_class; ?>">
															<div class="pak-item__ico">
																<img src="<?php echo $image_url ?>" alt="">
															</div>
															<div class="pak-item__title"><?php echo $title ?></div>
															<div class="pak-item__price">
																<?php echo $price; ?>
															</div>
															<?php
															if (!empty($add_price)) {
																?> 
																	<div class="pak-item__priceBox">
																		<span>
																			+ <?php echo number_format($add_price, 0, '.', ' '); ?> Р.
																		</span>
																	</div>
																<?php
															}	
														?> 
														</div> 
														<?php											
														$i++;
													}
												}										
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="calc-right">
							<div class="calc-akcia">
								<div class="calc-akcia__price-old"><span>2.315.500 Р.</span>
								</div>
								<div class="calc-akcia__middle">
									<div class="calc-akcia__sezon"><strong>Зимний ценопад</strong> 
										</br>с 01 по 30 декабря</div>
									<div class="calc-akcia__price">2.105.000 Р.</div>
									<a class="button-red button-red_small button-more_small" href="#count" data-modal="modal">
										<div class="ico"></div><span>Подробно расчитать проект</span>
									</a>
									<a class="button-red button-red_small button-order_small" href="#wanthouse" data-modal="modal-want-inner">
										<div class="ico"></div><span>Хочу такой дом</span>
									</a>
								</div>
							</div>
							<div class="banerBox">
								<div class="banerImg">
									<?php 
										$banerBox = get_field('баннер');
										$banerImageUrl = $banerBox['изображение_баннера']['url'];
										$banerUrl = $banerBox['ссылка_для_баннера'];
										if (!empty($banerUrl)) {
											echo '<a href="' . $banerUrl . '" target="_blank"><img src="' . $banerImageUrl . '" alt="Image"></a>';
										} else {
											echo '<img src="' . $banerImageUrl . '" alt="Image">';
										}
									?>
								</div>
							</div>
							<div class="totalbox">
								<div class="totalbox__title">СТОИМОСТЬ ПАКЕТА</div>
								<div class="totalbox__price">+ <?php echo number_format($total_price, 0, '.', ' '); ?>  Р.</div>
								<div class="totalbox__desc">Полный комплект коммуникаций к выбранной комплектации</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="catalog-page-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="cat-bott-item">
								<?php 
								$slideBox = get_field('слайдер_виды_фасадов', 'option');
								$title = $slideBox['заголовок'];
								$desc = $slideBox['описание'];
								$images = $slideBox['слайды'];
								
								?>
								<div class="cat-bott-item__left">
									<div class="boxtitle"><?php echo $title;  ?></div>
									<?php echo $desc; ?>	
								</div>
								
								<div class="cat-bott-item__right">
									<div class="fasad-type-slider-box">
										<div class="fasad-type-slider">
											<?php
											if ($images) {
												foreach ($images as $item) {
													$image_url = $item['слайд']['url'];
													?>
														<div class="item">
															<img src="<?php echo $image_url ?>" alt="">
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
						<div class="col-lg-6">
							<div class="cat-bott-item">
								<?php 
									$LinkBox = get_field('ссылка_на_другой_проект');
									$title = $LinkBox['название'];
									$banerImageUrl = $LinkBox['изображение']['url'];
									$desc = $LinkBox['описание'];
									$link = $LinkBox['ссылка'];
									
									
								?>
								<div class="cat-bott-item__left">
									<div class="boxtitle"><?php echo $title ?></div>
									<p><?php echo $desc ?></p>
									<a class="button-red button-more_small button-red_small button-red_gray" target="_blank" href="<?php echo $link; ?>">
										<div class="ico"></div><span>Подробнее</span>
									</a>
								</div>
								<div class="cat-bott-item__right" style="background-image: url(<?php echo $banerImageUrl; ?>"></div>
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
			<div class="modal-window call-window product-common-popup" id="complect"><span class="modal-close"></span>
				<div class="complect-more-top">
					<h2>Комплектация Гамма</h2>
					<div class="complect-more-top__caract"><span>Высота 1-го этажа: 2,5 м</span><span>Высота 2-го этажа: 2,5 м</span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<h4>Свайно-винтовой фундамент:</h4>
						<p>сваи длиной 2500мм, диаметр лопасти – 300мм, диаметр ствола – 108 мм</p>
						<h4>Основание дома:</h4>
						<p>обвязка выполняется из не строганого бруса 150х150 мм. Лаги устанавливаются на обвязку сверху, закрываются внешней опорой. Обвязки крепится к оголовку сваи на болты глухари. Между первым рядом обвязки и фундаментом прокладывается рубероид.</p>
						<h4>Стены дома каркасные:</h4>
						<p>
							стойки каркаса выполняются из доски 50х100мм, с шагом 630м (по осям). Раскосы и пояса каркаса выполняются из доски 40х100мм. Силовые узлы каркаса собираются на металлические уголки, саморезы и гвозди.
						</p>
						<p>Весь пиломатериал для устройства каркаса стен, стропильной системы, лаг, балок, обвязки, обрешетки - хвойных пород, естественной влажности. Размерность материала - согласно техническим условиям.Утепление стен дома первого этажа -базальтовые плиты
							«HotRock» - 100мм;</p>
						<h4>Внешняя отделка стен:</h4>
						<p>
							имитация бруса 16мм (камерной сушки), хвойных пород класса АВ. Прокладывается ветрозащита (гидроизоляция) «Наноизол А» или аналоги.
						</p>
						<h4>Внутренняя отделка стен дома:</h4>
						<p>
							вагонка (камерной сушки), хвойных пород. Прокладывается пароизоляция «Наноизол B» или аналоги. Под внешнюю отделку, по стойкам каркаса, поверх мембран монтируется контр.рейка из обрезной доски 20мм. Высота от пола до потолка на первом этаже – 2,5м.
						</p>
						<h4>Крыша:</h4>
						<p>
							двускатная, симметричная, фронтон устанавливается по шестиметровой стене. Высота от перекрытия первого этажа до конька – 4,0м.
						</p>
						<h4>Кровельный материал:</h4>
						<p>
							металлочерепица (цвет на выбор). Под кровлю настилается мембрана «Наноизол SM» или аналоги. Поверх гидроизоляции вдоль стропильных ног выполняется контр.рейка.

						</p>
						<p>
							Стропильная система изготавливается из бруска 50х150 мм, шаг 630 мм(по осям). Обрешетка кровли из обрезной доски 20-25 мм, не сплошная. Потолок первого этажа подшивается вагонкой (камерной сушки), хвойных пород.
						</p>
						<h4>Утепление потолка:</h4>
						<p>
							базальтовые плиты«HotRock» - 100мм. Прокладывается пароизоляция«Наноизол B» или аналоги. Потолочные балки из бруса - 50х150 мм, на ребро, шаг 630 мм (по осям).
						</p>
						<h4>Пол первого этажа:</h4>
						<p>Обрешетка под утеплитель - обрезная доска 20-25 мм (естественной влажности), шаг 300мм.</p>
						<p>Чистовой пол: половая (шпунтованная) доска 35мм (камерной сушки), хвойных пород, полы монтируются в каждой комнате отдельно. Возможен стык половой доски.</p>
						<p>
							Монтаж половой (шпунтованной) доски 35мм в комнатах выполняется на саморезы сверху через 2 доски (монтаж скрытым способом в замок является дополнительной услугой). Утепление пола - базальтовые плиты «HotRock » - 150мм. Прокладывается паро-гидроизоляция«Наноизол»
							или аналоги. Половые лаги из бруса 50х150 мм на ребро, шаг 630 мм. Возможно уменьшение лаг пола до 300мм (дополнительная услуга).
						</p>
					</div>
					<div class="col-lg-6">
						<h4>Перегородки:</h4>
						<p><strong>1 этаж:</strong> перегородки каркасные из бруска 50х100мм.С двух сторон обшиваются вагонкой хвойных пород (камерной сушки).Утепляются - базальтовыми плитами «HotRock » - 100мм. С двух сторон прокладывается пароизоляция «Наноизол B» или аналоги.</p>
						<p><strong>2 этаж:</strong> перегородки каркасные из бруска 50х100мм.С двух сторон обшиваются вагонкой хвойных пород (камерной сушки). Утепляются - базальтовыми плитами «HotRock » - 100мм. С двух сторон прокладывается пароизоляция «Наноизол B» или аналоги.</p>
						<h4>Двери:</h4>
						<p>
							<strong>Входная</strong> – металлическая - 1шт (толщина стали 1,2мм, производство Россия). Левого открывания.
							<br>
							<strong>Внутренние</strong> (межкомнатные) – филенчатые, деревянные, размер филенчатых дверей - 800х2000 мм – 6шт (возможна замена дверей на 2м этаже на 700х2000мм).
						</p>
						<p>В комплекте с дверьми идут петли, а также работа по установке дверей, фурнитура на филенчатые двери не предусмотрена. Двери устанавливаются согласно планировке.</p>
						<h4>Окна:</h4>
						<p>
							однокамерные ПВХ стеклопакеты, белого цвета. Мансарда изнутри по всему периметру обшивается вагонкой хвойных пород (камерной сушки), утепление мансарды - базальтовые плиты «HotRock » - 100мм, прокладывается пароизоляция «IsospanB» или аналог.
						</p>
						<h4>Пол на мансарде:</h4>
						<p>
							половая (шпунтованная) доска – 35 мм (камерной сушки). Высота от пола на мансарде – 2,4м. Фронтоны с наружной стороны отделываются имитацией бруса 16мм(камерной сушки), хвойных пород. Утепляются базальтовыми плитами «HotRock » - 100мм, прокладывается
							гидроизоляция «Наноизол A» или аналоги. Свесы крыши подшиваются вагонкой(камерной сушки), ширина свеса не менее 340мм (ширина в 4 вагонки). Углы дома обшиваются вагонкой(камерной сушки).
						</p>
						<p>Первый этаж и мансарду соединяет двухмаршевая Г-образная лестница. </p>
						<h4>Лестница:</h4>
						<p>отделывается перилами, объемные балясины (точеные). Устанавливаются стартовые столбы. Подступенки не выполняются.</p>
						<h4>Полотнища</h4>
						<p>гидро-пароизоляционных мембран монтируют с нахлестом по горизонтальным и вертикальным стыкам не менее 15 см и закрепляют на каркасе (стойках, поясах, лагах, балках, стропилах) строительным степлером.</p>
						<p><strong>На фронтоны устанавливаются вентиляционные решетки (цвет белый).</strong>
						</p>
						<p><strong>Отделка наличником и плинтусом включена.</strong>
						</p>
						<p><strong>Устанавливаются ступени у входа.</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="modal-window call-window fundament-popup" id="fundament"><span class="modal-close"></span>
				<h2>Фундамент</h2>
				<h3>Винтовые сваи / ЖБИ Забивные сваи / Ленточные фундамент</h3>
				<div class="row fund-row">
					<div class="col-lg-6">
						<h4>Стандартные винтовые сваи:</h4>
						<ul>
							<li>Длинна 2500 мм</li>
							<li>Диаметр 108 мм</li>
							<li>Оголовок 150х150 мм</li>
							<li>Сухое цементирование, бетон марки М300</li>
						</ul>
						<h4>Возможные дополнения:</h4>
						<p>Увеличение длинны сваи, увеличениея диаметра сваи, замена на оцинкованные сваи</p>
						<p>Шаг установки не более 3 м на глубину промерзания в среднем 1,6 м.</p>
						<p>Гидроизоляция оголовка руберойдом.</p>
					</div>
					<div class="col-lg-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/fund1.png" alt="">
					</div>
				</div>
				<div class="row fund-row">
					<div class="col-lg-6">
						<h4>ЖБИ забиные сваи сваи:</h4>
						<ul>
							<li>Длинна 3000 мм</li>
							<li>Сечение 150х150 мм</li>
							<li>Оголовок от150х150 мм</li>
							<li>Бетон марки М500</li>
						</ul>
						<h4>Возможные дополнения:</h4>
						<p>Шаг установки не более 3 м на глубину промерзания в среднем 2 м.</p>
						<p>Гидроизоляция оголовка руберойдом.</p>
					</div>
					<div class="col-lg-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/fund2.png" alt="">
					</div>
				</div>
			</div>

<?php get_footer(); ?>