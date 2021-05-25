<?php
    include 'header.php';
?>

<section class="myLinearColour" style="padding-top: 100px;">
<h2 style="text-align: center;" >Express your thoughts , feelings , ideas freely.</h2>

<!----Contact Form---->
    <div class="d-flex justify-content-center padding row ">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="email" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="How we should call you">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputEmail">Password</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Where we could reach you">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Send a copy to yourself.</label>
            </div>

        </div>
        <div class="col-lg-6">
            <label for="exampleFormControlTextarea1">Your thoughts</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            <br>
            <button id="submitButton" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
<!----Contact Form---->
</section>

<?php
    include "footer.php";
?>