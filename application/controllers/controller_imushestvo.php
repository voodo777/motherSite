<?php
class Controller_Imushestvo extends Controller
{
    function action_index()
    {
        $this->view->generate('imushestvo_view.php', 'template_view.php');
    }
    function action_kvartira()
    {
        $this->view->generate('kvartira_view.php', 'template_view.php');
    }
    function action_dom()
    {
        $this->view->generate('dom_view.php', 'template_view.php');
    }
    function action_ipoteka()
    {
        $this->view->generate('ipoteka_view.php', 'template_view.php');
    }

}
