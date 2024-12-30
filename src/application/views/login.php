<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    
    <div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="col-md-4">
            <?php include_once APPPATH . 'views/utility_views/back.php'; ?>
            <h1 class="text-center mb-4" style="font-size: 3.5rem;">Log In</h1>
            <p class="text-center mb-4">Don't have an account? <a href="/signup">Sign up</a></p>

            <?php echo validation_errors(); ?>

            <?php echo form_open('auth/login'); ?>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="d-grid gap-2" style="text-align:center;">
                    <p>forgot password?? <a href="/reset">reset here</a></p>
                    <p>password 123456789</p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
