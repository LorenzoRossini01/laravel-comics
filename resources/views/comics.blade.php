@extends('layout.app')
@section('page-title', 'comics')


@section('main-content')
<main class="comics">

    <div class="container d-flex flex-column align-items-center">
        <div class='section-title'>
            <h3>current series</h3>
        </div>
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-img">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="card-title">{{$comic['series']}}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn btn-primary">load more</div>
    </div>
</main>
@endsection