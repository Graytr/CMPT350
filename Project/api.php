<?php


require_once('Employee_Controller.php');
require_once('Customer_Controller.php');
require_once('Purchase_Controller.php');

function getCurrentUri()
  {
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));

    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
    return $uri;
  }

  $base_url = getCurrentUri();

  $routes = array();
  $base_routes = explode('/', $base_url);


  foreach($base_routes as $route)
  {
    if(trim($route) != '')
      
      //Match regular expresssions Push one or more elements onto the end of array
      array_push($routes,$route);
  }

  $objEmployee_Controller= new Employee_Controller();
  $objCustomer_Controller= new Customer_Controller();
  $objPurchase_Controller= new Purchase_Controller();
  $method = $_SERVER['REQUEST_METHOD'];

 /*
  Now, $routes will contain all the routes. $routes[0] will correspond to first route. For e.g. in above example $routes[0] is search, $routes[1] is book and $routes[2] is fitzgerald
  */
  // if($routes[1] == "employee")//here instead of a constant we could use a regular expression
  if (preg_match('/[a-z]/',$routes[0]))
  {
  	if($routes[0]=="employee")
  	{
  		if(isset($routes[1]))
		{
			if(preg_match('/[0-9]*/',$routes[1]))
			{
			  $objEmployee_Controller->setParameters($routes);
			}
		}
		$input = json_decode(file_get_contents('php://input'),true);
		echo ($objEmployee_Controller->setQuery($method,$input));
	} 
	else if ($routes[0]=="customer")
	{
		if(isset($routes[1]))
		{
			if(preg_match('/[0-9]*/',$routes[1]))
			{
			  $objCustomer_Controller->setParameters($routes);
			}
		}
		$input = json_decode(file_get_contents('php://input'),true);
		echo ($objCustomer_Controller->setQuery($method,$input));
	}
	else if ($routes[0]=="purchase") 
	{
		if(isset($routes[1]))
		{
			if(preg_match('/[0-9]*/',$routes[1]))
			{
			  $objPurchase_Controller->setParameters($routes);
			}
		}
		$input = json_decode(file_get_contents('php://input'),true);
		echo ($objPurchase_Controller->setQuery($method,$input));
	}
  }

?>