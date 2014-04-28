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
		//add
		if( $product['title'] ){
			if($product['id'] == ''){
				$list[] = $product;
			}else{
				$list[$product['id']] = $product;
			}
			$this->option->set("productList",$list);
		}

		//delete
		if( $_POST['delete'] && $list[$product['id']]){
			unset( $list[$product['id']]);
			$this->option->set("productList",$list);
		}

		$product = array();
		//edit
		if( isset($_GET['id']) ){
			$product = $list[$_GET['id']];
		}
		
		return $this->outPut('product' , array('list'=>$list,'product'=>$product));
	}

	/**
	 * 相册页面
	 * @return [type] [description]
	 */
	public function gallery(){
		$list = $this->option->get('gallery',array());
		//add
		if( $_POST['pic'] ){
			$list[] = $_POST['pic'];
		}
		//delete
		if( $_POST['delete'] && isset( $list[$_POST['id']] ) ){
			unset($list[$_POST['id']]);
		}

		$this->option->set('gallery',$list);

		return $this->outPut('gallery' , array('list' => $list));
	}

	/**
	 * 关于我们页面
	 * @return [type]
	 */
	public function about(){
		$about = $this->option->get('about',array());
		if( $_POST['about'] ){
			$about = $this->getData('tel,name,web,addr,desc');
			$this->option->set('about',$about);
		}
		return $this->outPut('about',array('about'=>$about));
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