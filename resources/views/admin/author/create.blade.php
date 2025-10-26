@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        Авторы - Создание</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid project-create">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form theme-form">
                            <form action="{{route('admin.authors.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 w-50">
                                            <label>Имя автора</label>
                                            <input class="form-control" type="text" placeholder="введите имя автора"
                                                   name="name">
                                        </div>
                                    </div>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 w-50">
                                            <label>Описание или название деятельности</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea4"
                                                      rows="3" name="lead"></textarea>
                                        </div>
                                    </div>
                                    @error('lead')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 w-50">
                                            <label>Фото автора</label>
                                            <input class="form-control" type="file" data-bs-original-title="" title=""
                                                   name="image">
                                        </div>
                                    </div>
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 w-50">
                                            <label>Создатель</label>
                                            <select class="form-select digits" id="exampleFormControlSelect9" name="user_id">
                                                <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    @error('user_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-end w-50 justify-content-start">
                                            <a class="btn btn-light" href="">Отмена</a>
                                            <button type="submit" class="btn btn-success me-3" href="">Создать</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
