<?php 
class todosCtrl {

	public $DB;

	public function __construct()
	{
		 if( !Auth::loginStatus() ) 
     	{
         return header("Location: /login");
         
     	}

		$this->DB = new Database();
		$this->DB->table = 'todos';
	}	

	public function listTodos()
	{
		
		$data = $this->getTodoList();
	
		$data['count'] = sizeof($data['todos']);
		View::render('todos', $data);

	}

	public function setSpaPage()
	{
		View::render('todospa.html');
	}


	public function getTodoList()
	{

		$userID = Auth::User()['id'];
		$data['title'] = 'List of All Todos';

		if(Auth::User()['role_id'] == 1)
		{
			$data['todos'] = $this->DB->listall( ['id', 'todo', 'user_id', 'date_created', 'date_complited', 'is_complited'] )->returnData();	
		}
			else 
			{
				$sqlString = "SELECT * FROM todos WHERE user_id = {$userID} ORDER BY id DESC";
    			$data['todos'] = $this->DB->rawSql($sqlString)->returnData();
			}

			return $data;
	}


	public function listTodoApi()
	{
		$data = $this->getTodoList();
		return View::responseJson($data);
	}

	public function showAddTodos()
	{
		echo 'show add form to add new todos ';
	}

	public function saveTodos()
	{
		
		$keys = array('todo', 'user_id', 'date_created', 'is_complited');
		$todo = $this->DB->sanitize($keys);
		if($this->DB->insert($todo))
		{
			return header("Location: /todos");
		}
		else
		{
			echo 'failed';
		}
	}


	public function showEditTodos()
	{
		echo 'show edit form';
	}

	public function updateTodos()
	{
		$id = Route::$params['id'];
		
		if( isset($_POST['is_complited']) ) {
			
		}
		else {
			$_POST['is_complited'] = 0;
		}

		$keys = array('is_complited', 'date_complited');
		$todo = $this->DB->sanitize($keys);


		if($todo['is_complited'] == '1')
		{
			$todo['is_complited'] == '0';	
		}
		else {
			$todo['is_complited'] == '1';		
		}
		

		
		if( $this->DB->update($todo, $id) ) 
		{
			return header("Location: /todos");
		}
		else {
			echo 'failed';
		}
		
		
		
	}

	public function clearTodos()
	{
		$id = Route::$params['id'];
		$userId = Route::$params['userId'];

		if(Auth::User()['id'] == $userId || Auth::User()['id'] ==1)
		{
			if( $this->DB->delete($id) ) 
         	{
            	return header("Location: /todos");
         	}
         	else  
         	{
         		echo 'failed ';
        	}
		}

		else 
		{
			echo 'Un Authorized Access Cannot be granted for this Actions';
		}

	}


}