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
                <form action="">
                  <div class="mb-3 row" >   
                    <div class="col-sm-6 text-start">
                        <div >
                          <span>ABCD</span>                               
                        </div>
                        <div>
                          <span>ID: 123</span>
                        </div>                          
                    </div>
                  </div>

                  <div class="mb-3 row text-end">
                    <!-- <label for="exampleFormControlTextarea1" class="form-label text-start">Nhập câu hỏi của bạn:</label> -->
                    <textarea class="form-control border-info" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập câu hỏi..."></textarea>
                    <p><small class="text-muted">Câu hỏi không quá 160 ký tự</small></p>
                  </div>

                  <div class="mb-3 row">
                    <a href="room.php" class="btn btn-light border border-info">Gửi</a>
                  </div>                        
                </form>
            </div>
            <div class="col d-none d-md-block">
                 <img class="w-100" src="../public/images/home.png" alt="">
            </div>
        </div>
    </div>
<script src="../public/js/bootstrap.bundle.js"></script>
</body>
</html>