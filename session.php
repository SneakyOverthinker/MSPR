<?php
$login = $_GET['login'];
$password = $_GET['password'];
$correct_login_and_pw = False;
?>
    <h1> Login received from form --> <?php echo $login ?> </h1>
    <h1> Password received from form --><?php echo $password ?> </h1>
    <br>
    <br>
    <br>
<?php if ($users = getUsers()): ?>
    <?php foreach ($users as $user): ?>
        <?php ; ?>
        <h1>Login :
            <?php echo $user['login'] ?></h1>
        <h1>Password :
            <?php echo $user['password'] ?></h1>
        <?php if ($user['login'] == $login && $user['password'] == $password) {
            echo "Login and password good";
            session_start();
            $_SESSION['user']['login'] = $login;
            $_SESSION['user']['password'] = $password;
            $_SESSION['user']['id'] = $id;
            $correct_login_and_pw = True; //tell php that rhe login & pw entered are correct
        }
        ?>
        <br> <br>

    <?php endforeach; ?>
<?php endif;
