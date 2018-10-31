<?php

class categoriesModule extends appCtrl {

    public $DB;


    public function __construct()
    {

        $this->DB = new Database();
        $this->DB->table = 'categories';
    }


    public function buildCategories()
    {
        $this->DB->table = 'categories';
        $query = 'select distinct categories.id, categories.name from categories right join products on categories.id = products.category_id';
        $data['categories'] = $this->DB->rawSql($query)->returnData();

        return View::render('templates/shop-categories', $data);
    }

    public function brother()
    {
        echo 'hello brother';
    }


}