@extends('layouts.frontend')

@section('content')
    <div class="recent-posts pt-65 pb-65 position-relative">
        <div class="container">
            <div class="row">
                <div class="header-title mb-65">
                    <h3 class="font-heading mb-0 wow fadeIn   animated" style="visibility: visible; animation-name: fadeIn; ">Поэзия</h3>
                </div>
                <div class="col-md-12 loop-list loop-list-style-1 loop-list-2  mb-md-30">
                    @if(isset($poesies))
                        @foreach($poesies as $poesy)
                            <article class="hover-up-3 border-radius-10 overflow-hidden wow fadeIn animated">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                             @if(isset($poesy->image))style="background-image: url({{asset('storage/public/' . $poesy->image)}})"

                                             @else
                                                 style="background-image: url({{asset('frontend/assets/imgs/ornament.png')}})"
                                            @endif>
                                            <a class="img-link" href="single.html"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="post-content pr-30">
                                            <h3 class="post-title mb-40">
                                                <a class="" href="">{{$poesy->name}}</a>
                                            </h3>
                                            <div class="d-flex">
                                                <div class="post-meta-2 font-md d-flex w-70">
                                                    <a class="align-self-center" href="page-author.html" tabindex="0">
                                                        <img src="{{asset('storage/public/' . $poesy->author->image)}}" alt="">
                                                    </a>
                                                    <div class="mb-0">
                                                        <a href="page-author.html" tabindex="0"> <strong class="author-namge">{{$poesy->author->name}}</strong></a>
                                                        <p class="post-on font-sm text-grey-400 mb-0">{{$poesy->created_at}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="text-center mt-65">
                <button class="btn btn-lg bg-dark text-white d-inline-block">Показать еще</button>
            </div>
        </div>
    </div>
    <section class="newsletter bg-brand-3 pt-100 pb-100">
        <div class="container">
            <div class="position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-title-2 mb-65">
                            <h4 class="mb-0 text-grey-400 wow fadeIn animated">
                                <img src="{{asset('frontend/assets/imgs/theme/svg/send.svg')}}" alt="">
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
                <img src="{{asset('frontend/assets/imgs/theme/sketch-1.png')}}" alt="" class="sketch-1 wow fadeIn animated">
            </div>
        </div>
    </section>
@endsection
