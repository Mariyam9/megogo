<div class="container">
    <br>
    <h1 class="text-primary my-3">{{ $film->name }}</h1>
    <br>
    <div>
        <strong class="text-info">Duration: </strong>
        <p>{{ $film->duration }}</p>
     </div>

    <div>
        <strong class="text-info">Description:</strong>
        <p>{{ $film->description }}</p>
    </div>

    <div>
        <strong class="text-info">Genre:</strong>
        <p>{{ $film->genre }}</p>
    </div>

    <div>
        <strong class="text-info">Country:</strong>
        <p>{{ $film->country }}</p>
    </div>

    <div>
        <strong class="text-info">Rating:</strong>
        <p>{{ $film->rating }}</p>
    </div>

    <div>
        <strong class="text-info">Year:</strong>
        <p>{{ $film->year }}</p>
    </div>

    <div>
        <strong class="text-info">Likes:</strong>
        <p>{{ $film->likes }}</p>
    </div>

    <div>
        <strong class="text-info">Dislikes:</strong>
        <p>{{ $film->dislikes }}</p>
    </div>

    <div>
        <strong class="text-info">Thriler:</strong>
        <p>{{ $film->thriler }}</p>
    </div>

    <a class="btn btn-outline-primary mb-4" href="{{url()->previous()}}">Go back</a>
</div>

