<?php
include_once("libs/controller.php");
class FormsController extends Controller
{
    public $template = "apps/auth/templates/forms_tpl.php";


    function __construct()
    {
        $this->set_context(["a" => "hello"]);
    }
    public function index()
    {

    }
}