<?php
$site = "localhost";
$user = "";// логин
$pass = ""; // пароль
$bd_name = ""; // имя базы данных

//Пытаемся установить соединение

$link=mysql_connect($site,$user,$pass);
if(!$link)
{
     echo "Ne mogu podkluchitsa!";
     echo "<br>";
     echo mysql_error();
     exit();
}
//Пытаемся открыть базу данных
$bd_use=mysql_select_db($bd_name);
if(!$bd_use)
{
     echo "MySql Работает\n";
     echo "<br>";
     echo "База данных не существует - ";
     echo mysql_error();
     exit();
};

?>

<script language="JavaScript1.2"> 
function disableselect(e){ 
return false 
} 
function reEnable(){ 
return true 
} 
//if IE4+ 
document.onselectstart=new Function ("return false") 
//if NS6 
if (window.sidebar){ 
document.onmousedown=disableselect 
document.onclick=reEnable 
} 
</script>
    
    <script language=JavaScript>
        document.oncontextmenu=new Function("return false;")
    </script>