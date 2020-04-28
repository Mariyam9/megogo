<div class="container">
    @foreach($films as $film)
        <div class="col-md-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{ $film->name }}</strong>
                    <h3 class="mb-0">{{ $film->duration }}</h3>
                    <div class="mb-1 text-muted">Likes: {{ $film->likes }}</div>
                    <div class="mb-1 text-muted">Dislakes: {{ $film->dislakes }}</div>
                    <a href="film/{{$film->id}}">See more</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
