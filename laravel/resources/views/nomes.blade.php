<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'ARIAL', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
      <?php
      echo "<table border='1' align='center'>
        <tr><th colspan='2'>EXIBINDO OS NOMES PELA VIEW</th></tr>
        <tr><th>Valor 1</th><td>{$a1}</td></tr>
        <tr><th>Valor 2</th><td>{$a2}</td></tr>
        
      </table>";

        $total = $a1 + $a2;
 
      echo "
        <HR>


      <table border='1' align='center'>
        <tr><th colspan='2'>SOMA DE DOIS NUMEROS PELA VIEW</th></tr>
        <tr><th>Valor 1</th><td>{$a1}</td></tr>
        <tr><th>Valor 2</th><td>{$a2}</td></tr>
        <tr><th>TOTAL</th><td>{$total}</td></tr>
      </table>";
      ?>
    </body>
</html>
