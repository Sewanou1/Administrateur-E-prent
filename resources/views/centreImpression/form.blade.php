@csrf
<div class="row">
    <div class="form-group col-4">
        <label for="nom">Nom</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input required type="text" name="nom" class="form-control" id=""
                placeholder="Ex : Nom du centre"
                @if (isset($centreImpression)) value = "{{ $centreImpression->nom }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="telephone">Téléphone</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input required type="text" name="telephone" class="form-control" id=""
                placeholder="Ex : +229 00000000"
                @if (isset($centreImpression)) value = "{{ $centreImpression->telephone }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="adresse">Adresse</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user "></i></span>
            </div>
            <input required type="text" name="adresse" class="form-control" id="" placeholder="Ex: Godomey-Togoudo"
                @if (isset($centreImpression)) value = "{{ $centreImpression->adresse }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="longitude">Longitude</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input required type="text" name="longitude" class="form-control" id=""
                placeholder="Ex : 29° Nord"
                @if (isset($centreImpression)) value = "{{ $centreImpression->longitude }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="lagitude">Lagitude</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input required type="text" name="lagitude" class="form-control" id=""
                placeholder="Ex : 12° Sud"
                @if (isset($centreImpression)) value = "{{ $centreImpression->lagitude }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="intitule">Numéro IFU</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input required type="text" name="ifu" class="form-control" id=""
                placeholder="Ex : 15GF4257FGG"
                @if (isset($centreImpression)) value = "{{ $centreImpression->ifu }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="photo">Photo</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-image"></i></span>
            </div>
            <div class="custom-file">
                <input type="file" accept=".png,.jpg,.jpeg" name="photo" class="custom-file-input" id="inputGroupFile01"
                    placeholder="Ex : Selectionner une photo"
                    @if (isset($centreImpression)) value = "{{ $centreImpression->photo }}" @endif>
                <label class="custom-file-label" for="inputGroupFile01">Sélectionner un fichier</label>
            </div>

        </div>
    </div>

    <div class="form-group col-4">
        <label for="intitule">Facebook</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-facebook"></i></span>
            </div>
            <input required type="text" name="facebook" class="form-control" id=""
                placeholder="Ex : Maître conférence"
                @if (isset($centreImpression)) value = "{{ $centreImpression->facebook }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="instagram">Instagram</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-instagram"></i></span>
            </div>
            <input required type="text" name="instagram" class="form-control" id=""
                placeholder="Ex : Maître conférence"
                @if (isset($centreImpression)) value = "{{ $centreImpression->instagram }}" @endif>
        </div>
    </div>

    <div class="form-group col-6">
        <label for="twiter">Twiter</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-twiter"></i></span>
            </div>
            <input required type="text" name="twiter" class="form-control" id=""
                placeholder="Ex : Maître conférence"
                @if (isset($centreImpression)) value = "{{ $centreImpression->twiter }}" @endif>
        </div>
    </div>

    <div class="form-group col-6">
        <label for="linkedIn">LinkedIne</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input required type="text" name="linkedIn" class="form-control" id=""
                placeholder="Ex : Maître conférence"
                @if (isset($centreImpression)) value = "{{ $centreImpression->linkedIn }}" @endif>
        </div>
    </div>
</div>

<div class="row align-middle my-3 ml-0">
    <div class="input-group-prepend  ">
        <span class="input-group-text"><i class="fas fa-info "></i></span>
    </div>
    <label class="col-10" for="exampleInputEmail1">Délais Reponse Devis </label>
</div>
@if (isset($centreImpression))
    <textarea required name="contenu" class="form-control " id="summernote">{{ $centreImpression->delais }}</textarea>
@else
    <textarea required name="contenu" class="form-control " id="summernote" placeholder="Un contenu"></textarea>
@endif








