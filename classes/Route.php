<?php 
/**
 * 
 */
class Route
{
	
	private static $valideroute = Array();
	


		public static function set_route($uri)
		{
			$valideroute[] = $uri;
			$url = explode('.', $_GET['url']);
			
			if($url[0] == $uri):
				switch($uri):
					case "index":
					Controller::loadview('resto-index');
					break;

					case "search":
					Searchcontroller::loadview('search');
					break;

					case "search_limit":
					Controller::loadview('search_limit');
					break;

					case "admin":
					Controller::loadview('admin');
					break;

					case "orderform":
					Finalordercontroller::orderForm();
					break;

					case "admin-log":
					Controller::loadview('admin-log');
					break;

					case "cust-order-form":
					Controller::loadview('cust-order-form');
					break;

					case "cust-order-form-send-code":
					Controller::loadview('cust-order-form-send-code');
					break;

					case "cust-order-form-send-code-verify":
					Controller::loadview('cust-order-form-send-code-verify');
					break;

					case "fftw":
					Controller::loadview('fftw');
					break;
					
					case "logout":
					Controller::loadview('logout');
					break;

					case "productslists":
					Controller::loadview('productslists');
					break;

					case "final-order":
					Admincontroller::customerorderform();
					break;


				endswitch;

			else:
					// http_response_code(401);
			endif;	

		}

}


 ?>