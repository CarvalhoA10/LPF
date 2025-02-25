<?php

require './src/app/Model.php';

class UserModel extends Model{

    public function __construct()
    {
        $this->new_database("User")
        ->primary_key("id")
        ->string("username", 30)->unique()->nullable()
        ->string("email", 150)->unique()->nullable()
        ->string("password", 150)
        ->number("is_active")
        ->number("is_admin")
        ->number("is_staff")
        ->date_time("registred_at")
        ->date_time("updated_at");
    }


}