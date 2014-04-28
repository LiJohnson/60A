<?php
/**
 * 设置信息
 */
class AoplanOption{
	private $key = 'AOPLAN';
	private $data;

	function AoplanOption(){
		$this->data = get_option($this->key , array());
	}

	public function get($key , $default = null){
		if($this->data[$key] === null ){
			return $default;
		}
		return $this->data[$key];
	}

	public function set($key , $value){
		$this->data[$key] = $value;
		return update_option($this->key , $this->data );
	}

	public function destory(){
		return delete_option($this->key);
	}

	public function exportJson(){
		return json_encode($this->data);
	}

	private function sortTitle($t1 , $t2){		
		return $t1['pos'] - $t2['pos'];
	}

	public function getTitles(){
		$titles = $this->get("titles",array());
		foreach ($titles as $key => $value) {
			$titles[$key]['key'] = $key;
		}
		usort($titles, array($this,'sortTitle'));
		return $titles;
	}
}

$aoplanOption = new AoplanOption();