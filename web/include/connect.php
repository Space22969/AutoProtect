<?php
    
    $db = mysql_connect("localhost","dyomki8n_work","123456", "dyomki8n_work");
    if(!$db)
    {
        echo "Возникла ошибка подключения! Обратитесь к администратору сайта!";
        exit();
    }
    
    $bd = mysql_select_db("dyomki8n_work", $db);
    if(!$bd)
    {
        echo "Возникла ошибка подключения базы данных! Обратитесь к администратору сайта!";
        exit();
    }
    
    session_start();

    // Вывод заголовка с данными о кодировке страницы
    //header('Content-Type: text/html; charset=utf-8');
    // Настройка локали
    //setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
    // Настройка подключения к базе данных
    mysql_query("SET NAMES 'utf8'"); 
    mysql_query("SET CHARACTER SET 'utf8'");
    mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
    
    ///Email на которые будут приходить оповещения при оплате заказв от клиена
    //$push_mail = "Tradeparfum@yandex.ru";
    $push_mail = "";
?>