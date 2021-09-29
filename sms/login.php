<?php
session_start();

$error_msg = '';

if (isset($_POST['email'])) {
    $user_email = $_POST['email'];
    $password = $_POST['password'];

    $select_sql = 'SELECT * FROM users WHERE email="' . $user_email . '" AND password="' . $password . '"';

    require_once 'includes/db.php';
    $result = mysqli_query($connection, $select_sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);


        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header('location:index.php');
        exit;
    }

    $error_msg = 'Email/Password not matched.';
}
?>

<?php include 'includes/header.php' ?>

<?php include_once 'includes/menu.php' ?>

<h1 class="text-center">Student Management System</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3 class="text-center">Login</h3>

            <?php if ($error_msg != '') : ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong> <?php echo $error_msg; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" require>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" require >
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block text-center">Login</button>
                <hr>
                <a href="register.php" class="btn btn-default btn-block text-center">Not a member? Register.</a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>