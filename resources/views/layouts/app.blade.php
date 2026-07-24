<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dierenpaspoort</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        h2 {
            margin-top: 0;
        }

        img {
            width: 100%;
            border-radius: 15px;
        }

        .button {
            display: block;
            text-align: center;
            background: #4CAF50;
            color: white;
            padding: 12px;
            border-radius: 10px;
            text-decoration: none;
            margin-top: 15px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .card h2 {
            margin-bottom: 5px;
        }

        .card p {
            color: #555;

        }

    </style>
</head>

<body>

<div class="container">

    @yield('content')

</div>

</body>
</html><?php
