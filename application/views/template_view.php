<!DOCTYPE HTML>
<html>
<head>
    <title><?php include 'title.php'; Title::select(); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://vk.com/js/api/openapi.js?105"></script>
</head>
<body>
    <div>
        <!--Шапка-->
        <header>
            <span>Работаю для Вас без выходных и праздничных дней.</span>
            <div id="headtext">
                <p>Ваш персональный страховой агент</p>
                <p id="name">Иванова Елена</p>
            </div>
            <div>
                <img src="/images/tel2.png">
                <span>+7(812)950 30 90</span>
            </div>
            <div>
                <img src="/images/tel1.png">
                <span>+7(911)767 00 17</span>
            </div>
            <div>
                <img src="/images/mail.png">
                <a href="mailto:ivanova-elev@yandex.ru">ivanova-elev@yandex.ru</a>
            </div>
        </header>
        <nav>
            <ul class="menu">
                <li><a id="firstli" href="/">Главная</a>
                <li><a href="/avtostrahovanie">Автострахование</a>
                    <ul>
                        <li><a href="/avtostrahovanie/kasko">КАСКО</a></li>
                        <li><a href="/avtostrahovanie/osago">ОСАГО</a></li>
                        <li><a href="/avtostrahovanie/dgo">ДГО</a></li>
                        <li><a href="/avtostrahovanie/greencard">Зелёная карта</a></li>
                    </ul>
                </li>
                <li><span>Медицина</span>
                    <ul>
                        <li><a href="">Страхование жизни</a></li>
                        <li><a href="">ДМС</a></li>
                        <li><a href="">Несчастный случай</a></li>
                    </ul>
                </li>
                <li><span>Имущество</span>
                    <ul>
                        <li><a href="">Квартира</a></li>
                        <li><a href="">Дом</a></li>
                        <li><a href="">Ипотека</a></li>

                    </ul>
                </li>
                <li><span href="">Путешествия</span>
                    <ul>
                        <li><a href="">Страхование туристов</a></li>
                        <li><a href="">Зелёная карта</a></li>
                    </ul>
                </li>
                <li><span href="">Другие виды</span>
                    <ul>
                        <li><a href="">Пенсионное страхование</a></li>
                        <li><a href="">Животные</a></li>
                        <li><a href="">Яхты, катера</a></li>
                    </ul>
                <li><span id="lastli" href="">Для бизнеса</span>
                    <ul>
                        <li><a href="">Страхование строительно-монтажных работ</a></li>
                        <li><a href="">Страхование гражданской ответственности при СМР</a></li>
                        <li><a href="">Страхование грузов, строительной техники,
                                имущества юридических лиц,
                                железнодорожного транспорта,
                                товаров и оборудования.</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

     <!--   <?php
        var_dump($data);
        echo $_SERVER['REQUEST_URI'];
        ?>-->

        <main>
            <?php include 'application/views/'.$content_view; ?>
        </main>

        <div id="rightBlocks">
            <div>
                <a href="https://docs.google.com/forms/d/1-6vJyw_fp1D6xNp-4HPjmz_6jbqlU6ydq6UdMQXeffM/viewform" target="_blank">Заказать страховой полис</a>
            </div>
            <div>
                <img id="reso" src="/images/reso_logo.png">
            </div>
            <div id="vk_groups"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 2, width: "274", height: "600", color2: "000000", color3: "036734"}, 60163871);
            </script>
        </div>

        <div class="clear"></div>

        <!--Подвал-->
        <div id="cellar">
            <!-- Yandex.Metrika informer -->
            <a href="http://metrika.yandex.ru/stat/?id=23752144&amp;from=informer"
               target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23752144/3_0_FFFFF7FF_E5F5D7FF_0_pageviews"
                                                   style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23752144,lang:'ru'});return false}catch(e){}"/></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter23752144 = new Ya.Metrika({id:23752144,
                                webvisor:true,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true});
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript><div><img src="//mc.yandex.ru/watch/23752144" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
            <span>Данный сайт носит исключительно информационный характер и не является публичной офертой, ст. 437 ГК РФ.</span>
            <br>
            <span>Copyright © <a href="http://vk.com/id106175502" target="_blank">Иванов Е.С.</a> 2014 год. Все права защищены.</span>
        </div>
    </div>
</body>
</html>