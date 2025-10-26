@extends('layouts.frontend')

@section('content')
    <section class="recent-posts pt-65 pb-30 position-relative">
        <div class="bg-square-2"></div>
        <div class="container">
            <div class="header-title mb-65">
                <h3 class="font-heading mb-0 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn; color: white;">Пьесы</h3>
            </div>
            <div class="row">
                @if(isset($plays))
                    @foreach($plays as $play)
                        <article class="col-lg-6 col-md-6 mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                            <div class="post-card-1 large border-radius-10 hover-up">
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <div class="entry-meta meta-1 float-left font-md mb-10">
                                            <span class="post-on has-dot">{{$play->created_at}}</span>
                                        </div>
                                        <h4 class="post-title mb-30">
                                            <a href="single.html">{{$play->name}}</a>
                                        </h4>
                                        <div class="post-meta-2 font-md">
                                            <a href="page-author.html">
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
@endsection
