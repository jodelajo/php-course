<?php  include "functions.php"; ?>
<?php createRows();?>
<?php include "includes/header.php"; ?>

<main class="container">
    <form action="login_create.php" method="post">
        <h1 class="text-center">Create</h1>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Create">
    </form>
</main>
<?php include "includes/footer.php"; ?>