<?php
include_once 'helpers/requires.php';
require_once 'API.class.php';

class PostsApp extends API
{
    public function __construct($request, $origin)
    {
        parent::__construct($request);
    }

    protected function posts($values)
    {
        if ($this->method == "GET") {
            return Posts::get();
        }
        elseif ($this->method == "POST") {
            if ($this->verb == "") {
                return Posts::add($values);
            }
            elseif ($this->method == "update") {
                return Posts::update($values);
            }
        }
        elseif ($this->method == "DELETE") {
            return Posts::remove($values);
        }
    }
}