<?php
class User_model extends MY_Model {
	var $table = 'users';
	var $id = 'id';

    function __construct()
    {
        parent::__construct();
    }
}