<!DOCTYPE html>
<html>
<head>
    <title>Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
    div{
        margin: 10px;
    }

</style>
</head>
<body>
    <div>
        <h1>Cabeçalho</h1>
        @section('conteudo')
        <table border="1px">
            <caption>Usuarios</caption>
                <tr>
                    <th>{{@$a}}</th>
                </tr>
                <tr>
                    <th>{{@$b}}</th>
                </tr>
                <tr>
                    <th>{{@$c}}</th>
                </tr>
                <tr>
                    <th>{{@$d}}</th>
                </tr>
        </table>
        @show
      <h1>Rodapé</h1>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>