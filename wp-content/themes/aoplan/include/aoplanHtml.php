<?php
class AoplanHtml{
	private $option;
	private $baseUrl ;
	public function AoplanHtml(){
		global $aoplanOption;
		$this->option = $aoplanOption;
		$this->baseUrl = get_option('home').'/';
	}
	public function nav(){
		$titles = $this->option->getTitles();
		$html = '<nav class="home-navigation top-nav nav nav-tabs animate" >';
		$path = is_home() ? '' : $this->baseUrl;
		foreach ($titles as $key => $title) {
			$html .= "<li class=onetone-menuitem ><a href='$path#$title[key]' >$title[title]</a></li>";
		}
		$html .= "</nav>";
		echo $html;
	}

	public function productList(){
		$html = '<ul>';
		foreach ($this->option->get("productList",array()) as $id => $product) {
			$html .= "<li><a href='$product[pic]' target='_blank' ><img class='port-img' src='$product[pic]'><div class='hide content'><h3>$product[title]</h3>$product[content]</div></a></li>";
		}
		$html .= "</ul>";
		echo $html;
	}
}

$aoplanHtml = new AoplanHtml();
?>