<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>PC Building</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
    <style>
        .navbar-default{
            background-color:#FFCCBC;
            border-color:#FFCCBC;
            margin-bottom:10px;
        }
        h3, h2{
            margin-top: 10px;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="container">
  
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                
                </button>
                
                <a class="pull-left" href="#"><img src="images/chip.png" width="50px"></a>
            </div>
            

            
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="register.php">Register</a></li>
                    <li><a href="/login.php">Login</a></li>
                    <li><a href="/index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/photo.html">Photo</a></li>
                            <li><a href="/video.html">Video</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="/kontakti.php">About</a></li>
                    <li><a href="/SPA.html">SPA</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="row">
        <div class="col-md-12">
            <h2>Contacts</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Tech People</h3>
            <div class="table-responsive">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jegors</td>
                            <td>Bolozdiņa</td>
                            <td>jbolozdina@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Linus</td>
                            <td>TechTips</td>
                            <td>linustt@gmail.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-addon">Review</span>
                <input type="text" class="form-control" placeholder="Review of this site">
                <span class="input-group-btn">
                <button class="btn btn-default">Enter</button>
                </span>
            </div>
        </div>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>