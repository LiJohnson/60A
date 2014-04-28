<?php
require( dirname(__file__)."/aoplanSetting.php" );
/**
 * 后台主题菜单
 */
class AoplanMenu{
	private $page ;
	function AoplanMenu(){
		$this->page = new AoplanSetting();
		$this->init();
	}

	private function init(){
		add_action( 'admin_menu', array( $this, 'product' ) );
		add_action( 'admin_menu', array( $this, 'gallery' ) );
		add_action( 'admin_menu', array( $this, 'about' ) );
		add_action( 'admin_menu', array( $this, 'contact' ) );
		add_action( 'admin_menu', array( $this, 'export' ) );

		add_action('wp_ajax_aoplanUpdateTitle', array( &$this->page , 'updateTitle' ) );
	}

	public function product(){
		$this->addPage('产品','product');
	}

	public function gallery(){
		$this->addPage('相册','gallery');
	}

	public function about(){
		$this->addPage("关于",'about');
	}

	public function contact(){
		$this->addPage('联系方式','contact');
	}
	public function export(){
		$this->addPage("导出",'export');
	}

	private function addPage( $title , $callback = false ){
		$callback = $callback ? $callback : $title;
		add_theme_page( $title,  'aoplan-'.$title, 'edit_theme_options', $callback , array( &$this->page , $callback ) );
	}
}

new AoplanMenu();
?>