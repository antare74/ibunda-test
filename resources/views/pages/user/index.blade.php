@extends('layouts.user.main')
@section('title', 'Tes Kesehatan Online By Bunda.id')

@section('content')
    <div id="app">
        <index-user></index-user>
    </div>
@endsection
@section('js')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
