<?php
class Controller_Osago extends Controller
{
    function __construct()
    {
        $this->model = new Model_Osago();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('osago_view.php', 'template_view.php', $data);
    }
}
