<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- <div class = "preloader">
		<div class = "item-1 left-side">
			<span></span>
			<div class = "dot dot-1"></div>
			<div class = "dot dot-2"></div>
		</div>
		<div class = "item-1 right-side">
			<span></span>
			<div class = "dot dot-3"></div>
			<div class = "dot dot-4"></div>
		</div>
		<div class = "item-2"></div>
		<div class = "item-3"></div>
		<div class = "item-4"></div>
    </div> -->

	<header>
		<div class="line_header">	
			<ul class="wrapper-header">
				<li class="location_header">
					<?php if (ale_get_option('header_address')){
						echo '<i class="fas fa-map-marker-alt"></i> ';
                        echo '<span class="adress-location_header">'.esc_attr(ale_get_option('header_address')).'</span>';
                    } ?>
				</li>
				<li class="line_header-email">			
					<?php if (ale_get_option('header_email')){
						echo '<i class="far fa-envelope"></i> ';
                        echo '<span>'.esc_attr(ale_get_option('header_email')).'</span>';
                    } ?>
				</li>
				<li class="line_header-basket">
					<a href="cart.html" target="_blank"><i class="fas fa-shopping-basket"></i>
					<span>10</span></a>
					<section class="modal_cart">
						<h6 class="visually-hidden">Модельне вікно корзини товарів</h6>
						<ul class="modal_cart_price">
							<li>
								<strong><a href="#">Бетонні кільця КС-10.9</a><i class="far fa-trash-alt"></i></strong>
								<span>10 х 1000грн.</span>
							</li>
							<li>
								<strong><a href="#">Бетонні кільця КС-15.9</a><i class="far fa-trash-alt"></i></strong>
								<span>10 х 1500грн.</span>
							</li>
							<li>
								<strong><a href="#">Бетонні кільця КС-20.9</a><i class="far fa-trash-alt"></i></strong> 
								<span>10 х 2000грн.</span>
							</li>
						</ul>
						<p>Разом:<span class="modal_cart_total">45000грн</span></p>
						<a href="#">Переглянути корзину</a>
						<a href="#">Оформити заказ</a>
						<button class="close_cart" type="button">Закрити вікно</button>
					</section>
				</li>	
				<li class="line_header-price"><a href="#" class="show_link">10254.54$</a></li>	
				<li class="line_header-user">
					<a href="#"><i class="fas fa-user-circle"></i></a>
				</li>	
				<li class="line_header-facebook">
					<a href="#"><i class="fab fa-facebook-square"></i></a>
				</li>	
				<li class="line_header-twitter">
					<a href="#"><i class="fab fa-twitter-square"></i></a>
				</li>	
				<li class="line_header-telegram">
					<a href="#"><i class="fab fa-telegram-plane"></i></a>
				</li>	
			</ul>
		</div>
		<div class="info_header">
			<div class="line-info_header"></div>
			<ul class="wrapper-header">
				<li class="logo_header">
                    <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
                        <?php if(ale_get_option('sitelogo')){?>
                        <img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" title="<?php esc_attr(bloginfo('title')); ?>"/>
                        <?php } else { ?>
                            <h1><?php esc_attr(bloginfo('title')); ?></h1>
                        <?php }  ?>
                    </a>
				</li>
				<li class="clock_header">
					<?php if (ale_get_option('header_time_one')||ale_get_option('header_time_two')){
						echo '<i class="far fa-clock"></i>';
					}?>
					<div class="clock_header_wrapper">
						<?php if (ale_get_option('header_time_one')){
							echo '<span class="time-clock_header">'.esc_attr(ale_get_option('header_time_one')).'</span>';
						}?>
						<?php if (ale_get_option('header_time_two')){
							echo '<span class="time-clock_header">'.esc_attr(ale_get_option('header_time_two')).'</span>';
						}?>
					</div>
				</li>
				<li class="separator_header"></li>
				<li class="tel_header">
					<?php if (ale_get_option('header_call')){
						echo '<i class="fas fa-phone-alt"></i>';
						echo '<span class="phone_header">'.esc_attr(ale_get_option('header_call')).'</span>';
					}?>
				</li>
			</ul>
		</div>
		<div class="bg_header">
			<div class="slider_header">
				<img src="<?php echo esc_url(ale_get_option('main_image')); ?>" alt="background image" />
			</div>
			<div class="circle_img"></div>
			<nav class="header_navigation">
                <?php
                    wp_nav_menu(array(
                        'theme_location'=>'header_menu',
                        'menu'=>'Header Menu',
                        'menu_class'=>'menu menu-header',
                        'walker'=>new Aletheme_Nav_Walker(),
                        'container'=>'',
                    ));
                ?>
			</nav>
			<div class="slogan_header">
				<div class="border_left-slogan_header"></div>
				<div class="description-slogan_header">
					<?php if (ale_get_option('header_slogan_top')){
						echo '<span class="top_slogan">'.esc_attr(ale_get_option('header_slogan_top')).'</span>';
					}?>
					<?php if (ale_get_option('header_slogan_center')){
						echo '<h1>'.esc_attr(ale_get_option('header_slogan_center')).'</h1>';
					}?>
					<?php if (ale_get_option('header_slogan_bottom')){
						echo '<span class="bottom_slogan">'.esc_attr(ale_get_option('header_slogan_bottom')).'</span>';
					}?>
				</div>
				<div class="border_right-slogan_header"></div>
			</div>
		</div>
		<?php if (ale_get_option('header_advertasment_top')){
			echo '<div class="advertasment-header">'.esc_attr(ale_get_option('header_advertasment_top')).'</div>';
		}?>
		<div class="advertasment_line-header">
			<div class="map_advertasment-header">
				<div class="map_point map_point1">
					<svg>
						<circle r="2" cx="15" cy="15" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point2">
					<svg>
						<circle r="2" cx="10" cy="25" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point3"></div>
				<div class="map_point">
					<svg>
						<circle r="2" cx="18" cy="17" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point4">
					<svg>
						<circle r="2" cx="19" cy="15" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point"></div>
				<div class="map_point map_point5">
					<svg>
						<circle r="2" cx="25" cy="25" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point6">
					<svg>
						<circle r="2" cx="25" cy="15" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point7">
					<svg>
						<circle r="2" cx="25" cy="18" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point8">
					<svg>
						<circle r="2" cx="25" cy="28" fill="none" stroke="orange"/>
					</svg>
				</div>
				<div class="map_point map_point9">
					<svg>
						<circle r="2" cx="25" cy="18" fill="none" stroke="orange"/>
					</svg>
				</div>
				<?php if (ale_get_option('header_inform_number')){
					echo '<div class="description_advertasment-header">
						<span class="description_advertasment_counter" data-max="'.esc_attr(ale_get_option('header_inform_number')).'">0</span>
					</div>';
				}?>
			</div>
			<div class="description_line-header">
				<?php if (ale_get_option('header_inform_header_bold')||ale_get_option('header_inform_header_normal')){
				echo '<p>'.esc_attr(ale_get_option('header_inform_header_normal')).'<span>'.esc_attr(ale_get_option('header_inform_header_bold')).'</span></p>
				<p>'.esc_attr(ale_get_option('header_inform_text')).'</p>';
			}?>
			</div>
			<?php if (ale_get_option('header_advertasment_bottom')){
				echo '<div class="pointer_line-header"><a href="#catalog"><span>'.esc_attr(ale_get_option('header_advertasment_bottom')).'</span></a></div>';
			}?>
		</div>
	</header>
   

    

