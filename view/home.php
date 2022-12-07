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
                    <div class="mb-3 row">
                        <a href="room.php"  class="btn btn-light border border-info">Tạo phòng</a>
                    </div>
                <form>
                    <div class="bg-danger row mb-3 border-bottom"></div>

                    <div class="mb-3 row" >   
                        <div class="input-group px-0 ">
                            <input type="text" class="form-control border border-info" placeholder="Nhập ID" >
                            <span class="input-group-text btn btn-light border border-info" id="">Tìm Kiếm</span>
                        </div> 
                    </div>

                    <div class="mb-3 row" >   
                        <div class="col-sm-3">
                            <img class="w-100" src="../public/images/home.png" alt="">
                        </div> 
                        <div class="col-sm-4 text-start">
                            <div >
                                <span>ABCD</span>                               
                            </div>
                            <div>
                                <span>ID: 123</span>
                            </div>                          
                        </div>
                        <div class="col-sm-5 ">
                            <div class="row">
                                <div class="col-6 w-50">
                                    <a href="room.php" class="btn btn-light border border-info" data-bs-toggle="modal" data-bs-target="#loginroomModal">Đăng Nhập</a>
                                </div>
                                <div class="col-6 w-50">
                                    <a href="ask.php" class="btn btn-light border border-info">Đặt Câu Hỏi</a>
                                </div>
                            </div>                         
                        </div> 
                    </div>

                </form>

                
            </div>
            <div class="col d-none d-md-block">
                 <img class="w-100" src="../public/images/home.png" alt="">
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="loginroomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Nhập Mật Khẩu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="password" class="form-control border border-info" >
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-light border border-info">Đăng Nhập</button>
                </div>
            </div>
        </div>
    </div>


<script src="../public/js/bootstrap.bundle.js"></script>
</body>
</html>