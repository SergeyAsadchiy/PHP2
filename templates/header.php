<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
	
    	<title>Вывод товаров из массива</title>

    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    	
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/	X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="		sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="		sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

	</head>

	<body>
		<header>
			<div class="container" id = "header">
				<strong>header</strong>
<?php /*
    if (    empty(Auth::user()  ) ) 
    { 
        echo "<script>alert(\"Вы вошли на сайт, как гость.\");</script>"; 
    }
    else
    { 
        echo "<script>alert(\"Вы вошли на сайт как ".Auth::user()."\");</script>";
    }
*/?>
            <div class="messageOk">
                <?= splashMessage() ?>
            </div>
            <blockquote class="blockquote text-right"> Некая умная вещь. 
                <footer class="blockquote-footer">Стив Джобс!</footer> 
            </blockquote>﻿
                <p>hello</p>
			</div>	
		</header>
