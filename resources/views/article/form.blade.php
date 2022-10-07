@csrf
<div class="row">
    <div class="form-group col-4">
        <label for="intitule">Libellé de l'article</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input required type="text" name="intitule" class="form-control" id=""
                placeholder="Ex :Impression de fichier pdf format A4"
                @if (isset($article)) value = "{{ $article->libelle }}" @endif>
        </div>
    </div>
    <div class="form-group col-4">
        <label for="intitule">Prix</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input required type="text" name="intitule" class="form-control" id=""
                placeholder="Ex : 25"
                @if (isset($article)) value = "{{ $article->prix }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label>Type Impression</label>
        <select class="form-control select1" name="typeImpression_id" style="width: 100%;">
            @foreach ($typeImpressions as $typeImpression)
                <option value="{{ $typeImpression->id }}">{{ $typeImpression->libelle }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-4">
        <label>Format</label>
        <select class="form-control select1" name="format_id" style="width: 100%;">
            @foreach ($formats as $format)
                <option value="{{ $format->id }}">{{ $format->libelle }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-4">
        <label for="intitule">Support de l'impression</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input required type="text" name="intitule" class="form-control" id=""
                placeholder="Ex : article ...."
                @if (isset($article)) value = "{{ $article->support_impression }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="">Photo</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-image"></i></span>
            </div>
            <div class="custom-file">
                <input type="file" accept=".png,.jpg,.jpeg" name="photo" class="custom-file-input" id="inputGroupFile01"
                    placeholder="Ex : Selectionner une photo"
                    @if (isset($article)) value = "{{ $article->photo }}" @endif>
                <label class="custom-file-label" for="inputGroupFile01">Sélectionner un fichier</label>
            </div>

        </div>
    </div>

</div>

