<?php
class Controller_Dgo extends Controller
{
    function __construct()
    {
        $this->model = new Model_Dgo();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('dgo_view.php', 'template_view.php', $data);
    }
}
