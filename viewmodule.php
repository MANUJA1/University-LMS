<?php require 'includes/header.php'; ?>
<?php require 'functions/connection.php'; ?>


<head>


    <meta name="viewport" content=", ">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <title>Profile</title>

</head>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">

        <div class="parallax overflow-hidden bg-blue-400 page-section third">
            <div class="container parallax-layer" data-opacity="true">
                <div class="media v-middle">
                    <div class="media-left text-center">
                        <a href="#">
                            <img src="img/pic3.png" alt="people" class="img-circle width-60"/>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="text-white text-display-1 margin-v-0">User Name</h4>
                        <h6 class="text-subhead"><a class="link-white text-underline"
                         href="website-student-public-profile.html">View public
                                profile</a></h6>
                    </div>
                    <div class="media-right">
                        <p class="label bg-blue-500">Position</p>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="container">
    <!-- Example row of columns -->

    <div class="col-md-9">
        <div class="row">
            <?php
            
            if (isset($_GET['yerid'])) {
                $yerid = $_GET['yerid'];
                $sql = "SELECT DISTINCT * FROM module where yerid=$yerid";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {

//                        echo '<center><p><a href="attachment.php?modid=' . $row["modid"] . '">';


     
echo '
                <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="img/module/1.JPG" >
                <div class="caption">
                <center><p><a href="view-module.php?modid='.$row["modid"].'&name='.$row["name"].'">
                
                    <h3 class="text-headline margin-v-0-10">'.$row['name'].'</a></h3>
                    <h5><p> Module introduction </p></h5>

                </div>
            </div>
        </div>
';
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
            } else {
                echo "Please select a facalty from previous menu";
                header("Location: view-module.php"); /* Redirect browser */
                exit();
            }

            ?>

        </div>
    </div>
</div>
</div>


<?php require 'includes/footer.php'; ?>


