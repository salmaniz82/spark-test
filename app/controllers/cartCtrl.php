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
			$statusCode = 200;
		}
		else {
			$data['cart'] = null;
			$data['message'] = 'No Items Found';
			$data['status'] = false;
			$data['total'] = 0;
			$statusCode = 202;
		}	
		
		view::responseJson($data, $statusCode);

	}


	private function cartItemExists()
	{

		$product_id = Route::$params['p_id'];	
		$quantity   = Route::$params['qty'];

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
		$this->init();

		if(isset($_SESSION['cart'][$product_id]))
		{
			$_SESSION['cart'][$product_id] += (int) $quantity;	
		} else {
			$_SESSION['cart'][$product_id] = (int) $quantity;
		}

		$this->index();

		
	}

	

	public function less()
	{
		$product_id = (int) Route::$params['p_id'];
		$quantity = (int) Route::$params['qty'];


		if($this->cartItemExists())
		{
			$_SESSION['cart'][$product_id] -=  $quantity;
			$this->updateCartItems();

		}
		
		$this->index();

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


	public static function getItems()
	{
		view::responseJson($this->items, 200);
	}


	public function showItems()
	{
		
		print_r($_SESSION);

	}


	public function updateCart()
	{

		/* input from text box for value udpate */

		if($this->cartItemExists()) 
		{		
			$product_id = (int) Route::$params['p_id'];
			$quantity = (int) Route::$params['qty'];
			$_SESSION['cart'][$product_id] = $quantity;

		}

		return $this->index();

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