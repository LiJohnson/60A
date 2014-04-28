<?php
class AoplanHtml{
	private $option;
	public function AoplanHtml(){
		global $aoplanOption;
		$this->option = $aoplanOption;
	}
	public function nav(){
		$titles = $this->option->getTitles();
		$html = '<nav class="home-navigation top-nav nav nav-tabs animate" >';
		foreach ($titles as $key => $title) {
			$html .= "<li class=onetone-menuitem ><a href='#$title[key]' >$title[title]</a></li>";
		}
		$html .= "</nav>";
		echo $html;
	}

	public function productList(){
		$html = '<ul>';
		foreach ($this->option->get("productList",array()) as $id => $product) {
			$html .= "<li><a href=javascript:; ><img class='port-img' src='$product[pic]'><div class='hide content'><h3>$product[title]</h3>$product[content]</div></a></li>";
		}
		$html .= "</ul>";
		echo $html;
	}
}

$aoplanHtml = new AoplanHtml();
?>