<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blogging</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .center{
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .header{
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        .options{
            justify-content:space-around !important;
            padding:1vw;
            list-style-type: none;
            gap:2vw;
        }
        .options a:link,.options a:visited {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 8px;
        }

        .options a:hover, .options a:active {
            background-color: red;
        }
    </style>
</head>
<body>
<nav class="navbar sticky-top bg-body-tertiary header">
    <div class="container-fluid"> 
        <a class="navbar-brand" href="/"><h3>BLOGGING</h3></a>
        <div>
            <ul class="center options">
                <?php if(!is_logged_in()){?>
                    <li><a href='/login'>Login</a></li>
                    <li><a href='/signup'>Sign Up</a></li>
                <?}else{?>
                    <li><a href='/logout'>Logout</a></li>
                <?}?>
                <li><a href='/about'>About</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
