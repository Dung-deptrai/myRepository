<?php

// namespace App\Controllers;

// use CI_Controller;
// use CodeIgniter\RESTful\ResourceController;

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method:POST');
    }

    public function checkLogin()
    {
        $this->load->model("project/project_model");
        $arrayGetHTTP = $_POST;
        $result = $this->project_model->loginUser($arrayGetHTTP);
        header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow-Method,Authorization,X-Request-Width');
        // echo (json_encode($arrayGetHTTP));
        $data['result'] = json_encode($result);
        $this->load->view("project/checkLogin", $data);
    }
    public function readMedicine()
    {
        $this->load->model("project/project_model");
        $arrayGetHTTP = $_GET;
        $result = $this->project_model->listMedicine($arrayGetHTTP);
        $data['result'] = json_encode($result);
        $this->load->view("project/read_medicine", $data);
    }
}
