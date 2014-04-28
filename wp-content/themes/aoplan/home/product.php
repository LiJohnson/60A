<?php
$liHtml = '';
$itemHtml = '';
foreach ($aoplanOption->get("productList",array()) as $id => $product) {
	$liHtml .= "<li data-target='' data-slide-to=$id ></li>";

	$itemHtml .= "<li><a href=javascript:; ><img class='port-img' src='$product[pic]'><div class='hide content'><h3>$product[title]</h3>$product[content]</div></a></li>";
}
?>
<h1>产品介绍</h1>
<div id="carousel-product" class="carousel slide" data-ride="carousel">
	<div class="portfolio-list">
		<ul>
			<?php echo $itemHtml;?>
		</ul>
	</div>
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php echo $liHtml;?>
	</ol>
</div>
