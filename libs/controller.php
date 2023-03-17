<?php
class Controller
{
    public $context = [];
    public $template = '';
    function render()
    {
        $content = "";
        if (file_exists($this->template)) {
            extract($this->context);
            ob_start();
            include($this->template);
            $content = ob_get_clean();

        }
        return $content;
    }
    function set_context($vars)
    {
        $this->context = $vars;
    }
}