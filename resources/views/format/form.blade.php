@csrf
<div class="form-group">
    <label for="exampleInputEmail1" class="text-right ">Libellé du format : </label>
    <div class="input-group mb-3 col-4">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        <input required type="text" name="libelle" class="form-control" id="" placeholder="Ex : A4"
            @if (isset($format)) value = "{{ $format->libelle}}" @endif>
    </div>
</div>

