<?php

Class SubCategory extends Database
{
    public function categories() 
    {
        $query = "SELECT * FROM categories";
        if (mysqli_query($this->connector, $query)) {
            $categories = mysqli_query($this->connector, $query);
            return $categories;
        }
    }

    public function index()
    {
        $query = "SELECT * FROM sub_categories";
        if(mysqli_query($this->connector, $query)) {
            $sub_categories = mysqli_query($this->connector, $query);
            return $sub_categories;
        }
    }

    public function create($data)
    {
        $validator = new Validation();
        $validation_rules = [
            'category_id' => 'required',
            'name' => 'required'
        ];
        $message = $validator->validate($data, $validation_rules);
        if($message != '') {
            return $message;
        }

        if(!$message) {
            $category_id = $data['name'];
            $name = $data['name'];
        }
    }
}