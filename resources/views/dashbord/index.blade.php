@extends('layout')
@section('link-css')
<style>
    .carousel-item:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.6);
    }
</style>
@stop
@section('container')
    @include('component.content-wrapper')
@stop
