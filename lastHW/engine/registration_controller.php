<?php
$registrationError = "";

if (is_null($_POST["Login"]) || is_null($_POST["Email"]) || is_null($_POST["passFirst"]) || is_null($_POST["passSecond"]) ) 
{
    $registrationError = 'Пожалуйста, заполните всё поля!';    
} 
elseif (sizeof(getUserByNameOrEmail($_POST["Login"], $_POST["Email"]))) 
{
    $registrationError = 'Пользователь с таким логином или паролем уже существует!';
} 
elseif (is_null($_POST["passFirst"])) 
{
    $registrationError = "Пароль не задан";
} 
elseif ($_POST["passFirst"] != $_POST["passSecond"])
{
    $registrationError = "Пароли отличаются, а должны совпадать!";
} 
else
{
    createUser($_POST["Login"], $_POST["Email"], password_hash($_POST["passFirst"], PASSWORD_DEFAULT)); 
    header('location: /lastHW/login.php');
}
