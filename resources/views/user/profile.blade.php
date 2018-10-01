@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="col-12">
        <br>
        {{ Breadcrumbs::render('user.profile') }}
    </div>
    <div>
        <form method="post" action="{{route('user.update')}}">
            @method('PUT')
            <h3>Смена пароля</h3>
            @csrf
            <div class="form-group">
                <label for="oldPassword">Введите старый пароль</label>
                <input name="old_password" id="oldPassword" class="form-control" type="password" required
                >
            </div>
            <div class="form-group">
                <label for="newPassword">Введите новый пароль</label>
                <input name="new_password" id="newPassword" class="form-control" type="password" minlength="6" required>
            </div>
            <div class="form-group">
                <label for="newPasswordConfirm">Подтвердите новый пароль</label>
                <input name="new_password_confirm" id="newPasswordConfirm" class="form-control" type="password" minlength="6" required>
            </div>
            <button type="submit" class="btn btn-primary">Сменить</button>
        </form>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$avatarUrl}}" alt="Card image cap">
    </div>
    <div>
        <form method="post" action="{{route('avatar.upload')}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <button type="submit">Загрузить</button>
        </form>
    </div>
    <script>
        var password = document.getElementById("newPassword");
        var confirm_password = document.getElementById("newPasswordConfirm");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Пароли не совпадают");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
@endsection