<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv+SXXzC+RUQH6v27g1vfF2vO6w5psmAKr+0I+Xr10mlM1GRyVOrT4UABM+" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <?php include_once APPPATH . 'views/utility_views/back.php'; ?>
        <h1 class="text-center mb-4">Create an Account</h1>

        <?php if (validation_errors()): ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>

        <?php echo form_open('auth/signup', ['class' => 'w-50 mx-auto']); ?>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username'); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3">
                <label for="password_confirm" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirm" id="password_confirm" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Signup</button>
            </div>
        </form>

        <p class="text-center mt-3">Already have an account? <a href="<?php echo site_url('login'); ?>">Login</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-9aNuU5KjJg7cp5lq2URsGFpsfg5A4JzN0E9tjOBhzG9kWmdhzBp7w4Zwv2UjaAIt" crossorigin="anonymous"></script>

</body>
</html>
