@extends('layouts.frontend')

@section('content')
    <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white" style="background-image: url({{asset('storage/public/' . $play->image)}})">
        <div class="entry-header-content">
            <div class="post-meta-1 mb-20">
                <a href="category.html" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Lifestyle</a>
                <span class="post-date  text-white font-md">{{$play->created_at}}</span>
            </div>
            <h1 class="entry-title mb-50 fw-700">
                {{$play->name}}
            </h1>
            <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                <a href="{{route('frontend.authorSingle', $play->author->id)}}" tabindex="0">
                    <img src="{{asset('storage/public/' . $play->author->image)}}" alt="">
                    <span class="author-namge">{{$play->author->name}}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container single-content">
        <article class="entry-wraper mb-50">
            @if(isset($play->lead))
                <div class="excerpt mb-30">
                    <p>{{$play->lead}}</p>
                </div>
            @endif
            <div class="entry-main-content wow fadeIn animated">
                {!! $play->content !!}
            </div>
            <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                <div class="single-social-share clearfix wow fadeIn animated mb-15 w-50 w-sm-100">
                    <ul class="header-social-network d-inline-block list-inline  mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                </div>
            </div>
        </article>
    </div>
@endsection
