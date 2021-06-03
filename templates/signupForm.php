<link rel="stylesheet" href="./css/loginSignup.css">
<section class="myLinearColor"  style="padding: 30px;">
<h2 style="text-align:center;">Sing Up</h2>

<form class="signUp" action="./includes/signup.inc.php" method="post">
<label for="first_name">First and Last Name :</label>
    <div class="form-row">
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" >
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name"  >
    </div>
    <div class="form-group">
        <label for="email">Email address :</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <label for="password">Password :</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="signUpRPassword">Repeat Password :</label>
        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Repeat Password">
    </div>
    <button type="submit" class="btn btn-primary">Sing Up</button>
</form>
</section>