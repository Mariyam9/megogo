@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Edit a film</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('films.update', $film->id) }}">
                    @method('PATCH')
                    @csrf
                    @csrf
                    <div class="form-group">
                        <label for="name">Film Name:</label>
                        <input type="text" class="form-control" name="name" value={{ $film->name }} />
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" name="duration" value={{ $film->duration }} />
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description" value={{ $film->description }} />
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre: </label>
                        <input type="text" class="form-control" name="genre" value={{ $film->genre }} />
                    </div>
                    <div class="form-group">
                        <label for="country">Country: </label>
                        <input type="text" class="form-control" name="country" value={{ $film->country }} />
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <input type="text" class="form-control" name="rating" value={{ $film->rating }} />
                    </div>
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <input type="text" class="form-control" name="year" value={{ $film->year }} />
                    </div>
                    <div class="form-group">
                        <label for="likes">Likes:</label>
                        <input type="text" class="form-control" name="likes" value={{ $film->likes }} />
                    </div>
                    <div class="form-group">
                        <label for="dislikes">Dislikes:</label>
                        <input type="text" class="form-control" name="dislikes" value={{ $film->dislikes }} />
                    </div>
                    <div class="form-group">
                        <label for="thriller">Thriller:</label>
                        <input type="text" class="form-control" name="thriller" value={{ $film->thriller }} />
                    </div>

                    <button type="submit" class="btn btn-primary">Edit film</button>
                </form>
            </div>
        </div>
    </div>
@endsection
