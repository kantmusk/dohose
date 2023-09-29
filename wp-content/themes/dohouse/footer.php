		</div>
		<div class="footer-wrap">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer-title">КАТАЛОГ</div>
							<?php 
						    wp_nav_menu( array(
						        'theme_location'  => '',
						        'menu'            => 'FooterMenu2', 
						        'container'       => '', 
						        'container_class' => '', 
						        'container_id'    => '',
						        'menu_class'      => 'footer-menu', 
						        'menu_id'         => '',
						        'echo'            => true,
						        'fallback_cb'     => 'wp_page_menu',
						        'before'          => '',
						        'after'           => '',
						        'link_before'     => '',
						        'link_after'      => '',
						        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						        'depth'           => 0,
						        'walker'          => '',
						        ) );    
						    ?>
						</div>
						<div class="col-lg-3">
							<div class="footer-title">О КОМПАНИИ</div>
							<?php 
						    wp_nav_menu( array(
						        'theme_location'  => '',
						        'menu'            => 'FooterMenu', 
						        'container'       => '', 
						        'container_class' => '', 
						        'container_id'    => '',
						        'menu_class'      => 'footer-menu', 
						        'menu_id'         => '',
						        'echo'            => true,
						        'fallback_cb'     => 'wp_page_menu',
						        'before'          => '',
						        'after'           => '',
						        'link_before'     => '',
						        'link_after'      => '',
						        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						        'depth'           => 0,
						        'walker'          => '',
						        ) );    
						    ?>
						</div>
						<div class="col-lg-3">
							<div class="footer-title">КОНТАКТЫ</div>
							<div class="footer-contacts">
								<div class="footer-contacts__address"><?php the_field('адрес', 'option'); ?></div>
								<div class="footer-contacts__phone"><a href="tel:<?php the_field('телефон', 'option'); ?>"><?php the_field('телефон', 'option'); ?></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer-soc">
								<a class="vk" href="#"></a>
								<a class="inst" href="#"></a>
								<a class="fb" href="#"></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row footer-bottom align-items-center">
								<div class="col-lg-2 order-lg-2">
									<div class="footer-logo-box">
										<a class="footer-logo" href="/"></a>
									</div>
								</div>
								<div class="col-lg-10 order-lg-1">
									<div class="footer-copyrught"><?php the_field('копирайт', 'option'); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="toTop"></div>
			<div class="modal-window-mobile-panel" id="mobile-panel">
				<div class="mobile-panel-top">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
					</a><span class="modal-close"></span>
				</div>
				<?php 
			    wp_nav_menu( array(
			        'theme_location'  => '',
			        'menu'            => 'Главно меню', 
			        'container'       => '', 
			        'container_class' => '', 
			        'container_id'    => '',
			        'menu_class'      => 'mobile-menu', 
			        'menu_id'         => '',
			        'echo'            => true,
			        'fallback_cb'     => 'wp_page_menu',
			        'before'          => '',
			        'after'           => '',
			        'link_before'     => '',
			        'link_after'      => '',
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'depth'           => 0,
			        'walker'          => '',
			        ) );    
			    ?>
			</div>
			<div class="modal-window call-window" id="call"><span class="modal-close"></span>
				<h2>Записаться</h2>
				<p>Мы можем позвонить вам абсолютно бесплатно! Укажите свое имя, номер телефона и предпочтительное время звонка. Наши специалисты ответят на любые возникшие вопросы!</p>
				<form class="call">
					<input type="text" placeholder="Ваше имя" name="uname">
					<input type="text" placeholder="Ваша телефон*" name="phone">
					<input type="hidden" value="Записаться" name="forma">
					<div class="capcha-box">
						<div class="capcha-text">56X98d5edfe</div>
						<div class="capcha-value">
							<input type="text">
						</div>
					</div>
					<div class="warn">*Отправляя форму Вы соглашаетесь с Политикой обработки данных.</div>
					<button class="button button_red" type="submit">Отправить</button>
				</form>
			</div>
			<div class="modal-window call-window" id="count"><span class="modal-close"></span>
				<h2>Рассчитать мой проект</h2>
				<form class="count">
					<p>Прикрепите планировки и внешний вид дома</p>
					<div class="file-attach">
						<button class="button button_red">Прикрепить файл</button>
					</div>
					<p>или укажите ссылку на понравившейся проект</p>
					<input type="text" placeholder="Ссылка" name="link">
					<input type="text" placeholder="Ваша почта" name="email">
					<input type="hidden" value="Рассчитать мой проект" name="forma">
					<textarea placeholder="Пожелания к расчёту" name="desire"></textarea>
					<div class="capcha-box">
						<div class="capcha-text">56X98d5edfe</div>
						<div class="capcha-value">
							<input type="text">
						</div>
					</div>
					<div class="warn">*Отправляя форму Вы соглашаетесь с Политикой обработки данных.</div>
					<button class="button button_red" type="submit">Отправить</button>
				</form>
			</div>
			<div class="modal-window call-window" id="wanthouse"><span class="modal-close"></span>
				<h2>Хочу такой дом</h2>
				<div class="wanthouse">
					<div class="wanthouse__left">
						<div class="wantimg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/project2.jpg" alt="">
						</div>
					</div>
					<div class="wanthouse__right">
						<div class="want-ploschad">Общая площадь: 84 м2</div>
						<p>Мы перезвоним Вам в ближайшее время</p>
						<form class="want">
							<input type="text" placeholder="Ваша телефон*" name="phone">
							<input type="hidden" value="Хочу такой дом" name="forma">
							<div class="capcha-box">
								<div class="capcha-text">56X98d5edfe</div>
								<div class="capcha-value">
									<input type="text">
								</div>
							</div>
							<div class="warn">*Отправляя форму Вы соглашаетесь с Политикой обработки данных.</div>
							<button class="button button_red" type="submit">Отправить</button>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-window thanks" id="thanks">
				<div class="modal-close"></div>
				<h2>Спасибо за <br> заявку</h2>
				<p>Наш специалист свяжется с вами в ближайшее время</p>
			</div>
			<a href="#thanks" data-modal="modal"></a>
			
		
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>    
			<script src="<?php echo get_template_directory_uri(); ?>/js/yandexmap.js"></script>   
		
			
			<?php wp_footer(); ?>
		</div>
	</div>
</body>

</html>