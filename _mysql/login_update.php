<?php include "db.php"; ?>
<?php include "functions.php";?>

<?php updateTable();?>

<?php  include "includes/header.php"; ?>
<main class="container">
    <div clas="col-sm-6">
    <form action="login_update.php" method="post">
    <h1 class="text-center">Update</h1>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
        <select name="id" id="">
            <?php  showAllData(); ?>
        </select>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
    </form>
    </div>
</main>
<?php include "includes/footer.php"; ?>