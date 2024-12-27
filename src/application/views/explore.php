<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blogging</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<style>
        .left{
            background-color: #f8f9fa;
            color: black;
            overflow: auto;
            max-height:95vh;
        }
        .right {
            background-color:#383896;
        }

        .div-pad{
            padding: 10px;
        }

        .topics-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
        .topic-item {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.5rem;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            text-transform: capitalize;
            transition: transform 0.3s, background-color 0.3s;
        }
        .topic-item:hover {
            transform: scale(1.05);
            background-color: #e9ecef;
        }
        .topic-item a {
            text-decoration: none;
            color: #212529;
        }
        .trending-div{
            padding: 1rem 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 left">
                <div class="container div-pad">
                    <h5>Explore Latest Blogs</h5>
                    <? for($i=0;$i<5;$i++){?>
                        <div class='card'>
                            <p>name and email</p><p>date</p>
                            <h5>title</h5>
                            <p>content</p>
                            <p>topic</p>
                            <button>view more</button>
                        </div>
                    <?}?>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 right">
                <div class="container div-pad">
                    <h5>Stories from all interest</h5>
                    <div class="topics-grid">
                        <?php
                        $topics = ["topic1", "topic2", "topic3", "topic4", "topic5", "topic6", "topic7", "topic8", "topic9"];
                        foreach ($topics as $topic) {
                            echo '<div class="topic-item">
                                    <a href="topic/' . urlencode($topic) . '">' . htmlspecialchars($topic) . '</a>
                                </div>';
                        }
                        ?>
                    </div>
                    <div class="trending-div">
                        <h5>Trending </h5>
                        <hr>
                        <div class="card-container" style="display:flex; flex-direction:column;gap: 5px;">
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <div class="card">
                                    <p>Name and Email</p>
                                    <p>Date</p>
                                    <h5>Title</h5>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>