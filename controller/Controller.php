<?php 
/**
 * 
 */
class Controller
{
	

			public function loadview($view)
			{
				include_once "view/".$view.".php";
			}

			public function loadModel($model)
			{
				include_once "model/".$model.".php";
			}

			public function loadError($error)
			{
				include_once "view/error/".$error.".php";
			}

			public function loadHtml($htmlstatic)
			{
				include_once "view/html/".$htmlstatic.".php";
			}


}


 ?>