@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Edit a serial</h1>
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
                    <form method="post" action="{{ route('serials.update', $serial->id) }}">
                        @method('PATCH')
                        @csrf
                    @csrf
                    <div class="form-group">
                        <label for="name">Serial Name:</label>
                        <input type="text" class="form-control" name="name" value={{ $serial->name }} />
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" name="duration" value={{ $serial->duration }} />
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description" value={{ $serial->description }} />
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre: </label>
                        <input type="text" class="form-control" name="genre" value={{ $serial->genre }} />
                    </div>
                    <div class="form-group">
                        <label for="country">Country: </label>
                        <input type="text" class="form-control" name="country" value={{ $serial->country }} />
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <input type="text" class="form-control" name="rating" value={{ $serial->rating }} />
                    </div>
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <input type="text" class="form-control" name="year" value={{ $serial->year }} />
                    </div>
                    <div class="form-group">
                        <label for="likes">Likes:</label>
                        <input type="text" class="form-control" name="likes" value={{ $serial->likes }} />
                    </div>
                    <div class="form-group">
                        <label for="dislikes">Dislikes:</label>
                        <input type="text" class="form-control" name="dislikes" value={{ $serial->dislikes }} />
                    </div>
                    <div class="form-group">
                        <label for="thriller">Thriller:</label>
                        <input type="text" class="form-control" name="thriller" value={{ $serial->thriller }} />
                    </div>
                    <div class="form-group">
                        <label for="seasons">Seasons:</label>
                        <input type="text" class="form-control" name="seasons" value={{ $serial->seasons }} />
                    </div>
                    <button type="submit" class="btn btn-primary">Edit serial</button>
                </form>
            </div>
        </div>
    </div>
@endsection
