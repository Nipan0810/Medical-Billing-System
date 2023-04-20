<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "medical-billing") or die("Connection error!");

    $check = mysqli_query($con,"SELECT*FROM medicines");
    if(mysqli_num_rows($check)>0){
        $medicines = mysqli_fetch_all($check, MYSQLI_ASSOC);
    }
    
?>
<!DOCTYPEhtml>
<htmllang="en">
<head>
    <metacharset="UTF-8">
    <metahttp-equiv="X-UA-Compatible"content="IE=edge">
    <metaname="viewport"content="width=device-width, initial-scale=1.0">
    <title>Billing - Medical Billing System</title>
    <linkrel="stylesheet"href="resources/Bootstrap/css/bootstrap.min.css">
    <linkrel="stylesheet"href="resources/font-awesome/css/font-awesome.min.css">
    <scriptsrc="resources/Jquery/jquery-3.5.1.js"></script>
    <scriptsrc="resources/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <divclass="container">
        <divclass="row px-3 pt-3">
            <divclass="col-md-2 text-center">
            <ahref="index.html"><buttonclass="btn btn-dark">Back</button></a>
            </div>
            <divclass="col-md-8 text-center">
            <h1>Medical Billing System</h1>
            </div>
            <divclass="col-md-2 text-center">
            <ahref="bill.php"><buttonclass="btn btn-lg btn-dark"><iclass="fa fa-book"></i> Bill</button></a>
            </div>
        </div>
        <hr>
        <divclass="row align-items-center">
            <divclass="col-md-12 p-2">
                <center><h3>Add new medicine</h3></center>
                <formaction="api/new.php"method="POST"enctype="multipart/form-data">
                    <divclass="form-row">
                        <divclass="form-group col-md-5 text-center">
                            <inputclass="form-control"type="text"name="name"placeholder="Name"required>
                        </div>
                        <divclass="form-group col-md-2 text-center">
                            <inputclass="form-control"type="text"name="price"placeholder="Price"required>
                        </div