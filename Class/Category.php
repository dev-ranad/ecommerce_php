<?php
include("helper/Validation.php");
class Category extends Database
{
    public function create($data)
    {
        $validator = new Validation();
        $validation_rules = [
            'name' => 'required',
        ];
        $message = $validator->validate($data, $validation_rules);
        if ($message != '') {
            return $message;
        }
        
        if (!$message) {
            $name = $data['name'];
            $description = $data['description'];
            $status = $data['status'];

            $query = "INSERT INTO categories (name, description, status) VALUE ('$name','$description','$status')";
            if (mysqli_query($this->connector, $query)) {
                $message = "Category Added Successfully!";
                return $message;
            } else {
                $message = "Category Not Added";
                return $message;
            }
        }
    }
}
