<?php
class Controller_Puteshestviya extends Controller
{
    function action_index()
    {
        $this->view->generate('puteshestviya_view.php', 'template_view.php');
    }
    function action_turist()
    {
        $this->view->generate('turist_view.php', 'template_view.php');
    }
    function action_greencards()
    {
        $this->view->generate('greencards_view.php', 'template_view.php');
    }
}