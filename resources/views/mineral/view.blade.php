@extends('layouts.main')

@section('title', 'View Mineral')

@section('content')
    <div class="col-12">
        <br>
        {{ Breadcrumbs::render('mineral.show', $mineral) }}
    </div>
    <h3>Просмотр минерала</h3>
    <div class="col-12">
        <table class="table">
            <tbody>
                <tr scope="row">
                    <td scope="col">Русское название</td>
                    <td scope="row">{{$mineral->ru_name}}</td>
                </tr>
                <tr scope="row">
                    <td scope="col">Английское название</td>
                    <td>{{$mineral->en_name}}</td>
                </tr>
                <tr scope="row">
                    <td scope="col">Формула</td>
                    <td>{{$mineral->formula}}</td>
                </tr>
                <tr scope="row">
                    <td scope="col">Класс</td>
                    <td>{{$mineral->MinClass->name}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection