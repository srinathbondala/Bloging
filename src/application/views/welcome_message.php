<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blogging</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<style>
		.carousel-inner img {
			height: 80vh;
			object-fit: cover;
		}
		.center{
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.main-heading{
			text-align: center;
			font-size: 4rem;
			font-weight: bolder;
		}
        .hero {
            background-color: #f8f9fa;
            text-align: center;
			width:100%;
        }

        .cta-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .about-blog {
            padding: 50px 0;
            text-align: center;
        }

        .about-blog h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .about-blog p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .featured-posts {
            background-color: #f1f1f1;
            padding: 50px 0;
        }

        .featured-posts .post {
            text-align: center;
            margin-bottom: 30px;
        }

        .featured-posts .post h3 {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .subscribe {
            background-color: #007bff;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .subscribe h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .subscribe input[type="email"] {
            padding: 10px;
            width: 300px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .subscribe button {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
        }

        .testimonial {
            padding: 50px 0;
            text-align: center;
        }

        .testimonial blockquote {
            font-size: 1.2rem;
            color: #6c757d;
            margin: 0;
        }

		.item-align{
			margin-top:20px;
		}

		.center{
			display: flex;
			align-items: center;
			justify-content:space-around;
		}

		.custom-card:hover {
			box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
			cursor: pointer;
		}

		.custom-card {
			height: 100%;
			display: flex;
			flex-direction: column;
			transition: box-shadow 0.3s ease;
		}

		.card-body {
			flex-grow: 1;
			overflow: hidden;
		}

		.card-text {
			overflow: hidden;
			text-overflow: ellipsis;
		}

		@media (max-width: 767px) {
			.card-custom {
				width: 100%;
			}
		}

    </style>

</head>
<body>
<div class="container-fluid">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
	<div class="carousel-item active">
		<img src="https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2021/09/how-to-write-a-blog-post.png" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
			<h5>First Slide</h5>
			<p>Some representative placeholder content.</p>
		</div>
		</div>
		<div class="carousel-item">
		<img src="https://bloggerspassion.com/wp-content/uploads/2019/12/blog-submission-sites-list.webp" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
			<h5>Second Slide</h5>
			<p>Some representative placeholder content.</p>
		</div>
		</div>
		<div class="carousel-item">
		<img src="https://www.blogtyrant.com/wp-content/uploads/2019/07/draft-a-post.jpg" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
			<h5>Third Slide</h5>
			<p>Some representative placeholder content.</p>
		</div>
		</div>
	</div>

	<!-- Navigation Controls -->
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
	</div>

	</div>
	<div class="container center" style="padding: 10px;">
		<section class="hero">
			<div class="container">
				<div style="margin-top:4vh;">
					<h1 class="main-heading">
						<span>Create a Exciting blog</span><br>
						<span>worth sharing</span>
					</h1>
					<p style="text-align:center; font-size:1.2rem; margin-top:2vh;">Transform your ideas into a stunning blog with user-friendly design elements and</br> powerful tools to attract, engage, and retain your audience.</p>
					<div class="row item-align">
						<div class="col-md-4 post center">
							<div class="card custom-card" style="width: 22rem;">
								<img src="https://cdn.wegic.ai/cms/seo/img/what-is-a-blog/29AB4FA6.webp?format=webp&args=pr:sharp/q:60" class="card-img-top" alt="Create Your Blog">
								<div class="card-body">
									<h5 class="card-title">Create Your Blog</h5>
									<p class="card-text">Learn how to start your own blog, from setting up to launching with easy-to-follow guides.</p>
									<a href="/dashboard" class="btn btn-primary">Start Creating</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 post center">
							<div class="card custom-card" style="width: 22rem;">
								<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTurr8wxTJMSg-oMKStXb77WU2cjNJxjeJh0w&s" class="card-img-top" alt="Explore Ideas">
								<div class="card-body">
									<h5 class="card-title">Explore New Ideas</h5>
									<p class="card-text">Find fresh blog topics and tips for engaging content that resonates with your audience.</p>
									<a href="/explore" class="btn btn-primary">Explore Ideas</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 post center">
							<div class="card custom-card" style="width: 22rem;">
								<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQao79FnoZunvjPy-p20X2Dwc0M87HKTsLZA&s" class="card-img-top" alt="Blog Tips">
								<div class="card-body">
									<h5 class="card-title">Blogging Tips</h5>
									<p class="card-text">Learn the best practices and tips to grow your blog, increase traffic, and build a loyal audience.</p>
									<a href="#" class="btn btn-primary">Read Tips</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<!-- About Blog Section -->
<section class="about-blog">
	<div class="container">
		<h2>Welcome to Blogging</h2>
		<p>Your go-to resource for tips on blogging, content creation, and digital marketing.</p>
		<a href="/about" class="cta-button">Learn More About Us</a>
	</div>
</section>

<!-- Featured Posts Section -->
<section class="featured-posts">
	<div class="container">
		<h2 class="text-center">Trending Blogs</h2>
		<div class="row" style="margin-top: 15px;">
			<div class="col-md-4 post">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjno2FnNIRUF9F4TcPBBOHb1T8ud7YuqiWXQ&s" class="img-fluid" alt="Post 1">
				<h3><a href="/post-url">How to Start a Blog in 2024</a></h3>
				<p>A complete guide to creating a successful blog from scratch.</p>
			</div>
			<div class="col-md-4 post">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKo1NeSbAWIUI3VZgz_GXgQDhAqc0_1g0eTw&s" class="img-fluid" alt="Post 2">
				<h3><a href="/post-url">SEO Tips for Beginners</a></h3>
				<p>Learn how to optimize your blog for better search engine rankings.</p>
			</div>
			<div class="col-md-4 post">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCmp8E2mrZYWhwfBrha7elCw_Rw91KhaRhEA&s" class="img-fluid" alt="Post 3">
				<h3><a href="/post-url">5 Common Blogging Mistakes</a></h3>
				<p>Discover the most common mistakes bloggers make and how to avoid them.</p>
			</div>
		</div>
		<div class="center">
			<button type="button" class="btn btn-primary" style="padding:8px 8%">View More</button>
		</div>
	</div>
</section>

<!-- Testimonial Section -->
<section class="testimonial">
	<div class="container">
		<h2>What Our Readers Say</h2>
		<blockquote>"Your tips have helped me improve my blog traffic and audience engagement!" - Sarah T.</blockquote>
	</div>
</section>

<!-- Contact Section -->
<section class="subscribe" id="contact">
	<div class="container">
		<h2>Stay Updated</h2>
		<p>Sign up to receive the latest posts and tips straight to your inbox.</p>
		<form action="/contact" method="post">
			<input type="email" name="email" placeholder="Enter your email" required>
			<button type="submit">Subscribe</button>
		</form>
	</div>
</section>
</body>
</html>