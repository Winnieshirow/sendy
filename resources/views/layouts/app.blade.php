<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Platforms</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <style>
                h1{
                    font-style: bold;
                    font-family: 'Franklin Gothic Medium';
                    font-size: 35px;
                    text-align: center;
                    color: #3E3E3E;
                }
                .form-controller{
                    float: left;
                    width: 100%;
                    border: 3px solid #00B4CC;
                    padding: 5px;
                    height: 50px;
                    border-radius: 5px;
                    outline: none;
                    color: #000000;
                    margin-bottom: 4px;
                }
                thead{
                    padding: 4px;
                    font-style: bold;
                    font-family: 'Franklin Gothic Medium';
                    font-size: 20px;
                    color: orangered;
                }
                tbody tr{
                    height: 10px;
                }
                tr{
                    margin-top: 4px;
                    height: 4px;

                }
                td a{
                    border: 0px solid #00B4CC;
                    padding: 6px;
                    border-radius: 4px;
                    color: #ffffff;
                    background-color: gray;
                    font-style: bold;
                    font-family: 'Franklin Gothic Medium';
                    font-size: 18px;
                }
                a:hover { 
                    color: orangered;
                    text-decoration: none;
                }
        </style>
    </head>

<body>
      @yield('content')
</body>
</html>