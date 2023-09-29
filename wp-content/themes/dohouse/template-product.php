<?php 
/*
Template name: Продукт
*/
?>

<?php get_header(); ?>

			<div class="catalog-page">
				<div class="catalog-top-page">
					<div class="catalog-top-page__img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/vid.jpg)"></div>
					<div class="catalog-top-page__info">
						<div class="catalog-top-page__info-item active" data-img="background-image:url(<?php echo get_template_directory_uri(); ?>/img/vid.jpg)">Общий вид</div>
						<div class="catalog-top-page__info-item" data-img="background-image:url(<?php echo get_template_directory_uri(); ?>/img/sample.jpg)">1 этаж <span>(план)</span>
						</div>
						<div class="catalog-top-page__info-item" data-img="background-image:url(<?php echo get_template_directory_uri(); ?>/img/vid.jpg)">2 этаж <span>(план)</span>
						</div>
					</div>
				</div>
				<div class="catalog-middle-page">
					<div class="catalog-parameters">
						<div class="catalog-parameters-item">
							<div class="catalog-parameters-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/razmer.svg" alt="">
							</div>
							<div class="catalog-parameters-item__value"><span>Размер:</span><strong>6x8 м</strong>
							</div>
						</div>
						<div class="catalog-parameters-item">
							<div class="catalog-parameters-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ploschad.svg" alt="">
							</div>
							<div class="catalog-parameters-item__value"><span>Размер:</span><strong>6x8 м</strong>
							</div>
						</div>
						<div class="catalog-parameters-item">
							<div class="catalog-parameters-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/etag.svg" alt="">
							</div>
							<div class="catalog-parameters-item__value"><span>Размер:</span><strong>6x8 м</strong>
							</div>
						</div>
						<div class="catalog-parameters-item">
							<div class="catalog-parameters-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/terassa.svg" alt="">
							</div>
							<div class="catalog-parameters-item__value"><span>Размер:</span><strong>6x8 м</strong>
							</div>
						</div>
						<div class="catalog-parameters-item">
							<div class="catalog-parameters-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/balkon.svg" alt="">
							</div>
							<div class="catalog-parameters-item__value"><span>Размер:</span><strong>6x8 м</strong>
							</div>
						</div>
						<div class="catalog-parameters-item">
							<div class="catalog-parameters-item__ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/svet.svg" alt="">
							</div>
							<div class="catalog-parameters-item__value"><span>Размер:</span><strong>6x8 м</strong>
							</div>
						</div>
					</div>
					<h3>Выбор комплектации</h3>
					<div class="calc-block">
						<div class="calc-left">
							<div class="calc-left__left">
								<div class="type-item active">
									<div class="type-item__ico">
										<img src="<?php echo get_template_directory_uri(); ?>/img/type1.svg" alt="">
									</div>
									<div class="type-item__value">КАРКАС</div>
								</div>
							</div>
							<div class="calc-left__right">
								<div class="calc-left__right-types">
									<div class="type-item">
										<div class="type-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/type2.svg" alt="">
										</div>
										<div class="type-item__value">КЛЕЕНЫЙ БРУС</div>
									</div>
									<div class="type-item">
										<div class="type-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/type3.svg" alt="">
										</div>
										<div class="type-item__value">БРУС</div>
									</div>
									<div class="type-item">
										<div class="type-item__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/type4.svg" alt="">
										</div>
										<div class="type-item__value">КОМБИНИРОВАННЫЙ</div>
									</div>
								</div>
								<div class="seasons"><span class="seasons_active">Сезонный</span><span>Зима</span><span>Зима +	</span>
								</div>
								<h3>Особенности комплектации</h3>
								<div class="osobenosty">
									<p>Дом для сезонного проживания,
										<br>базовая комплектация</p>
								</div>
								<div class="osob-block">
									<div class="osob-item"><span><span>КАЧЕСТВО</span> + ЦЕНА</span>
									</div>
									<div class="osob-item"><span><span>УТЕПЛЕНИЕ</span> 100/150 ММ</span>
									</div>
									<div class="osob-item"><span><span>ВЫСОТА ЭТАЖА</span> 2,5 М.</span>
									</div>
									<div class="osob-item"><span><span>КРОВЛЯ</span> GRAND LINE</span>
									</div>
									<div class="osob-item"><span><span>СТАНДАРТНЫЙ</span> ШАГ БАЛОК</span>
									</div>
									<div class="osob-item"><span><span>КАРКАС</span> 100Х50 ММ</span>
									</div>
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
											<div class="char-list__item">
												<div class="char-list__itemCol"><span>Фундамент</span>
												</div>
												<div class="char-list__itemCol"><span>Винтовые сваи 108 х 2500мм</span>
												</div>
												<div class="char-list__itemCol"><a class="fmore" href="#fundament" data-modal="modal-complect">Подробнее</a>
												</div>
											</div>
											<div class="char-list__item">
												<div class="char-list__itemCol"><span>Кровля</span>
												</div>
												<div class="char-list__itemCol"><span>Металлочерепица 0,5мм</span>
												</div>
												<div class="char-list__itemCol"></div>
											</div>
											<div class="char-list__item">
												<div class="char-list__itemCol"><span>Утепление</span>
												</div>
												<div class="char-list__itemCol"><span>Пол, крыша, стены и перегородки 100 мм</span>
												</div>
												<div class="char-list__itemCol"></div>
											</div>
											<div class="char-list__item">
												<div class="char-list__itemCol"><span>Окна и двери ПВХ</span>
												</div>
												<div class="char-list__itemCol"><span>Однокамерный стеклопакет</span>
												</div>
												<div class="char-list__itemCol"></div>
											</div>
											<div class="char-list__item">
												<div class="char-list__itemCol"><span>Пол</span>
												</div>
												<div class="char-list__itemCol"><span>Доска строганная шпунтованная 35 мм</span>
												</div>
												<div class="char-list__itemCol"></div>
											</div>
											<div class="char-list__item">
												<div class="char-list__itemCol"><span>Дверь входная </span>
												</div>
												<div class="char-list__itemCol"><span>Металлическая дверь</span>
												</div>
												<div class="char-list__itemCol"></div>
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
								<div class="character">
									<div class="character-title">
										<div class="character-title__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/k2.svg" alt="">
										</div>
										<div class="character-title__heading">Основа дома</div>
									</div>
									<div class="character-content">
										<ul>
											<li>Брус калиброванный 150х150 мм</li>
											<li>Огнебиозащитная обработка обвязки и чергового пола</li>
											<li>Балки перекрытия 150х50 мм</li>
											<li>Стойки 100х50 мм; Стропила 150х50 мм</li>
											<li>Черновой подшив пола 25х100 мм</li>
											<li>Дышащие супердиффузионные мембраны</li>
											<li>Технология «Вентилируемая кровля»</li>
											<li>Технология «Вентилируемый фасад»</li>
										</ul>
									</div>
								</div>
								<div class="character">
									<div class="character-title">
										<div class="character-title__ico">
											<img src="<?php echo get_template_directory_uri(); ?>/img/k3.svg" alt="">
										</div>
										<div class="character-title__heading">Пакет инженерных коммуникаций</div>
									</div>
									<div class="character-content">
										<div class="pakety">
											<div class="pak-item">
												<div class="pak-item__ico">
													<img src="<?php echo get_template_directory_uri(); ?>/img/pak1.svg" alt="">
												</div>
												<div class="pak-item__title">Электрика</div>
											</div>
											<div class="pak-item">
												<div class="pak-item__ico">
													<img src="<?php echo get_template_directory_uri(); ?>/img/pak2.svg" alt="">
												</div>
												<div class="pak-item__title">Отопление</div>
											</div>
											<div class="pak-item">
												<div class="pak-item__ico">
													<img src="<?php echo get_template_directory_uri(); ?>/img/pak3.svg" alt="">
												</div>
												<div class="pak-item__title">ГВС/ХВС</div>
											</div>
											<div class="pak-item">
												<div class="pak-item__ico">
													<img src="<?php echo get_template_directory_uri(); ?>/img/pak4.svg" alt="">
												</div>
												<div class="pak-item__title">Канализация</div>
												<div class="pak-item__priceBox"><span>+ 85 000 Р.</span>
												</div>
											</div>
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
									<div class="calc-akcia__sezon"><strong>Зимний ценопад </strong> 
										</br>с 01 по 30 декабря</div>
									<div class="calc-akcia__price">2.105.000 Р.</div>
									<a class="button-red button-red_small button-more_small" href="#">
										<div class="ico"></div><span>Подробно расчитать проект</span>
									</a>
									<a class="button-red button-red_small button-order_small" href="#">
										<div class="ico"></div><span>Хочу такой дом</span>
									</a>
								</div>
							</div>
							<div class="totalbox">
								<div class="totalbox__title">СТОИМОСТЬ ПАКЕТА</div>
								<div class="totalbox__price">+ 840 000 Р.</div>
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
								<div class="cat-bott-item__left">
									<div class="boxtitle">ВИДЫ ФАСАДОВ</div>
									<p>Отделка фасада декоративным кирпичом</p>
									<p>Дизайн-проект фасада в подарок</p>
								</div>
								<div class="cat-bott-item__right">
									<div class="fasad-type-slider-box">
										<div class="fasad-type-slider">
											<div class="item">
												<img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt="">
											</div>
											<div class="item">
												<img src="<?php echo get_template_directory_uri(); ?>/img/sl2.jpg" alt="">
											</div>
											<div class="item">
												<img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt="">
											</div>
											<div class="item">
												<img src="<?php echo get_template_directory_uri(); ?>/img/sl2.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="cat-bott-item">
								<div class="cat-bott-item__left">
									<div class="boxtitle">ПАРНАЯ В ЛЮБОЙ ДОМ</div>
									<p>за 115,000 руб</p>
									<a class="button-red button-more_small button-red_small button-red_gray" href="#">
										<div class="ico"></div><span>Подробнее</span>
									</a>
								</div>
								<div class="cat-bott-item__right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sl2.jpg)"></div>
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