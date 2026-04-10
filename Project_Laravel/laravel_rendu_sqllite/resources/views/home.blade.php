<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESIEA</title>
    <link rel="icon" type="image/png" href="{{ asset('PHOTO/myLogo.png') }}">
    <style>
        div  { color: black; }
        span { color: green; }

        .myheader {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border: 5px solid;
            border-color: #000000;
            background-color: grey;
        }

        .imageheader {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <header class="myheader">
        <div>
            <img src="{{ asset('PHOTO/myLogo.png') }}" alt="logo" class="imageheader">
        </div>
        <div>Bienvenue chez "Evil corp"</div>
        <div>
            <a href="{{ route('login') }}">
                <img src="{{ asset('PHOTO/Login.png') }}" alt="Login" class="imageheader">
            </a>
        </div>
    </header>
</body>
</html>
