<?php

class AoplanSetting{
	function product (){
		echo "page";
	}
}

class AoplanMenu{
	private $page ;
	function AoplanMenu(){
		$this->page = new AoplanSetting();
		$this->init();
	}

	private function init(){
		add_action( 'admin_menu', array( $this, 'product' ) );
	}

	private function addPage( $title , $callback = false ){
		$callback = $callback ? $callback : $title;
		add_theme_page( $title,  $title, 'edit_theme_options', 'options-framework', array( &$this->page , $callback ) );
	}

	function product(){
		$this->addPage('product');
	}
}

new AoplanMenu();

?>