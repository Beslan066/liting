@extends('layouts.frontend')

@section('content')
    <section class="recent-posts pt-65 pb-30 position-relative">

        <div class="container">
            <div class="header-title mb-65">
                <h3 class="font-heading mb-0 wow fadeIn  animated"
                    style="visibility: visible; animation-name: fadeIn;">Авторы</h3>
            </div>
            <div class="row">
                @if(isset($authors))
                    @foreach($authors as $author)
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeIn  animated"
                                 style="visibility: visible; animation-name: fadeIn;">
                            <div class="post-card-1 large border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                     style="max-width: 540px; height: 250px">
                                    <img src="{{asset('storage/public/' . $author->image)}}" alt="" style="object-fit: cover">
                                </div>
                                <div class="post-content p-30">
                                    <div class="post-card-content">
                                        <h4 class="post-title mb-30">
                                            <a href="{{route('frontend.authorSingle', $author->id)}}">{{$author->name}}</a>
                                        </h4>
                                        <span class=" text-grey-400 wow fadeIn animated">
                        {{ $author->proses->count() }} проза,
                        {{ $author->poesies->count() }} стихи,
                        {{ $author->plays->count() }} пьесы,
                        {{ $author->jubilees->count() }} юбилеи
                    </span>
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
