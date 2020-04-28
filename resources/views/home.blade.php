@extends('layouts.app')

@section('style')
@endsection

@section('title-block')
MEGOGO.NET - фильмы и телеканалы онлайн
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Megogo</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container-fluid">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cartoons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV Show</a>
                    </li>
                    <ul class="social">
                        <li id="fr_click" class="button_lang current_lang">EN</li>
                        <li id="en_click" class="button_lang">RU</li>
                    </ul>
                    <li id = "sign">
                        <a class="nav-link" href="{{route('signup')}}"><svg class="bi bi-people-circle" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
                        </svg>
                        </a>
                    </li>
                </ul>
            <div>
        </div>
    </div>
</nav>


<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="https://s2.vcdn.biz/static/f/1846652231/image.jpg" alt=""  width="100%" height="100%" class="round">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-primary" href="{{route('signup')}}" role="button">Watch NOW</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://s2.vcdn.biz/static/f/1636770971/image.jpg" alt=""  width="100%" height="100%" class="round">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-primary" href="{{route('signup')}}" role="button">Watch NOW</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://s5.vcdn.biz/static/f/2003458901/image.jpg/pt/r0x0x4" alt=""  width="100%" height="100%" class="round">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-primary" href="{{route('signup')}}" role="button">Watch NOW</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</main>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://nextgen.yourhub.com/wp-content/uploads/2017/11/dawn_of_justice.jpg" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Batman VS Superman</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">2 h 25 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="data:image/jpeg;base64,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" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Avatar</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">3 h 23 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">href="{{route('signup')}}"
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQf91hs-83CSwdqPNUGY4suP1Vt9peXY93egnih4mcv394gAfOI&usqp=CAU   " alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Avengers: Endgame</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">3 h 2 mins</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://vertigoumcs.files.wordpress.com/2013/11/sherlock.jpg" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Sherlock Holmes</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">58 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/30f98633204499.56a3dbaa5d764.jpg" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Peaky Blinders</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">59 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZPEbPrS1qcX-2f2n7jcrcB5LrVMBmWzC3Lwe88njt-vJrat4k&usqp=CAU" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Game of thrones</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">59 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQbyNh6FchCvE_4W4y5Dwzif31jNRZXMm4wuD99gc6bydNjqHt6&usqp=CAU" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">Lakers vs Rockets</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">75 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.ytimg.com/vi/ShB3EW9wWzU/maxresdefault.jpg" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">El Clasico 19.02.2020</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">90 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.eurosport.com/2018/08/23/2403111-49960990-2560-1440.jpg?w=750" alt=""  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">UFC 229 2.09.2020</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" href="{{route('signup')}}" class="btn btn-sm btn-outline-secondary">Whatch</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">20 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">© 2019-2020</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

@endsection
