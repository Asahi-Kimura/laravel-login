<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ホーム画面</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            @if(session('login_success'))
            <div class="alert alert-success">
                {{session('login_success')}}
            @endif    
            </div>
            <h3>プロフィール</h3>
            <ul>
                <li>名前：{{Auth::user()->name}}</li>
                <li>メールアドレス{{Auth::user()->email}}</li>
            </ul>
        </div>
    </div>
</body>
</html>