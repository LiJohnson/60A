<?php

/**
 * 后台主题页面
 */
class AoplanSetting extends AoplanController{
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
	private function outPut($file = false , $out = array()){
		$name = trim($_GET['page']);
		if(!$file)return;
		if(!$name)return;

		$titles = $this->option->get('titles',array());
		$title = $titles[$name];
		if( !is_array($title) )$title = array();

		wp_enqueue_media();

		$out = (object)$out;
		echo '<div class=wrap >';
		if( $out->head !== false )
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
		$list = $this->option->get("productList",array());
		$product = $this->getData("title,id,content,pic");
		if( $product['title'] ){
			if($product['id'] == ''){
				$list[] = $product;
			}else{
				$list[$product['id']] = $product;
			}
			$this->option->set("productList",$list);
		}

		if( $_POST['delete'] && $list[$product['id']]){
			unset( $list[$product['id']]);
			$this->option->set("productList",$list);
		}

		$product = array();
		if( isset($_GET['id']) ){
			$product = $list[$_GET['id']];
		}
//$this->option->set("productList",array());
		return $this->outPut('product' , array('list'=>$list,'product'=>$product));
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

	public function export(){
		return $this->outPut("export",array('head'=>false));
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