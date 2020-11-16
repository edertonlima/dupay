<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="" type="image/x-icon" />
	<link rel="icon" href="" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="pt" />
	<meta name="rating" content="General" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<meta name="author" content="" />
	<meta name="language" content="pt-br" />
	<meta name="title" content="" />

	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">
		<nav class="nav nav-principal">
			<div class="container">
				<div class="logo"><a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
				</a></div>
				
				<ul class="align-right">

					<?php 
						/*$array_menu = wp_get_nav_menu_items('header');
						$menu = array();
						foreach ($array_menu as $item) {
							if (empty($m->menu_item_parent)) { ?>

								<li>
									<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"> 
										<?php echo $item->title; ?>
									</a>
								</li>

							<?php }
						}*/
					?>

				</ul>

				<div class="menu-mobile" id="nav-icon2">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</nav>
	</header>

	<?php if(is_front_page()){ ?>

	<?php } ?>