<?php

    class Title
    {
        function select ()
        {
            $controller_name = 'Main';
            $action_name = 'index';
            $title = "Ваш персональный страховой агент";
            $routes = explode('/', $_SERVER['REQUEST_URI']);

            if ( !empty($routes[1]) )
            {
                $controller_name = $routes[1];
                switch ($routes[1])
                {
                    case 'avtostrahovanie':
                        $controller_name = 'Автострахование';
                        break;
                    case 'medicina':
                        $controller_name = 'Медицина';
                        break;
                    case 'imushestvo':
                        $controller_name = 'Имущество';
                        break;
                    case 'puteshestviya':
                        $controller_name = 'Путешествия';
                        break;
                    case 'drugie':
                        $controller_name = 'Другие виды страхования';
                        break;
                    case 'dlyabiznesa':
                        $controller_name = 'Для бизнеса';
                        break;
                }
                if ( !empty($routes[2]) )
                {
                    switch ($routes[2])
                    {
                        case 'kasko':
                            $action_name = 'КАСКО';
                            break;
                        case 'osago':
                            $action_name = 'ОСАГО';
                            break;
                        case 'dgo':
                            $action_name = 'ДГО';
                            break;
                        case 'greencard':
                            $action_name = 'Зелёная карта';
                            break;
                    }
                    $title = $action_name .' | '. $controller_name;
                }
                else {$title = $controller_name .' | Ваш страховой агент';}
            }

            echo($title);
        }
    }
