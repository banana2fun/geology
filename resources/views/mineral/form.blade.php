@extends('layouts.main')

@section('title', 'Change/Add mineral')

@section('content')

    <div class="col-12">
        <br>
        @if ($mineral->exists)
            {{ Breadcrumbs::render('mineral.edit', $mineral)}}
        @else
            {{ Breadcrumbs::render('mineral.create') }}
        @endif
    </div>
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if ($mineral->exists)
                <h3>Редактирование минерала</h3>
                <form method="post" action="{{route('mineral.update', $mineral)}}">
                    <input type="hidden" name="id" value="{{$mineral->mineral_id}}">
                    @method('PUT')
            @else
                <h3>Добавление минерала</h3>
                        <form method="post" action="{{route('mineral.store')}}">
            @endif
            @csrf
            <div class="form-group">
                <label for="inputRuName">Русское название</label>
                <input name="ru_name" id="inputRuName" class="form-control" placeholder="Введите русское название минерала" value="{{$mineral->ru_name}}">
            </div>
            <div class="form-group">
                <label for="inputEnName">Английское название</label>
                <input name="en_name"  id="inputEnName" class="form-control" placeholder="Введите английское название минерала" value="{{$mineral->en_name}}">
            </div>
            <div class="form-group">
                <label for="inputFormula">Формула</label>
                <input name="formula"  id="inputFormula" class="form-control" placeholder="Введите формулу минерала" value="{{$mineral->formula}}">
            </div>
                            <div class="form-row">
                                @include('mineral.select', [
                                'name' => 'name',
                                'fieldName' => 'min_class_id',
                                'label' => 'Выберите класс минерала',
                                'filter' => false,
                                'items' => $mineralClasses,
                                'value' => $currentMineralClass,
                                ])
                            </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection

