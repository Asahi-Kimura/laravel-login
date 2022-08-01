<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ログインフォーム</title>
    
    <script src="{{asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <form class="form-signin" method="POST" action="{{route('login')}}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
        {{-- @if ($errors->any()) --}}
        {{-- <div > --}}
        @foreach ($errors->all() as $error)
        <ul class="alert alert-danger">
            <li>{{ $error }}</li>
        </ul>
        @endforeach
        {{-- @endif --}}
    {{-- </div> --}}

        @if(session('login_error'))
        <div class="alert alert-danger">
            {{session('login_error')}}
        @endif  
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>
</body>
</html>