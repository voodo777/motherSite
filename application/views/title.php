<?php
$title = "Ваш персональный страховой агент";
if ($controller_name != 'Main')
{
    if ( $action_name != 'index')
    {
        $title = $action_name .' | '. $controller_name;
    }
    else {$title = $controller_name .' | Ваш страховой агент';}
}
echo($title);