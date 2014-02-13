<?php
class Controller_Avtostrahovanie extends Controller
{
    function action_index()
    {
        $this->view->generate('avtostrahovanie_view.php', 'template_view.php');
    }
    function action_kasko()
    {
        $this->view->generate('kasko_view.php', 'template_view.php');
    }
    function action_osago()
    {
        $this->view->generate('osago_view.php', 'template_view.php');
    }
    function action_dgo()
    {
        $this->view->generate('dgo_view.php', 'template_view.php');
    }
    function action_greencard()
    {
        $this->view->generate('greencard_view.php', 'template_view.php');
    }
}
