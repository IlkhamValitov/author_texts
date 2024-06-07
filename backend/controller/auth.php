<?php
   /* Модуль для работы с поисковыми запросами */
   $search_query = $_POST['query']; //Текст поискового запроса
   if($search_query != '') {
      require "model/connect.php";
      $result = $mysql -> query("SELECT * FROM `articles` WHERE `name` = '$search_query' ");
      echo 'результат' . $result; 
   }
   
   /* Модуль авторизации (для администратора) */ 
   if(@$_COOKIE['admin']) { //Ошибки не будут отображены, так как прописан соответствующий символ в начале выражения 
      setcookie('admin', $preset_admin_login, time() - 3600, "/"); //Удаление cookie, при нажатии кнопки выхода
      header('Location: ../../'); 
      exit(); //Выход из скрипта
   }
   $preset_admin_login = "spasehunter"; //Предустановленные данные администратора
   $preset_admin_pass = "hunterspase90";
   $received_admin_login = $_POST['login']; //Полученные данные администратора
   $received_admin_pass = $_POST['pass']; 
   //Сравнение полученных данных авторизации с предустановленными (для администратора)
   if($received_admin_login == $preset_admin_login and $received_admin_pass == $preset_admin_pass) {
      setcookie('admin', $preset_admin_login, time() + 3600, "/"); //Создание cookie, для хранения логина администротора
      if($_COOKIE['auth_err']) setcookie('auth_err', $err, time() - 30, "/"); //Удаление ранее созданного cookie-фойла для ошибки
      header('Location: ../../'); //Редирект на главную страницу, при успешной авторизации
      
   }
   else {
      $err = "Неверный логин или пароль"; //Текст ошибки
      setcookie('auth_err', $err, time() + 30, "/"); //Cookie-фойл для ошибки
      header('Location: ../../');
   }
   /**/ 

