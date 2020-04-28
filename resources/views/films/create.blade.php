@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a film</h1>
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
                <form method="post" action="{{ route('films.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Film Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" name="duration"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre: </label>
                        <input type="text" class="form-control" name="genre"/>
                    </div>
                    <div class="form-group">
                        <label for="country">Country: </label>
                        <input type="text" class="form-control" name="country"/>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <input type="text" class="form-control" name="rating"/>
                    </div>
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <input type="text" class="form-control" name="year"/>
                    </div>
                    <div class="form-group">
                        <label for="likes">Likes:</label>
                        <input type="text" class="form-control" name="likes"/>
                    </div>
                    <div class="form-group">
                        <label for="dislikes">Dislikes:</label>
                        <input type="text" class="form-control" name="dislikes"/>
                    </div>
                    <div class="form-group">
                        <label for="thriller">Thriller:</label>
                        <input type="text" class="form-control" name="thriller"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Add film</button>
                </form>
            </div>
        </div>
    </div>
@endsection
