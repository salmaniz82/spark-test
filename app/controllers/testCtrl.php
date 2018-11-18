<?php

class testCtrl extends appCtrl
{
    public function checkInherit()
    {
        echo $this->appMethod();
    }

    public function createCourse()
    {
        if ($this->canManageCourse()) {
            echo 'creating course';
        } else {
            echo 'you cannot do this';
        }
    }

    public function udpateCourse()
    {
        if ($this->canManageCourse()) {
            echo 'update course';
        } else {
            echo 'you cannot do update this';
        }
    }

    public function module01($message)
    {

        //echo $message;
        echo 'I am moduluar and flexible . your message is ' . $message;

    }

    public function mapToModule01()
    {

        $message = Route::$params['message'];

        $this->module01($message);


    }


    public function testPaginate()
    {
        $perPage = Route::$params['perPage'];
        $currentPage = Route::$params['currentPage'];

        $db = new Database();
        $db->table = 'todos';

        // $data = $db->rawSql('SELECT * FROM todos LIMIT 10 OFFSET 10')->returnData();
        $data = $db->build('S')->Colums('id, todo')->Paginate($perPage, $currentPage)->go()->returnData();
        var_dump($data);
    }


    public function treeCheck()
    {

        $db = new Database();
        $db->table = 'categories';

        $data['categories'] = $db->listall()->returnData();

        function has_children($rows, $id)
        {
            foreach ($rows as $row) {
                if ($row['parent_id'] == $id)
                    return true;
            }
            return false;
        }

    }


    public function buildMenu()
    {

        echo 'Building menu';
    }


    public function testModuleLoad()
    {

        $testModule = $this->load('module', 'test');
        echo $testModule->add(2, 3);

    }

    public function showPage()
    {
        $categoryModule = $this->load('module', 'categories');

        $data['module'] = $categoryModule;

        View::render('module', $categoryModule);


    }


    public function votest()
    {


        $data['title'] = 'helloword';
        $template = new Template();
        $data['rows'] = ['apple', 'orange', 'mango'];
        $template->layout('default-tpl.php')->compile('test.php', $data);

    }


    public function imageWork()
    {


        $imageTransformer = new ImageTransformer();

        // make sure the path start from the base root directory by leaving the root itself

        if (!$imageTransformer->loadImage('/assets/images/screenshot.png')) {

            echo "cannot continue further";
            exit();

        } else {

            $imageTransformer->prepareDimension(300, "auto");

            $args = [

                'location'=> '/images/slides/',
                'filename'=> 'mydisiredname',
                'quality'=> 75

            ];

            $imageTransformer->reproduceSaveImage($args);

        }


    }


}