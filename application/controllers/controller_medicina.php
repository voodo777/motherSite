<?php
class Controller_Medicina extends Controller
{
    function action_index()
    {
        $this->view->generate('medicina_view.php', 'template_view.php');
    }
    function action_zhizn()
    {
        $this->view->generate('zhizn_view.php', 'template_view.php');
    }
    function action_dms()
    {
        $this->view->generate('dms_view.php', 'template_view.php');
    }
    function action_travma()
    {
        $this->view->generate('travma_view.php', 'template_view.php');
    }
}