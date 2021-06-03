<!--Log In Form-->
<link rel="stylesheet" href="./css/loginSignup.css">
<section class="myLinearColor" style="padding: 30px; padding-top:50px">
<h2 style="text-align:center;">Log In</h2>
<!--Login Form-->
<form class="logIn" action="includes\login.inc.php" method="$_POST">
    <div class="form-group">
        <label for="logInEmail">Email address :</label>
        <input type="email" class="form-control" id="logInEmail" name="logInEmail" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="logInPassword">Password :</label>
        <input type="password" class="form-control" id="logInPassword" name="logInPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Log in</button>
</form>
</section>