@include('default')


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5">Liste des Tâches</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @for($i =1; $i < 10; $i++) <div class="col-12 col-md-3 my-1 ">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nom de la tâche {{$i}} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Priorité: Haute</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Supprimer</a>
                    <a href="#" class="card-link">Détails</a>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>