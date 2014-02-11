<?php
class Controller_Greencard extends Controller
{
    function __construct()
    {
        $this->model = new Model_Greencard();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('greencard_view.php', 'template_view.php', $data);
    }
}
