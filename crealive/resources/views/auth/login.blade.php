<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
<div class="login container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <img class="logo" src="assets/img/logo.jpg" alt="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div>
                            @if(isset($warningMessage))
                            @foreach($warningMessage as $message)
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Şifre</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" id="button" class="btn btn-primary">Giriş</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
<style>
    body {
        background: #4b8d2d;
    }

    .login {
        margin-top: 100px;
    }

    .logo {
        margin-bottom: 25px;
        margin-left: 225px;
        width: 840px;
        height: 200px;
    }

    .card {
        opacity: 0.8;
    }

</style>
