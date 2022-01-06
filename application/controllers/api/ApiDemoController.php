<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "libraries/RestController.php";
echo APPPATH . "libraries/RestController.php";

class ApiDemoController extends RestController
{
    public function index()
    {
    }
}
