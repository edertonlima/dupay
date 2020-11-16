
<?php get_header(); ?>

	<section class="box-section box-section-no-padding">

		<div class="slide-page">
			<div class="item imagem" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-slide.jpg');">

				<a href="#"></a>
			</div>
		</div>

	</section>

	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-12">

				</div>
			</div>
		</div>
	</section>
	<?php /*
	$query = array(
			'post_type' => 'post',
			'posts_per_page' => 3
		);
	query_posts( $query );

	if( have_posts() ){ ?>

		<section class="box-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="align-center">Últimas Notícias</h2>
						<p class="text-subtitulo destaque align-center">It is a long established fact that a reader will be distracted</p>
					</div>
				</div>

				<div class="row row-post">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-4">
							<?php get_template_part( 'content/list-post' ); ?>
						</div>
					<?php endwhile;
					wp_reset_query(); ?>
				</div>

				<a href="#" class="btn veja-mais btn-bg-cor1 cor-branco">veja mais</a>
			</div>
		</section>

	<?php } */?>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#depoimentos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		slide = 0;
		$('#depoimentos .slick-dots li').each(function() {
			imagem = $('#depoimentos .slick-slide[data-slick-index="'+ slide +'"] img').attr('src');
			$('button', this).css('background-image','url('+ imagem +')');
			slide = slide+1;
		});

		// projetos
		$('#projetos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/scrollbar/scrollbar.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.scrollbar-dynamic').scrollbar();
	});
</script>