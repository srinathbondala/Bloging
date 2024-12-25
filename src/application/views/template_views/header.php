<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
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
            gap:5vw;
        }
        li{
            
        }
    </style>
</head>
<body>
<nav class="navbar sticky-top bg-body-tertiary header">
    <div class="container-fluid"> 
        <a class="navbar-brand" href="/"><h3>BLOGGING</h3></a>
        <div>
            <ul class="center options">
                <li><a href='http://localhost:8000/#contact'>Login</a></li>
                <li><a href='#'>Sign Up</a></li>
                <li><a href='#'>Help</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
