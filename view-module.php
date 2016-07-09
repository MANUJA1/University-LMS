<?php require 'includes/header.php'; ?>
<?php require 'functions/connection.php'; ?>
<head>


    <meta name="viewport" content=", ">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <title>module</title>

</head>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">

        <div class="parallax overflow-hidden bg-blue-400 page-section third">
            <div class="container parallax-layer" data-opacity="true">
                <div class="media v-middle">
                    <div class="media-left text-center"></div>
                    <div class="media-body">
                        <h2>The MVC architectural pattern</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta eius
                            enim Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>
</div>


</div>
</div>
<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="col-md-12">
                <div class="page-section padding-top-none">
                    <div class="media media-grid v-middle">
                        

                        <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
                            <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                                <div class="media">
                                    <div class="media-left">
                                <span class="icon-block img-circle bg-indigo-300 half text-white"><i
                                        class="fa fa-graduation-cap"></i></span>
                                    </div>
                                    <div class="media-body">
                                        
                                        <h4 class="text-headline"><?php echo $_GET['name']; ?></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque
                                            minima
                                            nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium
                                            molestias
                                            officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                    </div>
                                </div>
                            </div>
                           
                                 
                            <div class="list-group collapse in" id="curriculum-1">
                                <div class="list-group-item media" data-target="website-take-course.html">

                                        <form action="up.php?modid=<?php echo $_GET['modid'];?>" method="POST" enctype="multipart/form-data">
                                            <input type="file" name="file1" size="50">
                                    <input type="SUBMIT" name="submit1" class="btn btn-default" style="float: right;" value="Upload" >
                                        </form>
                                </div>


<?php
if (isset($_GET['modid'])){
$modid=$_GET['modid'];
$sql = "SELECT * FROM attachment where modid=$modid";
$result = mysqli_query($conn, $sql);
    
    
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="list-group-item media " data-target="website-take-course.html">
        <form role="form" method="post" target="_self" action="functions/download.php">
                                    <div class="media-left"><div class="text-crt">'.$row["attid"].'</div> </div>
                                    <center><p><a href="download.php?filename='.$row["filename"].'" style="font-size: 25px; text-decoration: none;">
                                    
                                    <div class="media-body"><i class="fa fa-fw fa-circle text-blue-300"></i> '.$row["filename"]."</p>"."</a>"."<br>".'</div></center>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default" onclick="BootstrapDialog.alert(\'I want banana!\');">Edit</button>
                                    <button type="button" class="btn btn-default" onclick="myFunction(\'Delete-Module.php?attid='.$row["attid"].'&filename='.$row["filename"].'\');">Delete</button>
                                    <button type="button" class="btn btn-default" onclick="location.href=\'download.php?filename='.$row["filename"].'\';">Download</button>
                                    
                                    </div>
                                    <div class="media-left "><div class="text-left text-caption">'.$row["date"].'</div></div>
       </form></div> ';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
}else {
    echo "Please select a Module from previous menu";
    header("Location: viewmodule.php"); /* Redirect browser */
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
}
function doFunction(){
    header("Location: viewmodule.php");
}
    
?>


                    </div>
                            

                            <script>
                                function myFunction(attid) {

                                    var r = confirm("Are you sure to delete this?");
                                    if (r == true) {

                                        window.location=attid;

                                    } else {

                                    }

                                }
                            </script>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require 'includes/footer.php'; ?>

