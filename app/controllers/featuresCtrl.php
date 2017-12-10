<?php
class featuresCtrl extends appCtrl{

    protected $DB;

    public function __construct()
    {
        $this->DB = new Database();
        $this->DB->table = 'features';
    }

    public function index()
	{

		$data = $this->DB->listAll()->returnData();
		view::responseJson($data, 200);

	}

	public function single()
	{

		$id = Route::$params['id'];
		if($data = $this->DB->getbyId($id)->returnData() )
		{
		    $statusCode = 200;
        }
        else {
		    $data['message'] = 'Cannot find data associated with Id ' . $id;
            $data['status'] = false;
            $data['type'] = 'error';
            $statusCode = 500;
        }

        return view::responseJson($data, $statusCode);

	}

	public function save()
	{

	    $keys = array('featureEN', 'featureAR');
	    $data = $this->DB->sanitize($keys);
        $data['status'] = 1;
        $data['user_id'] = 33;

	    if( $this->DB->insert($data) )
	    {
            $data['message'] = "New Features is added";
            $data['type'] = "success";
            $statusCode = 200;
        }
        else
            {
                $data['message'] = "Failed to insert data";
                $data['type'] = "failed";
                $statusCode = 500;
            }

	    return View::responseJson($data, $statusCode);

	}

	public function update()
	{
		$id = Route::$params['id'];
        $_POST = Route::$_PUT;

		if($this->DB->getbyId($id)->returnData())
		{
		    // valid record found with this id
            $keys = array_keys($_POST);

            $keys = $this->DB->sanitize($keys);
            if($this->DB->update($keys, $id))
            {
                // found and updated
                $data['message'] = "Feature Updated";
                $data['type'] = "success";
                $statusCode = 200;
            }

            else
                {
                    // found but not updated
                    $data['message'] = "Feature cannot be updated";
                    $data['type'] = "error";
                    $data['status'] = false;
                    $statusCode = 500;
                }
        }
        else
            {
                // record not found
                $data['message'] = "Feature Not found with id " . $id;
                $data['type'] = "error";
                $data['status'] = false;
                $statusCode = 500;
            }

        return view::responseJson($data, $statusCode);

	}

	public function delete()
	{
		$id = Route::$params['id'];
		if($this->DB->getbyId($id)->returnData())
		{
            if($this->DB->delete($id))
            {
                $statusCode = 200;
                $data['message'] = 'Record Successfully Removed From Database';
                $data['type'] = 'success';
                $data['status'] = true;
            }
            else{
                $statusCode = 503;
                $data['message'] = 'Service is unavailable at the moment please try later';
                $data['type'] = 'failed';
                $data['status'] = false;
            }

        }
        else {
		    $statusCode = 401;
		    $data['message'] = 'cannot find record with this id';
            $data['type'] = 'error';
            $data['status'] = false;
        }

        view::responseJson($data, $statusCode);

	}

}

