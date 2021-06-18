<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="logo kontrakin">
                <img src="{{asset('img/white-logo.png')}}" alt="" srcset="" width="200px">
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="judul">
                        <p>Kontrakin Management System</p>
                    </div>
                    <div class="col-6">
                        <div class="col">
                          <p>Nama Kontrakan</p>
                            <input type="text" class="form-control" placeholder="" aria-label="">
                        </div>
                        <div class="col">
                          <p>Nama Kontrakan</p>
                            <input type="text" class="form-control" placeholder="" aria-label="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 lis-kontrakan">
                <img src="{{asset('img/undraw.svg')}}" class="undraw" alt="" srcset="">
                <button class="btn btn-primary" type="submit">List Kontrakan</button>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>

</html>