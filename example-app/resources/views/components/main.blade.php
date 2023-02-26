<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{url('/')}}">Main</a>
                </li>
                <li>
                    <a href="{{url('/home')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/posts')}}">Posts</a>
                </li>
            </ul>
        </nav>
    </header>
    {{$slot}}
</body>
</html>
