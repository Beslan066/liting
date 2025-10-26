@extends('layouts.frontend')

@section('content')
    <section class="pt-65 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-md-30">
                    <h2 class="display-2 mb-15 font-heading">{{$author->name}}</h2>
                    @if(isset($author->lead))
                        <p class="font-lg text-grey-600 mb-30">
                            {{$author->lead}}
                        </p>
                    @endif
                    <div class="header-title mb-65">
                    <span class="sub-header-title text-grey-400 wow fadeIn animated">
                        {{ $author->proses->count() }} проза,
                        {{ $author->poesies->count() }} стихи,
                        {{ $author->plays->count() }} пьесы,
                        {{ $author->jubilees->count() }} юбилеи
                    </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('storage/public/' .$author->image)}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="recent-posts pt-65 pb-30 position-relative">
        <div class="bg-square-2"></div>
        <div class="container">
            <div class="row">
                <!-- Проза -->
                @if($author->proses->count() > 0)
                    <div class="col-12 mb-50">
                        <h3 class="mb-65 font-heading wow fadeIn  animated" style="color: white;">Проза</h3>
                        <div class="row">
                            @foreach($author->proses as $prose)
                                <article class="col-lg-4 col-md-6 mb-30 wow fadeIn animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        @if($prose->image)
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                 style="background-image: url({{ asset('storage/public/' . $prose->image) }})">
                                                <a class="img-link" href=""></a>
                                                <div class="post-meta-1 mb-20">
                                                    <span
                                                        class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">Проза</span>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="post-content p-30">
                                            <div class="post-card-content">
                                                <h5 class="post-title font-md">
                                                    <a href="">{{ $prose->name }}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 font-sm mt-15">
                                                    <span
                                                        class="post-on">{{ $prose->created_at->format('d M Y') }}</span>
                                                    <span
                                                        class="time-to-read has-dot">{{ $prose->views }} просмотров</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Стихи -->
                @if($author->poesies->count() > 0)
                    <div class="col-12 mb-50">
                        <h3 class="mb-65 font-heading wow fadeIn  animated" style="color: white;">Стихи</h3>
                        <div class="row">
                            @foreach($author->poesies as $poesy)
                                <article class="col-lg-4 col-md-6 mb-30 wow fadeIn animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        @if($poesy->image)
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                 style="background-image: url({{ asset('storage/public/' . $poesy->image) }})">
                                                <a class="img-link"></a>
                                                <div class="post-meta-1 mb-20">
                                                    <span
                                                        class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Стихи</span>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="post-content p-30">
                                            <div class="post-card-content">
                                                <h5 class="post-title font-md">
                                                    <a>{{ $poesy->name }}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 font-sm mt-15">
                                                    <span
                                                        class="post-on">{{ $poesy->created_at->format('d M Y') }}</span>
                                                    <span
                                                        class="time-to-read has-dot">{{ $poesy->views }} просмотров</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Пьесы -->
                @if($author->plays->count() > 0)
                    <div class="col-12 mb-50">
                        <h3 class="mb-65 font-heading wow fadeIn  animated" style="color: white;">Пьесы</h3>
                        <div class="row">
                            @foreach($author->plays as $play)
                                <article class="col-lg-4 col-md-6 mb-30 wow fadeIn animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        @if($play->image)
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                 style="background-image: url({{ asset('storage/public/' . $play->image) }})">
                                                <a class="img-link"></a>
                                                <div class="post-meta-1 mb-20">
                                                    <span
                                                        class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Пьесы</span>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="post-content p-30">
                                            <div class="post-card-content">
                                                <h5 class="post-title font-md">
                                                    <a>{{ $play->name }}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 font-sm mt-15">
                                                    <span
                                                        class="post-on">{{ $play->created_at->format('d M Y') }}</span>
                                                    <span
                                                        class="time-to-read has-dot">{{ $play->views }} просмотров</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Юбилеи -->
                @if($author->jubilees->count() > 0)
                    <div class="col-12">
                        <h3 class="mb-65 font-heading wow fadeIn  animated" style="color: white;">Юбилеи</h3>
                        <div class="row">
                            @foreach($author->jubilees as $jubilee)
                                <article class="col-lg-4 col-md-6 mb-30 wow fadeIn animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        @if($jubilee->image)
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                 style="background-image: url({{ asset('storage/public/' . $jubilee->image) }})">
                                                <a class="img-link"></a>
                                                <div class="post-meta-1 mb-20">
                                                    <span
                                                        class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Юбилеи</span>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="post-content p-30">
                                            <div class="post-card-content">
                                                <h5 class="post-title font-md">
                                                    <a>{{ $jubilee->name }}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 font-sm mt-15">
                                                    <span
                                                        class="post-on">{{ $jubilee->created_at->format('d M Y') }}</span>
                                                    <span
                                                        class="time-to-read has-dot">{{ $jubilee->views }} просмотров</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endif
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
                                <img src="assets/imgs/theme/svg/send.svg" alt="">
                                <span>Subscribe</span>
                            </h4>
                            <h3 class="font-heading wow fadeIn animated">to Our Newsletter</h3>
                        </div>
                        <form class="form-subcriber mt-30 d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <img src="assets/imgs/theme/sketch-1.png" alt="" class="sketch-1 wow fadeIn animated">
            </div>
        </div>
    </section>
@endsection
