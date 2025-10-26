@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Проза</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive theme-scrollbar">
                        <div id="basic-9_wrapper" class="dataTables_wrapper">
                            <div id="basic-9_filter"
                                 class="dataTables_filter d-flex align-items-center justify-content-between">
                                <div>
                                    <a href="{{route('admin.proses.create')}}" class="btn btn-outline-success" type="button" data-bs-original-title="" title="">Добавить</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="search"
                                           placeholder="Поиск..."
                                           name="name"
                                           style="margin-right: 5px"
                                    >
                                    <!-- Example split danger button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-filter"></i><span class="visually-hidden">Фильтр</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <table class="display dataTable" id="basic-9" role="grid" aria-describedby="basic-9_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-9" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                        style="width: 237.688px;">id
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-9" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                        style="width: 237.688px;">Имя
                                    </th>

                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-9" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                        style="width: 237.688px;">Изображение
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-9" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 319.422px;">Создан
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="basic-9" rowspan="1" colspan="1"
                                        aria-label="Action: activate to sort column ascending"
                                        style="width: 115.516px;">Действие
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($proses))
                                    @foreach($proses as $prose)
                                        <tr role="row" >
                                            <td>{{$prose->id}}</td>
                                            <td>{{$prose->name}}</td>
                                            <td>
                                                @if(isset($prose->image))
                                                    <img src="{{asset('storage/public/' . $prose->image)}}" alt="">
                                                @endif
                                            </td>
                                            <td>{{$prose->created_at}}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"><a href="{{route('admin.proses.edit', $prose->id)}}" data-bs-original-title="" title=""><i
                                                                class="icon-pencil-alt"></i></a></li>
                                                    <li class="delete">
                                                        <form action="{{route('admin.proses.delete', $prose->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                    style="background-color: transparent !important; border: none"
                                                                    onclick="return confirm('Вы уверены, что хотите удалить этого автора')"
                                                            >
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
