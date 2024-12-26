<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .left {
            background-color: #f8f9fa;
            padding: 20px;
            color: white;
            overflow: auto;
            height:95vh;
        }
        .right {
            background-color:#383896;
            padding: 20px;
            color: white;
            overflow: auto;
            height:95vh;
        }
        .right::-webkit-scrollbar, .left::-webkit-scrollbar {
            display: none;
        }
        
        form input, textarea, label{
            font-size: large !important;
        }

        p.truncated {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.5;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7 left">
                <!-- <img src="../../assets/back-icon-vector.jpg" alt="<" class="back_btn" onclick="history.back()"> -->
                <?php include_once APPPATH . 'views/utility_views/back.php'; ?>
                <div class="container mt-1 p-4 card">
                    <h2 class="mb-4" style="color:black; text-align:center;">Add a New Blog</h2>
                    <hr>
                    <form action="/add" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Blog Description</label>
                            <textarea class="form-control" id="description" name="description" rows="12" placeholder="Write a brief description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Blog Image</label>
                            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:100%; font-size: large !important;">Post Blog</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 right">
                <div class="container">
                    <h2>Explore Blogs</h2>
                    <div class="row">
                        <?php foreach ($blogs as $x) { ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-6 mb-4">
                                <div class="card" style="width: 100%;">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?echo htmlspecialchars($x['title']) ?></h5>
                                        <p class="card-text truncated"><?echo htmlspecialchars($x['content'])?></p>
                                        <a href="#" class="btn btn-primary">View Complete</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php echo "<script>console.log(" . json_encode($blogs) . ");</script>"; ?>
</body>
</html>
