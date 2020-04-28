@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <h1 class="display-3 text-light">Films</h1>
            <div>
                <a  href="{{ route('films.create')}}" class="btn btn-primary mb-3">New film</a>
            </div>
            <table class="table table-striped">
                <thead>
                <tr class="text-light">
                    <td>Name</td>
                    <td>Duration</td>
                    <td>Description</td>
                    <td>Genre</td>
                    <td>Country</td>
                    <td>Rating</td>
                    <td>Year</td>
                    <td>Likes</td>
                    <td>Dislikes</td>
                    <td>Thriller</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($films as $film)
                    <tr class="text-light">
                        <td>{{$film->name}}</td>
                        <td>{{$film->duration}}</td>
                        <td>{{$film->description}}</td>
                        <td>{{$film->genre}}</td>
                        <td>{{$film->country}}</td>
                        <td>{{$film->rating}}</td>
                        <td>{{$film->year}}</td>
                        <td>{{$film->likes}}</td>
                        <td>{{$film->dislikes}}</td>
                        <td>{{$film->thriller}}</td>

                        <td>
                            <a href="{{ route('films.edit',$film->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('films.destroy', $film->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
