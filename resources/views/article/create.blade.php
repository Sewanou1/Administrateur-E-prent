@extends('layout')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title }} </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">

                        <form id="quickForm" method="post" action="{{ route('format.store') }}">
                            <div class="card-body">
                                @include('article.form')
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('article.index') }}">
                                    <button type="button" class="btn btn-danger">
                                        Annuler
                                    </button></a>
                                <button type="submit" class="btn btn-info float-right">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (left) -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
        </div>
    </section>
@endsection

@section('css-link')
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
@endsection

@section('scriptJs')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('') }}"></script>
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script>
        $(function() {
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
@endsection
