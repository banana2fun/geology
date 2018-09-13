@extends('layouts.main')

@section('title', 'Create Shop')

@section('content')
    <div class="col-12">
        <br>
        {{ Breadcrumbs::render('chemical.number') }}
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
        <h3>Поиск минерала по химическим элементам</h3>
        <form action="{{route('chemical.search')}}" method="post">
            @csrf
            @for ($i = 0; $i < $number; $i++)
            <div class="form-row">
                <div class="col-1">
                    <select name="symbol_{{$i}}" class="form-control">
                        @foreach ($elements as $element)
                        <option value="{{$element->symbol}}">{{$element->symbol}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-5">
                    <input class="form-control" name="element_{{$i}}">
                </div>
            </div>
            @endfor
            <input type="hidden" class="form-control" name="numberOfElements" value="{{$number}}">
            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
    </div>
@endsection

