@extends('layouts.frontend')

@section('content')
    <section class="pt-65 pb-35 bg-brand-4">
        <div class="container">
            <div class="archive-header">
                <div class="archive-header-title">
                    <h1 class="font-heading mb-30">Contact
                    </h1>
                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit<br> Asperiores non dolor officiis eaque corporis.</p>
                </div>
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Contact
                </div>
            </div>
        </div>
    </section>
    <section class="pt-100 pb-65">
        <div class="container">
            <h3 class="font-heading mb-50">Get in Touch</h3>
            <div class="row">
                <div class="col-md-8">
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                    <label class="form-check-label label_info fw-700 text-grey-100 font-md"><span>Save my name, email, and website in this browser for the next time</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg bg-dark text-white" type="submit">Finish & Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="pl-30">
                        <div class="icon-map mb-15 hover-up-3">
                            <img src="assets/imgs/theme/svg/map.svg" alt="">
                        </div>
                        <h5 class="mb-50">
                            Lorem 142 Str, 2352, Ipsum<br> State, USA
                        </h5>
                        <div class="icon-map mb-15 hover-up-3">
                            <img src="assets/imgs/theme/svg/map.svg" alt="">
                        </div>
                        <h5>
                            Lorem 142 Str, 2352, Ipsum<br> State, USA
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
