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

	public function incrementCart($product_id, $quantity = null)
	{
		$_SESSION['cart'][$product_id] += (int) $quantity;
		$this->updateCartItems();
	}

	public function decrementCart($product_id, $quantity = null)
	{
		$_SESSION['cart'][$product_id] -=  (int) $quantity;
		$this->updateCartItems();
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
		return $this->items;
	}


}