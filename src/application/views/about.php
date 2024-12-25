<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* Custom Styles */
        .about-header {
            text-align: center;
            padding: 50px 0;
            background-color: #f1f1f1;
        }

        .about-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .about-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .about-content {
            padding: 50px 0;
        }

        .about-content h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-content .content-section {
            display: flex;
            justify-content: space-around;
            margin-bottom: 40px;
        }

        .about-content .content-section div {
            max-width: 500px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f9fa;
        }

        .about-content .content-section div h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .about-footer {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<!-- About Page Header -->
<section class="about-header">
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to Bolgging, a platform dedicated to sharing valuable content on blogging, content creation, and more.</p>
    </div>
</section>

<!-- About Page Content -->
<section class="about-content">
    <div class="container">
        <h2>Our Mission</h2>
        <p style="text-align:center;">Our goal is to inspire and empower individuals to create high-quality content, build their online presence, and make a lasting impact through blogging. Whether you are a beginner or an experienced blogger, we provide resources, tips, and advice to help you succeed.</p>

        <div class="content-section">
            <div>
                <h4>Our Story</h4>
                <p>Our journey began with a simple passion for writing and sharing knowledge. As a team of bloggers and digital marketers, we wanted to create a space where everyone could come together to learn, grow, and create amazing content. We are a diverse community committed to sharing insights on everything from blogging best practices to SEO, social media strategies, and content monetization.</p>
            </div>

            <div>
                <h4>What We Offer</h4>
                <p>At Blogging, we offer a wide range of resources to help bloggers and content creators excel. Our blog covers topics including blogging tips, content writing techniques, SEO strategies, content marketing, and much more. Our goal is to provide practical advice and in-depth guides that empower you to achieve success in the digital world.</p>
            </div>
        </div>

        <div class="content-section">
            <div>
                <h4>Meet the Team</h4>
                <p>Our team consists of experienced writers, marketers, and developers who are passionate about the art of content creation. We work tirelessly to bring you the latest insights, tools, and strategies to help you succeed in your blogging journey.</p>
            </div>

            <div>
                <h4>Join Our Community</h4>
                <p>We invite you to join our community of like-minded individuals who are eager to learn and grow in the world of blogging. Feel free to explore our content, share your ideas, and connect with others who share your passion.</p>
            </div>
        </div>
    </div>
</section>
</body>
</html>
