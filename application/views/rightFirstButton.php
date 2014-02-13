<?php
    function select ()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if ( empty($routes[1]) and empty($routes[2]))
        {
            echo('<div>
                <a href="https://docs.google.com/forms/d/1-6vJyw_fp1D6xNp-4HPjmz_6jbqlU6ydq6UdMQXeffM/viewform" target="_blank">Заказать страховой полис</a>
            </div>');
        }
        elseif (!empty($routes[2]))
        {
            switch ($routes[2])
            {
                case 'greencard':
                    echo('<div>
                        <a href="https://docs.google.com/forms/d/13n-Ol8j6x-tzLR1iSUEWCtaC9SBi5N2hGzW06WoVCE4/viewform" target="_blank">Заказ полиса GreenCard</a>
                    </div>');
                    break;
                case 'osago':
                    echo('<div>
                        <a href="https://docs.google.com/forms/d/1CL5jcSaWNGWYwmDFG1tt8tUjCVCVsgrsHlA8gBjDPO4/viewform" target="_blank">Заказ расчета ОСАГО</a>
                    </div>');
                    break;
                case 'kasko':
                    echo('<div>
                        <a href="https://docs.google.com/forms/d/11UWul1iuqGXMw0qAQ4SlYoUR9g9op6LrOiIdkZro1GQ/viewform" target="_blank">Заказ расчета КАСКО</a>
                    </div>');
                    break;
            }
        }
    }

