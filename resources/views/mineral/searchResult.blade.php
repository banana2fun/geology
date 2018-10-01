@extends('layouts.main')

@section('title', '')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Название минерала</th>
            @foreach($search as $element => $value)
                <th scope="col">Содержание {{$element}}</th>
                <th scope="col">Дельта {{$element}}</th>
            @endforeach
            <th scope="col">Суммарная дельта</th>
        </tr>
        </thead>
        <tbody>
        @foreach($minerals as $mineral)
            <tr>
                <td scope="col">{{$mineral->ru_name}}</td>
                @php
                    $delt = 0;
                @endphp
                @foreach($mineral->elements as $element)
                    <td scope="col">{{$element->pivot->percent_in_mineral}} </td>
                    <td scope="col">{{$search[$element->symbol] - $element->pivot->percent_in_mineral}}</td>
                    @php
                        $delt += abs($search[$element->symbol] - $element->pivot->percent_in_mineral);
                    @endphp
                @endforeach
                <td scope="col">{{$delt}}</td>
                @if (Route::has('login'))
                    @auth
                        <td scope="col">
                            <form method="post" action="{{route('mineral.update', $mineral)}}">
                                <input type="hidden" value="{{$mineral->ru_name}}">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                        </td>
                    @endauth
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection