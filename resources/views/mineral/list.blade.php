@extends('layouts.main')

@section('title', 'Mineral List')

@section('content')
    <div class="col-12">
        <br>
    {{ Breadcrumbs::render('mineral.index') }}
    </div>
    <h3>Список минералов</h3>
    <div class="col-12">
        <form method="get">
            <div class="form-group">
            <label for="search">Название</label>
            <input class="form-control" id="search" placeholder="Введите название" name="searchName" value="{{$searchName}}">
            </div>
            <div class="form-row">
                @include('mineral.select', [
                'name' => 'name',
                'fieldName' => 'filterMinClass',
                'label' => 'Выберите класс минерала',
                'filter' => true,
                'items' => $mineralClasses,
                'value' => $currentMineralClass,
                ])
            </div>
            <button type="submit" class="btn btn-primary">Поиск</button>
        </form>
        <a class="btn btn-success" href="{{route('mineral.create')}}">Добавить минерал</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Русское название</th>
                <th scope="col">Английское название</th>
                <th scope="col">Формула</th>
                <th scope="col">Класс</th>
            </tr>
            </thead>
            <tbody>
            @foreach($minerals as $mineral)
                <tr>
                    <td><a href="{{route('mineral.show', $mineral)}}}}">{{$mineral->ru_name}}</a></td>
                    <td>{{$mineral->en_name}}</td>
                    <td>{{$mineral->formula}}</td>
                    <td>{{$mineral->minClass->name}}</td>
                    <td><a class="btn btn-secondary" href="{{route('mineral.edit', $mineral)}}">Редактировать</a></td>
                    <td>
                        <form method="post" action="{{route('mineral.destroy', $mineral)}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$minerals->render()}}
    </div>
@endsection

