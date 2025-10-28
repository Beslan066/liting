@extends('layouts.frontend')

@section('content')
    <section class="featured-slider-1 pt-65 main">
        <div class="position-relative">
            <div class="featured-slider-1-arrow color-white"></div>
            <div class="container">
                <div class="hero-1 featured-slider-1-items ">
                    @if(isset($proses))
                        @foreach($proses as $prose)
                            <div class="slider-single">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <h2 class="post-title mb-30">
                                            <a href="{{route('frontend.prose.single', $prose->id)}}">
                                                {{$prose->name}}
                                            </a>
                                        </h2>
                                        <div class="post-excerpt text-grey-400 mb-30">
                                            {{$prose->lead}}
                                        </div>
                                        <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                            <a href="{{route('frontend.authorSingle', $prose->author->id)}}">
                                                @if(isset($prose->author->image))
                                                    <img src="{{asset('storage/public/' . $prose->author->image)}}"
                                                         alt="" style="object-fit: cover">
                                                @else
                                                    <img src="{{asset('frontend/assets/imgs/authors/author.jpg')}}"
                                                         alt="">
                                                @endif
                                                <span class="author-namge">{{$prose->author->name}}</span>
                                            </a>
                                            <span class="time-to-read has-dot">6 mins to read</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="featured-slider-1-nav row">
                @if(isset($proses))
                    @foreach($proses as $prose)
                        <div class="col d-flex transition-normal latest-small-thumb">

                        </div>

                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--End: featured-1 -->
    <section class="trending pt-65 pb-65 position-relative">
        <div class="bg-square-2"></div>
        <div class="container">
            <h3 class="mb-65 font-heading wow fadeIn animated" style="color: white">Поэзия</h3>
            <div class="row">
                @if(isset($poesies))
                    @foreach($poesies as $poesy)
                        <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <h5 class="post-title font-md">
                                            <a href="{{route('frontend.poesy.single', $poesy->id)}}">{{$poesy->name}}</a>
                                        </h5>
                                        <hr>
                                        <div class="post-meta-2 font-md d-flext align-self-center mb-md-30 w-100">
                                            <a href="{{route('frontend.authorSingle', $poesy->author->id)}}" tabindex="0">
                                                <img src="{{asset('storage/public/' . $poesy->author->image)}}" alt="" style="object-fit: cover">
                                                <span class="author-namge">{{$poesy->author->name}}</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="pb-65">
        <div class="container">
            <h3 class="mb-65 font-heading wow fadeIn animated">Юбилеи</h3>
            <div class="position-relative wow fadeIn animated">
                <div class="slide-fade slide-fade-inner bg-brand-4 border-radius-10 p-65 p-sm-25">

                    @if(isset($jubilees))
                        @foreach($jubilees as $jubilee)
                            <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="post-meta-1 mb-20 mt-50">
                                        <a href="category.html"
                                           class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                        <span class="post-date text-muted font-md">{{$jubilee->created_at}}</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700" style="color: white">
                                        <a href="{{route('frontend.jubilees.single', $jubilee->id)}}">
                                            {{$jubilee->name}}
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        {{$jubilee->lead}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                             src="{{asset('storage/public/' . $jubilee->image)}}" alt="{{$jubilee->name}}">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif

                </div>
                <div class="slide-fade-arrow-cover"></div>
            </div>
        </div>
    </section>
    <section class="recent-posts">
        <div class="container">
            <div class="header-title mb-65">
                <h3 class="font-heading mb-0 wow fadeIn animated">Пьесы</h3>
            </div>
            <div class="row">
                @if(isset($plays))
                    @foreach($plays as $play)
                        <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                            <div class="post-card-1 large border-radius-10 hover-up">
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <div class="entry-meta meta-1 float-left font-md mb-10">
                                            <span class="post-on has-dot">27 August</span>
                                        </div>
                                        <h4 class="post-title mb-30">
                                            <a href="{{route('frontend.plays.single', $play->id)}}">{{$play->name}}</a>
                                        </h4>
                                        <div class="post-meta-2 font-md">
                                            <a href="{{route('frontend.authorSingle', $play->author->id)}}">
                                                <img src="{{asset('storage/public/' . $play->author->image)}}" alt="">
                                                <span class="author-namge">{{$play->author->name}}</span>
                                            </a>
                                            <span class="time-to-read has-dot">6 mins to read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="instargram bg-brand-4">
        <div class="container">
            <div class="header-title-2 mb-65">
                <h3 class="font-heading wow fadeIn animated color-white" style="color: white">Авторы</h3>
            </div>
            <div class="position-relative wow fadeIn animated">
                <div class="carausel-3-columns">
                    @if(isset($authors))
                        @foreach($authors as $author)
                            <div class="post-card-1 instagram-card border-radius-10 hover-up p-30">
                                <figure class="mb-30 img-hover-scale overflow-hidden border-radius-10">
                                    <img class="border-radius-10" src="{{asset('storage/public/' . $author->image)}}"
                                         alt="">
                                </figure>
                                <div class="post-meta-2 font-md d-flex">
                                    <div class="mb-0">
                                        <a href="{{route('frontend.authorSingle', $author->id)}}"> <strong class="author-namge">{{$author->name}}</strong></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="carausel-3-columns-arrow-cover mt-30"></div>
            </div>
        </div>
    </section>
    <section class="newsletter bg-brand-3 pt-100 pb-100">
        <div class="container">
            <div class="position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-title-2 mb-65">
                            <h4 class="mb-0 text-grey-400 wow fadeIn animated">
                                <img src="{{asset('frontend/assets/imgs/theme/svg/send.svg')}}" alt="">
                                <span>Подпишитесь на наш канал в телеграме</span>
                            </h4>
                        </div>
                        <div>
                            <button class="btn btn-lg bg-brand-1 mr-30" type="submit">
                                <a href="" class="text-white">
                                    Подписаться
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <img src="{{asset('frontend/assets/imgs/theme/sketch-1.png')}}" alt=""
                     class="sketch-1 wow fadeIn animated">
            </div>
        </div>
    </section>
@endsection
