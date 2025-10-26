@extends('layouts.frontend')

@section('content')
    <section class="recent-posts pt-65 pb-30 position-relative">
        <div class="bg-square-2"></div>
        <div class="container">
            <div class="header-title mb-65">
                <h3 class="font-heading mb-0 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn; color: white;">Юбилеи</h3>
            </div>
            <div class="row">
                @if(isset($jubilees))
                    @foreach($jubilees as $jubilee)
                        <article class="col-lg-6 col-md-6 mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                            <div class="post-card-1 large border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('storage/public/' . $jubilee->image)}})">
                                    <a class="img-link" href="single.html"></a>
                                    <div class="post-meta-1 mb-20">
                                        <a href="category.html" class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">Travel</a>
                                    </div>
                                </div>
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <div class="entry-meta meta-1 float-left font-md mb-10">
                                            <span class="post-on has-dot">{{$jubilee->created_at}}</span>
                                        </div>
                                        <h4 class="post-title mb-30">
                                            <a href="single.html">{{$jubilee->name}}</a>
                                        </h4>
                                        <div class="post-meta-2 font-md">
                                            <a href="page-author.html">
                                                <img src="{{asset('storage/public/' . $jubilee->author->image)}}" alt="">
                                                <span class="author-namge">{{$jubilee->author->name}}</span>
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
@endsection
