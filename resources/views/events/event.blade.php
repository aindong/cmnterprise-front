@extends('layouts.front2')

@section('styles')
    <style>
        .card-title.event {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
    </style>
@stop

@section('content')
    @include('registration.form');
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
            $('input#input_text, textarea#textarea1').characterCounter();
        });
    </script>
@stop