@extends('layouts.main')

@section('title', 'Mineral List')

@section('content')
    <div class="col-12">
        <br>
        {{ Breadcrumbs::render('welcome') }}
    </div>
    <div class="flex-center position-ref full-height">
        <div class="col-12">
            <h3>Поиск минерала по химическим элементам</h3>
            <form action="{{route('chemical.number')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Введите количество элементов</label>
                    <input class="form-control col-2" name="number_of_elements">
                    <button type="submit" class="btn btn-secondary">Отправить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
