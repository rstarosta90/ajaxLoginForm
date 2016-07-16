<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">

    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- javascript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
    <script type="text/javascript" src="js/engine.js"></script
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <!-- stylization for js -->

          <div class="login-box">
            <!-- Logo -->

            <div class="logo-form">
                <img class="img-responsive" src="img/logo.png">
            </div>

            <!-- Alert-->

            <div class="alert alert-danger" role="alert" id="login-alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Incorrect login or password!
            </div>

            <!-- Ajax.Error-->

            <div id="msg"></div>

            <!-- Form -->

            <form class="form-horizontal" method="post" id="login-form">
                <div class="form-group">
                    <div class=".col-md-4">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class=".col-md-4">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class=".col-md-4">
                        <div class="checking">
                            <input type="checkbox" id="check" name="check-value" />
                            <label for="check">&nbsp;&nbsp;Remember&nbsp;me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" id="submitButton">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In</button>
                </div>
            </form> <!-- End form -->
          </div>  <!-- End class .login-box -->
        </div>  <!-- End row -->
    </div> <!-- End container -->
</div>
</body>
</html>