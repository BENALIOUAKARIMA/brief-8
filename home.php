<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div id="container" class=" position-relative d-flex">
        <!--start sidebar-->
       <?php
       include('sidebar.php')

       ?>
        <div class="container">
            <!-- start navbar -->
            <?php
            include('navbar.php')

            ?>
            <div class="row  mt-4">

                <div class="col ">
                    <div class="w-100 h-100 my-2 ">
                        <div class="card" style="background-color: rgb(199, 242, 255); ">
                            <ul class="list-group list-group-flush">
                                <li style="list-style: none;"><i class="bi bi-mortarboard ms-1" style="color: rgb(184, 184, 255);"></i></li><br>
                                <li style="list-style: none; color:gray;" class="ms-1"> Student</li><br>
                                <li style="list-style: none; " class="ms-5 fw-bold">240</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="w-100 h-100 my-2">
                        <div class="card " style="background-color: rgb(255, 210, 215);">
                            <ul class="list-group list-group-flush">
                                <li style="list-style: none;"><i class="bi bi-bookmark ms-1" style="color: rgb(250, 129, 150);"></i></li><br>
                                <li style="list-style: none;  color:gray;" class="ms-1">Course</li><br>
                                <li style="list-style: none;" class="ms-5 fw-bold">13 </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="w-100 h-100 my-2 ">
                        <div class="card" style="background-color: rgb(255, 255, 223);">
                            <ul class="list-group list-group-flush">
                                <li style="list-style: none;"><i class="bi bi-currency-dollar ms-1" style="color: rgb(141, 240, 253);"></i> </li><br>
                                <li style="list-style: none;  color:gray;" class="ms-1">Payment</li><br>
                                <li style="list-style: none;" class="ms-5 fw-bold"> DH556,000</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="w-100 fw-bold h-100 my-2">
                        <div class="card " style="background: rgb(64, 205, 235);
                        background: linear-gradient(90deg, rgba(64, 205, 235, 1) 46%, rgba(173, 245, 196, 1) 90%, rgba(243, 247, 174, 1) 100%);">
                            <ul class="list-group list-group-flush">
                                <li style="list-style: none;"><i class="bi bi-person ms-1" style="color: white;"></i></li><br>
                                <li style="list-style: none; color:white;" class="ms-1">Users</li><br>
                                <li style="list-style: none;" class="ms-5 fw-bold">3</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        
    </div>

</body>

</html>