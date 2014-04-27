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
}

$aoplanOption = new AoplanOption();