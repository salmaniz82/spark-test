<?php class cartCtrl extends appCtrl {


	public $items = [];


	public function init()
	{
		if(!isset($_SESSION['cart'])) 
		{
			$_SESSION['cart'] = array();			
		}
	}


	public function sessionHasCart()
	{
		if( isset($_SESSION['cart']) && sizeof($_SESSION['cart']) != 0 )
		{
			return true;
		}
		else 
		{
			return false;
		}
	}


	public function index()
	{

		$this->updateCartItems();

		if( $this->sessionHasCart() )
		{
			$data['cart'] = $_SESSION['cart'];
			$data['message'] = 'Cart Items';
			$data['status'] = true;
			$data['total'] = array_sum($_SESSION['cart']);		
			$noPrdc = array_keys($_SESSION['cart']);
			$data['prdc'] = sizeof($noPrdc);
			$statusCode = 200;
		}
		else {
			$data['cart'] = null;
			$data['message'] = 'No Items Found';
			$data['products'] = 0;
			$data['prdc'] = 0;
			$data['status'] = false;
			$data['total'] = 0;
			$statusCode = 202;
		}	
		
		view::responseJson($data, $statusCode);

	}


	private function cartItemExists($product_id, $quantity)
	{

		

		$cartKeys = array_keys($_SESSION['cart']);

		if( isset($_SESSION['cart'][$product_id]) && in_array($product_id, $cartKeys)) 
		{
			
			return true;

		}

		else {
			
			return false;
		}

	}

	public function add()
	{

		$product_id = Route::$params['p_id'];	
		$quantity   = Route::$params['qty'];	

		$this->addHandler($product_id, $quantity);
		$this->index();

		
	}


	public function addHandler($product_id, $quantity)
	{

		$this->init();
		if(isset($_SESSION['cart'][$product_id]))
		{
			$_SESSION['cart'][$product_id] += (int) $quantity;	
		} else {
			$_SESSION['cart'][$product_id] = (int) $quantity;
		}

	}

	

	public function less()
	{

		$product_id = (int) Route::$params['p_id'];
		$quantity = (int) Route::$params['qty'];
		$this->lessHandler($product_id, $quantity);
		$this->index();

	}


	public function lessHandler($product_id, $quantity)
	{

		
		if($this->cartItemExists($product_id, $quantity))
		{
			$_SESSION['cart'][$product_id] -=  $quantity;
			$this->updateCartItems();
		}

	}

	

	public function updateCartItems()
	{
		
		if($this->sessionHasCart())
		{
			
			foreach($_SESSION['cart'] as $key => $item)
			{
				if($item <= 0)
				{
					unset($_SESSION['cart'][$key]);
				}
			}

			$this->items = $_SESSION['cart'];	
		} 
		else
		{
			$this->items = null;	
		}
		
	}


	


	public function updateCart()
	{

		/* input from text box for value udpate */

		$product_id = (int) Route::$params['p_id'];
		$quantity = (int) Route::$params['qty'];



		if($this->cartItemExists($product_id, $quantity)) 
		{		
			
			$_SESSION['cart'][$product_id] = $quantity;

		}

		return $this->index();

	}




	public function clearSingleHandler($id)
	{

		if( $this->sessionHasCart() ) 
		{
		

			$p_id = (int) $id;
			$p_ids = array_keys($_SESSION['cart']);

			if(in_array($p_id, $p_ids))
			{
				unset($_SESSION['cart'][$p_id]);
			}
			
		}

	}






	public function clearCart()
	{

		if( (isset($_GET['id']) && is_numeric($_GET['id'])) && ($this->sessionHasCart()) ) 
		{
		

			$p_id = (int) $_GET['id'];	
			$p_ids = array_keys($_SESSION['cart']);

			if(in_array($p_id, $p_ids))
			{
				unset($_SESSION['cart'][$p_id]);
			}

			
		}

		elseif (!isset($_GET['id']) || $_GET['id'] == null) {

			
			
			unset($_SESSION['cart']);
			
		}

		$this->index();

	}


	public function cartDetails()
	{


		if( isset($_GET['a'], $_GET['p'], $_GET['q']) )
		{
			
			$pid = (int) $_GET['p'];
			$qty = (int) $_GET['q'];

			if($_GET['a'] == 'l')
			{
				$this->lessHandler($pid, $qty);

			}

			else if($_GET['a'] == 'm')
			{
				
				$this->addHandler($pid, $qty);


			}

			else if ($_GET['a'] == 'rs' && ( isset($_GET['p']) && is_numeric($_GET['p']) ) )
			{

				$rspid = (int) $_GET['p'];

				$this->clearSingleHandler($rspid);

				echo 'I am called to work';

				//return header("location: /cart-details");

			}


			

			return header("location: /cart-details");

		}


		if(!$this->sessionHasCart())
		{

			$originUrl = '/shop';
			return header("location: {$originUrl}");
			die();

		}


		$db = new Database();
		$db->table = 'products'; 

		$cartKeys = array_keys($_SESSION['cart']);
		$pIds = implode(',', $cartKeys);


		if($data['cart-products'] = $db->build('S')->Colums()->Where("id IN (". $pIds .")")->go()->returnData())
		{

			for ($i=0; $i < sizeof($data['cart-products']); $i++) { 
			$pid = $data['cart-products'][$i]['id'];
			$data['cart-products'][$i]['quantity'] = $_SESSION['cart'][$pid];
			}	


			$data['title'] = "cart Items";
			$data['message'] = "cart Items";
			$statusCode = 200;

		} else {
			
			$statusCode = 400;
			$data['message'] = "Cart has not Matching products!";
		}



		view::render('cart', $data);
		

	}


}