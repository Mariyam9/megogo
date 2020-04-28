@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <h1 class="display-3 text-light">Serials</h1>
            <div>
                <a  href="{{ route('serials.create')}}" class="btn btn-primary mb-3">New serial</a>
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
                    <td>Seasons</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($serials as $serial)
                    <tr class="text-light">
                        <td>{{$serial->name}}</td>
                        <td>{{$serial->duration}}</td>
                        <td>{{$serial->description}}</td>
                        <td>{{$serial->genre}}</td>
                        <td>{{$serial->country}}</td>
                        <td>{{$serial->rating}}</td>
                        <td>{{$serial->year}}</td>
                        <td>{{$serial->likes}}</td>
                        <td>{{$serial->dislikes}}</td>
                        <td>{{$serial->thriller}}</td>
                        <td>{{$serial->seasons}}</td>

                        <td>
                            <a href="{{ route('serials.edit',$serial->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('serials.destroy', $serial->id)}}" method="post">
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
