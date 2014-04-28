<?php
class AoplanHtml{
	function nav(){
		global $aoplanOption;
		$titles = $aoplanOption->getTitles();
		$html = '<nav class="home-navigation top-nav nav nav-tabs animate" >';
		foreach ($titles as $key => $title) {
			$html .= "<li class=onetone-menuitem ><a href='#$key' >$title[title]</a></li>";
		}
		$html .= "</nav>";
		echo $html;
	}
}

$aoplanHtml = new AoplanHtml();
?>