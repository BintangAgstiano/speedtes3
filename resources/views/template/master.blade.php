<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
        
        }
        .header{
            width: 100%;
            height: 5vh;
            background-color: orange;
            display: flex;
        }
        .link-nav{
            display: flex;
        }
        form{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    @include('template.header')
    <div class="container">
        
        
@yield('content')
    </div>
</body>
</html>