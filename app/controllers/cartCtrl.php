<?php class cartCtrl extends appCtrl {


	public $items = [];


	public function init()
	{
		if(!isset($_SESSION['cart'])) 
		{
			$_SESSION['cart'] = array();			
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

		
		$this->updateCartItems();

		view::responseJson($this->items, 200);
	}

	public static function test()
	{
		
		// echo 'p_id ' . $product_id .'& Qty : '. $quantity;

		echo 'I am test controller from somewhere';

	}

	public function incrementCart()
	{
	

		/*
		$product_id = (int) Route::$params['p_id'];
		$quantity = (int) Route::$params['qty'];
		$_SESSION['cart'][$product_id] += (int) $quantity;
		$this->updateCartItems();

		*/




		$data = $this->items;

		view::responseJson($this->items, 200);
	}

	public function decrementCart()
	{
		$product_id = (int) Route::$params['p_id'];
		$quantity = (int) Route::$params['qty'];
		$_SESSION['cart'][$product_id] -=  $quantity;

		

		foreach($_SESSION['cart'] as $key => $item)
		{
			

			if($item <= 0)
			{
				unset($_SESSION['cart'][$key]);
			}
		}

		
		$this->updateCartItems();

		view::responseJson($this->items, 200);
	}

	public function clearCart()
	{
		
		unset($_SESSION['cart']);
		unset($this->items);
		echo 1;

	}

	public function updateCartItems()
	{
		$this->items = $_SESSION['cart'];
		
	}


	public static function getItems()
	{
		view::responseJson($this->items, 200);
	}


	public function showItems()
	{
		
		print_r($_SESSION);

	}


}