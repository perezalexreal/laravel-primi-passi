<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container {
        display: flex;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }
</style>
<body>
    <div class="container">
        <h1>{{$title}}</h1>
        <h2>{{$paragraph}}</h2>
        <div class="links">
            @foreach($links as $text_link=>$url_link)
            <a href="{{$url_link}}">{{$text_link}}</a>
            @endforeach
        </div>
    </div>
</body>
</html>