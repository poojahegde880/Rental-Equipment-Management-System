<?php
  include('../connect.php');
  if(isset($_GET['email'])){
    $email = $_GET['email'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        .form-content input[type=text] {

border: 0.1px solid black;
box-shadow: none;
padding: 10px 20px 10px 20px;

}

.form-content input[type=email] {

border: 0.1px solid black;
box-shadow: none;
padding: 10px 20px 10px 20px;

}

.form-content input[type=number] {

border: 0.1px solid black;
box-shadow: none;

}

#inputcity {
border: 0.1px solid black;
box-shadow: none;
}

#plan{
border: 0.1px solid black;
box-shadow: none;
}

#password{
border: 0.1px solid black;
box-shadow: none;
}

.main-pay .row .pay-1 img{
width: 129px;
margin-top: 16px;
}
.main-pay .row .pay-2 img{
width: 80px;

}
.main-pay .row .pay-1 img:hover{
transform: scale(1.1);

}
.main-pay .row .pay-2 img:hover{
transform: scale(1.1);

}

    </style>
</head>
<body>

    <section class="form-section mx-auto w-75 my-4">
        <div class="container mx-0">
            <div class="row justify-content-center">
                <div class="col-12  col-lg-8 col-xl-9">
                    <div class="form-div border bg-light">
                        <div class="form-head">
                            <h2 class="text-center bg-warning p-3 mb-4 fs-7">SEND EMAIL MESSAGE</h2>
                        </div>
                        <div class="form-content px-4  mx-auto w-50">
                        
                        <form action="send.php?email=<?php echo $email?>" method="post">

                            <div class="col-md-12 w- mb-4 px-5" >
                                <label for="email" class="form-label">Email:</label><br>
                                <input type="email" name="email" value="<?php echo $email ?>">              
                            </div>
                            <div class="col-md-12 w-50  mb-4  px-5">
                                <label for="subject" class="form-label">Subject :</label><br>
                                <input type="text" name="subject" value=""> <br>            
                            </div>
                            <div class="col-md-12 w-50   mb-4  px-5">
                                <label for="message" class="form-label">Message :</label><br>
                                <input type="text" name="message" value=""> <br>               
                            </div>
                            <div class="col-md-12 w-75 mx-auto mb-4  px-5">
                               <button class="btn-warning px-4 py-2" name="send">SEND</button>              
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

