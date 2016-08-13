<?php require 'functions/connection.php'; ?>
<?php require 'includes/header.php'; ?>
<?php require 'includes/body.php'; ?>
<link href="css/jombo.css" type="text/css" rel="stylesheet">
<link href="css/map.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<title> View digree</title>


<!-- Main jumbotron for a primary marketing message or call to action -->

    <body>
    <?php require 'includes/navbar.php';?>
    <div class="jumbotron"align="middle">

        <h1>Contact Us</h1>
        <p>Join with us and succsess your furure....</p>
    </div>



    <div class="container">
        <div class="row">
  <form name="registration" class="form-horizontal" role="form" action="contact-insert.php" method="post">
            <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Full Name&nbsp </span>
                    <input type="text" class="form-control" placeholder="Type hear" aria-describedby="sizing-addon1">
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">  E-mail  &nbsp &nbsp &nbsp &nbsp</span>
                    <input type="text" class="form-control" placeholder="Type hear" aria-describedby="sizing-addon1">


                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Contact No </span>
                    <input type="text" class="form-control" placeholder="Type hear" aria-describedby="sizing-addon1">


                </div>
            </div>
        </div>
        <br>
        <div class="form-group col-lg-6">
            <label for="comment"><h3>Comment:</h3></label>
            <textarea class="form-control" rows="10" id="comment"></textarea>
            <br>
            <button type="button" class="btn btn-primary btn-block">SEND </button>

        </div>
    </div><br><br><br>
        <div class="map">
        <div class="col-md-13s">
          <img src="img/map.PNG">
		  
		  
		  
        </div>
        </div>
		

        
</div>
<?php require 'includes/footer.php'; ?>