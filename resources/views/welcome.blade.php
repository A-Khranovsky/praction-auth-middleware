<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<?php

?>
<form method='post' action="/auth/name">
    @csrf
    Enter your name:<br /><br />
    <input type="text" name="your_name" />
    <br /><br />
    <input type='submit' value='Send'>
</form>
</body>
</html>
