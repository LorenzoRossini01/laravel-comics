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
                    <a href="">
                        <div class="card-img">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div class="card-title">{{$comic['series']}}</div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn btn-primary">load more</div>
    </div>
</main>
    <main class="comic-detail">

        
        <div class="detail-top">
            <div class="container">
                <img src="" alt="">
            </div>
        </div>

        <div class="detail-middle">
            <div class="container">

                <div class="row g-3">
                    <div class="col-8">
                        <h2>titolo fumetto</h2>
                        <div>
                            <div class="row">
                                <div class='box-info'>
                                    <div class="col-9">
                                        <span class='price'>u.s. price:prezzo</span>
                                        <span class='availability'>disponibilità</span>
                                    </div>
                                    <div class="col-3">
                                        <span>check Availability</span>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam odit totam illum enim saepe commodi ullam aliquam dignissimos, eligendi quidem aut earum laborum, temporibus natus quibusdam in officia cumque possimus!</p>
                    </div>
                    <div class="col-4">
                        <p>advertisment</p>
                        <img src="{{Vite::asset('/resources\images\adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="detail-bottom">
            <div class="container">
            <div class="row flex-nowrap">
                <div class="col">
                    <h3>Talent</h3>
                    <div>
                        <span>Art by:</span>
                        <span>autori</span>
                    </div>
                    <div>
                        <span>Written by:</span>
                        <span>scrittori</span>
                    </div>
                </div>
                <div class="col">
                    <h3>Specs</h3>
                    <div>
                        <span>Series:</span>
                        <span>titolo serie</span>
                    </div>
                    <div>
                        <span>U.S. Price:</span>
                        <span>prezzo</span>
                    </div>
                    <div>
                        <span>On Sale Date::</span>
                        <span>data di vendita</span>
                    </div>
                </div>
            </div>
            </div>
        </div>
</main>
@endsection