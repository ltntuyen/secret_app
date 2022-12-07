<?php 
    include "../controller/c_room.php";
    $thu=new C_Room();
    $thu->create_room();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret App</title>
    <link rel="shortcut icon" type="image/png" href="../public/images/icon/icontitle.png"/>

    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <script src="../public/js/bootstrap.js"></script>
</head>
<body>

    <div class="container mt-4 text-center">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Tạo phòng</h1>
                <div class="row">
                    <div class="col">
                        <div class="mt-3">
                            <a href="create.php" class="btn btn-light border border-info form-control">Lưu</a>
                        </div>
                        <div class="mt-3">
                            <a href="create.php" class="btn btn-light border border-info form-control">Copy link</a>
                        </div>                        
                    </div>
                    <div class="col text-start">
                        <form action="" class="form-control">                           
                            <div class="mb-3 row">
                                <label for="" class="col-sm-4 col-form-label">ID:</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" value="123" disabled>
                                </div>
                            </div>                                                
                            <div class="mb-3 row">
                                <label for="" class="col-sm-4 col-form-label">Tên:</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-sm-4 col-form-label">Mật khẩu:</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control" >
                                </div>
                            </div>

                        </form>              
                    </div>
                </div>
            </div>
            <div class="col d-none d-md-block">
                 <img class="w-100" src="../public/images/home.png" alt="">
            </div>
        </div>
    </div>

<script src="../public/js/bootstrap.bundle.js"></script>
</body>
</html>