<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Example_model extends CI_Model
{
    private $name = 'Bob';

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
    public function getName()
    {
        return $this->name;
    }
    public function getStudents()
    {
        return $this->students;
    }

}