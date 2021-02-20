@extends('template')
@section('pagename', 'Главная')
@section('content')
    <h3>Темы:</h3>
    <textarea style="width:100%; resize:vertical; height:auto;">{!! $jsonTheme !!}</textarea>
    <h3>Подтемы</h3>
    <textarea style="width:100%; resize:vertical; height:auto;">{!! $jsonSubTheme !!}</textarea>
    <h3>Вопросы</h3>
    <textarea style="width:100%; resize:vertical; height:auto;">{!! $jsonQuestions !!}</textarea>
    <img src="/content/picture.jpg">
@endsection