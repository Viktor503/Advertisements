<?php
class UserModel {
    //Define variables
    public $name;
    public $id;
    //Constructor based on request
    public function __construct($request) {
        $this->id = $request['id'];
        $this->name = $request['name'];
    }
    //Getters for variables
    public function getName() { return $this->name; }
    public function getId() { return $this->id; }
}