
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible m-4">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('error')}}
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-dismissible m-4">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('info')}}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissible m-4">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
         {{ Session::get('warning')}}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible m-4">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('success')}}
    </div>
@endif
