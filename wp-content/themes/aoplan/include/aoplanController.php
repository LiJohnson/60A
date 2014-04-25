<?php
class AoplanController{
	protected function getData($names){
		if( !is_array($names) ){
			$names = preg_split("/,/",$names);
		}
		$param = array();
		foreach ($names as $name) {
			$param[$name] = isset($_POST[$name]) ? $_POST[$name] : $_GET[$name];
		}
		return $param;
	}
}
?>