@csrf
<div class="row">
    <div class="form-group col-4">
        <label for="intitule">Nom</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input required type="text" name="nom" class="form-control" id=""
                placeholder="Ex : Nom"
                @if (isset($chercheur)) value = "{{ $chercheur->nom }}" @endif>
        </div>
    </div>

    <div class="form-group col-4">
        <label for="">Prenom</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user "></i></span>
            </div>
            <input required type="text" name="prenom" class="form-control" id="" placeholder="Ex: Prenom"
                @if (isset($chercheur)) value = "{{ $chercheur->prenom }}" @endif>
        </div>
    </div>



    <div class="form-group col-4">
        <label for="intitule">Titre</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input required type="text" name="titre" class="form-control" id=""
                placeholder="Ex : Maître conférence"
                @if (isset($chercheur)) value = "{{ $chercheur->titre }}" @endif>
        </div>
    </div>

</div>
<div class="row">
    <div class="form-group col-6">
        <label for="">Statut</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-star "></i></span>
            </div>
            <input required type="text" name="statut" class="form-control" id="" placeholder="Enseignant Chercheur"
                @if (isset($chercheur)) value = "{{ $chercheur->statut }}" @endif>
        </div>
    </div>

    <div class="form-group col-6">
        <label>Institut</label>
        <select class="form-control select2" name="institut_id" style="width: 100%;">
            @foreach ($instituts as $institut)
                <option value="{{ $institut->id }} ">{{ $institut->intitule }}
                </option>
            @endforeach
        </select>
    </div>

</div>

<div class="row">
    <div class="form-group col-6">
        <label for="">Email</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope "></i></span>
            </div>
            <input required type="email" name="email" class="form-control" id="" placeholder="email@gmail.com"
                @if (isset($chercheur)) value = "{{ $chercheur->email }}" @endif>
        </div>
    </div>
    <div class="form-group col-6">
        <label for="intitule">Téléphone</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
            </div>
            <input required type="text" name="telephone" class="form-control" id=""
                placeholder="Ex : +000 XX XX XX XX"
                @if (isset($chercheur)) value = "{{ $chercheur->telephone }}" @endif>
        </div>
    </div>
</div>








