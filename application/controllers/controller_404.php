<?php
class Controller_404 extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}
?>

<!--
Сюда засунут дубликат контроллера главной, т.к. пока что в маршрутах все ошибочные страницы уводят на главную (header('Location:'.$host.'404');)
Можно было не запихивать, но тогда нужно удалить сам файл
*/-->