<?php
include_once("libs/controller.php");
class AuthController extends Controller
{
    public $template = "apps/auth/templates/login_tpl.php";


    function __construct()
    {
        $this->set_context(["a" => "hello"]);
    }
    public function index()
    {

    }
}