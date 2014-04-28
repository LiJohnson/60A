
<h1>产品介绍</h1>
<div id="carousel-product" class="carousel slide" data-ride="carousel">

	<div class="portfolio-list">
		<?php $aoplanHtml->productList(); ?>
	</div>
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php echo $liHtml;?>
	</ol>
	<ol class="carousel-indicators"></ol><!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="..." alt="...">
			<div class="carousel-caption">
					...
			</div>
		</div>...
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a> 
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
</div>
