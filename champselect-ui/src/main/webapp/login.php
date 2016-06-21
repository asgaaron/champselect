<?php
include 'top.php';
?>

<div class = "jumbotron text-center">

    <form class="form-horizontal" role="form" action="">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-3">
                <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="loginPwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-3">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

    <h2>Or Sign up:</h2>

    <form class="form-horizontal" role="form" action="">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-3">
                <input type="email" class="form-control" id="signupEmail" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="signupPwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Retype password:</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="signupVerifyPwd" placeholder="Re-enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-3">
                <button type="submit" class="btn btn-default">Sign up</button>
            </div>
        </div>
    </form>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-search logo slideanim"></span>
        </div>
        <div class="col-sm-8">
            <h2>Why sign up?</h2><br>
            <h4><strong>SPEED:</strong>Anybody can use ChampSelect.gg! Making an account allows us to store your summoner data and gameplay preferences.</h4><br>
            <p><strong>REUSE:</strong>Using stored summoner data is WAY faster than getting it from Riot's API every time you visit.</p>
        </div>
    </div>
</div>

</body>
<?php include 'bottom.php'; ?>