<?php
    session_start();
    if (isset($_POST["click"])){
      $name = htmlspecialchars ($_POST["name"]);
      $surname = htmlspecialchars ($_POST["surname"]);
      $_SESSION["name"] = $name;
      $_SESSION["surname"] = $surname;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Тестовая страница</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    window.onload = function (){

      if(localStorage.getItem('colorform') !== null) {
        var colorform = localStorage.getItem('colorform');
        document.getElementById('form').style.color = colorform;
      }
      if(localStorage.getItem('bgcolor') !== null) {
        var bgcolor = localStorage.getItem('bgcolor');
        document.getElementById('form').style.background = bgcolor;
      }

      document.getElementById('dark').onclick = function (){
        var bgcolor = document.getElementById('form')
        var colorform = document.getElementById('form')
        colorform.style.color = 'white';
        bgcolor.style.background = 'red';
        localStorage.setItem('colorform', colorform.style.color);
        localStorage.setItem('bgcolor', bgcolor.style.background);
  }
      document.getElementById('light').onclick = function (){
        var bgcolor = document.getElementById('form')
        var colorform = document.getElementById('form')
        colorform.style.color = 'black';
        bgcolor.style.background = 'yellow';
        localStorage.setItem('colorform', colorform.style.color);
        localStorage.setItem('bgcolor', bgcolor.style.background);
}
  }
  </script>
  <style>

  </style>
</head>
<body id="form">
  <form method="post">
    <p><b>Ваше имя:</b><br>
   <input name="name" type="text" size="40" value="<?=$_SESSION["name"]?>">
  </p>
  <p><b>Ваша фамилия:</b><br>
 <input name="surname" type="text" size="40" value="<?=$_SESSION["surname"]?>">
</p>
  <button name="click" id="light">День</button>
  <button name="click" id="dark">Ночь</button>
  </form>
</body>
</html>
