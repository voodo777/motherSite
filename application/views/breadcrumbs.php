<?php

if ($controller_name != 'Main')
{

    if ( $action_name != 'index')
    {
        echo('<a href="/">Главная</a> > <a href=/'.$routes[1].'>'.$controller_name.'</a> > '.$action_name);
    }
    else {echo('<a href="/">Главная</a> > '.$controller_name);}
}