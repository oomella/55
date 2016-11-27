<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 10:22
 */
class Category_model extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('categories');
        //SELECT * FROM categories
    }
    public function insertCategory($name)
    {
        //INSERT INTO category (name) VALUES ($name);
        $data = array(
            'name' => $name
        );
        $this->db->insert('categories', $data);
    }
}