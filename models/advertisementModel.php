<?php
class advertisementModel {
    //Define variables
    public $id;
    public $title;
    public $username;
    //Constructor based on request
    public function __construct($request) {
        $this->id = $request['id'];
        $this->title = $request['title'];
        $this->username = $request['username'];
    }
    //Getters for variables
    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getUsername() { return $this->username; }
}