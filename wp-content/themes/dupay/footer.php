
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-x5">
					<a href="<?php echo get_home_url(); ?>" class="logo-footer">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="">
					</a>

					<p>A loja DUPAY é focada em entregar o melhor produto, buscando oferecer sempre a melhor experiência para nossos clientes.</p>
				</div>

				<div class="col-x5">
					<h3>Informações</h3>

						<nav class="nav nav-footer">							
							<ul class="">

								<?php 
									$array_menu = wp_get_nav_menu_items('footer');
									$menu = array();
									foreach ($array_menu as $item) {
										if (empty($m->menu_item_parent)) { ?>

											<li>
												<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"> 
													<?php echo $item->title; ?>
												</a>
											</li>

										<?php }
									}
								?>

							</ul>
						</nav>
				</div>

				<div class="col-x5">
					<h3>Pagamentos</h3>
					<span class="pag-boleto">Depósito em conta: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-pag-boleto.png" alt=""></span>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-pag.png" alt="" class="img-pag">
				</div>

				<div class="col-x5">
					<h3>Loja Segura</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-loja-segura.png" alt="">
				</div>

				<div class="col-x5">
					<h3>Redes Sociais</h3>
					<ul class="redes-sociais">
						<li>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-square.svg" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-square.svg" alt=""></a>
						</li>
					</ul>
				</div>

				<div class="col-x5">
					<div class="box-nav-footer">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-footer-1.png" alt="">

					</div>

				</div>
			</div>
		</div>
		
		<div class="copy">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="align-center">Copyright © Loja X - Todos os direitos reservados. Tecnologia © Dupay</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		window_W = $(window).width();
	});

	$('.menu-mobile').click(function(){
		$('.nav').toggleClass('active');
	});

	$(window).scroll(function(){
		scroll_body = $(window).scrollTop();
		if(scroll_body > 25){
			$('.header').addClass('scroll');
		}else{
			$('.header').removeClass('scroll');
		}
	});
</script>

<?php wp_footer(); ?>