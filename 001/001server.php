<?php 
echo $_SERVER["PHP_SELF"]."<br>"; // /UD3_DWES_ProgramacionWeb/001/001server.php
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; //Apache/2.4.52 (Win64) OpenSSL/1.1.1m PHP/8.1.1
echo $_SERVER["SERVER_NAME"]."<br>"; //localhost
echo $_SERVER["REQUEST_METHOD"]."<br>"; //GET
echo $_SERVER["REQUEST_URI"]."<br>"; //UD3_DWES_ProgramacionWeb/001/001server.php
echo $_SERVER["QUERY_STRING"]."<br>"; //parametro=parametroPrueba
echo $_SERVER["HTTP_USER_AGENT"]."<br>"; 
//Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36
?>

<?php
// $par = $_GET["parametro"] ;


//La diferencia entre pasar un parametro por GET o no, será el valor de QUERY_STRING.
//Este muestra todo lo que va despues del ?
//En el caso de no pasar ningun parámetro, nos saltará un error



//Tras el envio por POST en 001formulario.html vemos que el valor REQUEST_METHOD cambia a POST
//En cuanto al valor de QUERY_STRING, vemos que no se muestra(no existe)



echo $_SERVER["HTTP_REFERER"]."<br>"; //http://localhost/UD3_DWES_ProgramacionWeb/001/001formulario.html
//No es necesario crear otra página. Desde aquí puedo ver que la página desde la que se hizo la petición es 001formulario.html


