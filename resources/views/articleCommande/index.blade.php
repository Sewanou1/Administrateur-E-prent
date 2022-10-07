@extends('layout')
@section('link-css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
@endsection

@section('container')
    <div class="card">
        <div class="card-header d-flex  justify-content-between">
            <h3 class="card-title mr-auto p-2">{{ $title }} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">articleCommande N°</th>
                        <th>Type Impression</th>
                        <th>Format</th>
                        <th>Support d'impression</th>
                        <th>Information spécifique</th>
                        <th>Quantité</th>
                        <th>Article de la commande :</th>
                        <th style="text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articleCommandes as $key=> $articleCommande)
                        <tr>
                            <td class="text-center">{{ $key + 1 }} </td>
                            <td>{{ $articleCommande->type_impression }} </td>
                            <td>{{ $articleCommande->format}} </td>
                            <td>{{ $articleCommande->support_impression}} </td>
                            <td>{{ $articleCommande->info_specifique}} </td>
                            <td>{{ $articleCommande->quantite}} </td>
                            <td>{{ $articleCommande->commande->reference }}</td>
                            <td class="project-actions text-center">
                                <form method="POST"
                                    action="{{ route('detailCommande.destroy', ['detailCommande' => $articleCommande->id]) }}"
                                    class="delete" style="display: inline-block;" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm m-1">
                                        <i class="fas fa-trash">
                                        </i>
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scriptJs')
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
