<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<?php

?>
@if(!isset($your_name))
<form method='post' action="/auth/name">
    @csrf
    Enter your name:<br /><br />
    <input type="text" name="your_name" />
    <br /><br />
    <input type='submit' value='Send'>
</form>
@else
    Hello, {{$your_name}} <br />
    <a href="/"> Home </a>
@endif
</body>
</html>
