
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        .bg{
            background-image: linear-gradient(to right, rgba(0, 180, 219, 0.71), rgba(0, 131, 176, 0.8)), url("https://images.pexels.com/photos/6423/desk-notebook-office-grey.jpg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        h1,h2,h3,h4,h5,h6,p{
            font-family: 'Ubuntu', sans-serif;
        }
        p{
            font-size: medium;
        }
        .py-3{

        }

    </style>
</head>
<body>
<div class="bg">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <h2>Hello, {{ $email->name }}</h2>
            </div>
        </div>
        <div class="row py-3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum et, iste labore, laboriosam molestias necessitatibus nemo perferendis quos repellat sed veniam vero voluptas, voluptatem? Illum officia reiciendis unde? Atque, quis.
            </p>
        </div>
    </div>
</div>
</body>
</html>
