<?php

class Controller {

	
	public function loadModel($name) {
		
		$path = 'app/models/'.$name.'_model.php';
		
		if (file_exists($path)) {
			
			require 'app/models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
			
		}
		// echo "loadmodel $modelName";		
	}

}