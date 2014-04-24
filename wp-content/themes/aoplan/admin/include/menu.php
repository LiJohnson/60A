<?php

/**
 * 后台主题页面
 */
class AoplanSetting{
	private $option;
	public function AoplanSetting(){
		global $aoplanOption;
		$this->option = $aoplanOption;
	}

	/**
	 * 页面输出统一出口
	 * @param  boolean $file [description]
	 * @return [type]        [description]
	 */
	private function outPut($file = false){
		$name = trim($_GET['page']);
		if(!$file)return;
		if(!$name)return;

		$titles = $this->option->get('titles',array());
		$title = $titles[$name];
		if( !is_array($title) )$title = array();

		echo '<div class=wrap >';
		require( dirname(__file__).'/header.php' );
		require( dirname(__file__).'/../'.$file.'.php' );
		echo '</div>';
	}

	/**
	 * 更新title
	 * @return [type] [description]
	 */
	public function updateTitle(){
		$name = trim($_POST['name']);
		$title = trim($_POST['title']);
		$pos = trim($_POST['pos']);

		$titles = $this->option->get('titles',array());
		$titles[$name] = array('title' => $title , 'pos' => $pos );
		
		echo json_encode(array('code'=> $this->option->set('titles',$titles) ,'data' =>$titles ));
		die();
	}

	/**
	 * 产品页面
	 * @return [type] [description]
	 */
	public function product (){
		$productList = $this->option->get("productList",array());
		
		return $this->outPut('product');
	}

	/**
	 * 相册页面
	 * @return [type] [description]
	 */
	public function gallery(){
		return $this->outPut('gallery');
	}

	/**
	 * 关于我们页面
	 * @return [type]
	 */
	public function about(){
		return $this->outPut('about');
	}

	/**
	 * 联系方式页面
	 * @return [type]
	 */
	public function contact(){
		return $this->outPut('contact');
	}
}

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


	private function addPage( $title , $callback = false ){
		$callback = $callback ? $callback : $title;
		add_theme_page( $title,  $title, 'edit_theme_options', $callback , array( &$this->page , $callback ) );
	}
}

new AoplanMenu();
?>