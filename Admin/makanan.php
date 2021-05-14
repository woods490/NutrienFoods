<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Makanan</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item opt">
                <a class="nav-link active" href="makanan.php">Makanan</a>
            </li>
            <li class="nav-item opt">
                <a class="nav-link" href="pengiriman.php">Pengiriman</a>
            </li>
        </ul>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="FormControlSelect1">Tipe Makanan ID</label>
                        <select class="form-control" id="FormControlSelect1">
                          <option>Lose Weight (1)</option>
                          <option>Stable Weight (2)</option>
                          <option>Gain Weight (3)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputFoodName">Nama Makanan</label>
                        <input type="text" class="form-control" id="InputFoodName" placeholder="Nama Makanan">
                    </div>
                    <div class="form-group">
                        <label for="InputFoodCalories">Jumlah Kalori</label>
                        <input type="number" class="form-control" id="InputFoodCalories" placeholder="Kalori">
                    </div>
                    <div class="form-group">
                        <label for="FormControlTextarea1">Deskripsi Makanan</label>
                        <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="InputFoodPrice">Harga Makanan</label>
                        <input type="number" class="form-control" id="InputFoodPrice" placeholder="Harga">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Pilih Gambar Makanan</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>  
</div>
</body>
</html>