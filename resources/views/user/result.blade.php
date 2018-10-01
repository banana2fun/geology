@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="col-12">
        <br>
        {{ Breadcrumbs::render('user.profile') }}
    </div>
    @if ($result)
        <div class="col-12">Ваш пароль успешно изменён</div>
    @else
        <div class="col-12">Вы ввели неверный пароль</div>
    @endif
    <div class="col-12">
        <a href="{{route('user.profile')}}" class="btn">Назад</a>
    </div>
@endsection