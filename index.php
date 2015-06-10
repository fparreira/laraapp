<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Blog Laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php

$posts = array();
$posts[] = array('id'=>1, 'titulo'=>'Post numero 1', 'texto'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sollicitudin libero at eleifend sodales. Phasellus pulvinar nibh ac turpis aliquet, quis commodo felis porta. Nullam dictum leo eu mauris posuere laoreet. Sed vestibulum neque vel lacus lacinia, sed dignissim arcu condimentum.', 'data'=>'04/03/2015');
$posts[] = array('id'=>2, 'titulo'=>'Segundo post de teste', 'texto'=>'Pellentesque pulvinar nulla eget massa scelerisque condimentum. Donec nec nisi vitae urna viverra auctor mattis in neque. Curabitur dapibus auctor ligula nec semper. Integer sed nunc non dolor mattis pharetra. Vestibulum rhoncus tristique ipsum quis efficitur.', 'data'=>'16/04/2015');
$posts[] = array('id'=>3, 'titulo'=>'Titulo do terceiro post', 'texto'=>'Proin convallis arcu vel elit bibendum accumsan. Quisque eget felis non magna hendrerit sodales scelerisque eget velit.', 'data'=>'02/05/2015');

?>


<div class="jumbotron">
    <div class="container">
        <h1>Blog Laravel</h1>
        <p>Blog para estudo do PHP Laravel</p>
    </div>
</div>

<div class="container">

    <div class="col-md-9">

        <?php

        foreach($posts as $p){

            echo "<h2><a href='post_id=".$p['id']."'>".$p['titulo']."</a></h2>";
            echo "<small>".$p['data']."</small>";
            echo "<p>".$p['texto']."</p>";

        }

        ?>
        
    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
        <h4>Admin:</h4>

        <form class="form-signin">
            <input type="email" id="email" class="form-control" placeholder="Email" required autofocus>
            <input type="password" id="senha" class="form-control" placeholder="Senha" required>
            <button class="btn btn-default" type="submit">Entrar</button>
        </form>

    </div>

    <hr>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
