<?php
class Category extends Database
{
    public function index()
    {
        $query = "SELECT * FROM categories";
        if (mysqli_query($this->connector, $query)) {
            $categories = mysqli_query($this->connector, $query);
            return $categories;
        }
    }
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

    public function edit($id)
    {
        $query = "SELECT * FROM categories WHERE id = $id";
        if (mysqli_query($this->connector, $query)) {
            $data = mysqli_query($this->connector, $query);
            $category = mysqli_fetch_assoc($data);
            return $category;
        }
    }

    public function update($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $description = $data['description'];

        $query = "UPDATE categories SET name='$name', description='$description' WHERE id=$id";
        if (mysqli_query($this->connector, $query)) {
            $message = "Category Updated Successfully!";
            return $message;
        } else {
            $message = "Category Not Updated";
            return $message;
        }
    }

    public function update_status($id, $status)
    {
        if ($status == 1) {
            $query = "UPDATE categories SET status=0 WHERE id = $id";
            mysqli_query($this->connector, $query);
        } else {
            $query = "UPDATE categories SET status=1 WHERE id = $id";
            mysqli_query($this->connector, $query);
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM categories WHERE id = $id";
        if (mysqli_query($this->connector, $query)) {
            $message = "Category Deleted Successfully!";
            return $message;
        } else {
            $message = "Category Not Deleted";
            return $message;
        }
    }
}
