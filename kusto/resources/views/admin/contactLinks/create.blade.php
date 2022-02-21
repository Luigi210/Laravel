@extends('lay.admin_layout')

@section('title', 'Добавить ссылки контактов')

@section('content')

    <!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить Хедер ссылку</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{route('contactLinks.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Ссылка</label>
                                    <input type="text" name="link" class="form-control" id=""
                                        placeholder="Введите ссылку" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Описание</label>
                                    <input type="text" name="description" class="form-control" id=""
                                        placeholder="Введите описание"  required>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Изображение новости</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="image" class="form-control" id="feature_image" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Header Id</label>
                                    <input type="text" name="table_header_id" class="form-control" id=""
                                        placeholder="Введите Header Id" readonly value="{{$header['id']}}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection