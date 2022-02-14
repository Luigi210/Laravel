@extends('lay.admin_layout')

@section('title', 'Редактирование Иконки')

@section('content')

    <!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование новости: {{$contents['title']}}</h1>
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
                        <form action="{{route('about_found_content.update', $contents['id'])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Введите заголовок новости" value="{{$contents['title']}}" required>
                                </div>
                                

                                <div class="form-group">
                                    <textarea name="description" class="editor" style="resize:both">{{$contents['description']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Изображение</label>
                                    <img src="{{$contents['image']}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="image" class="form-control" id="feature_image"
                                        placeholder="Введите Иконку" value="{{$contents['image']}}" required>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Изменить изображение</a>
                                    
                                </div>
                                <div class="form-group">
                                    <select name="found_id" class="form-control" required>
                                        @foreach($founds as $found)
                                            <option value="{{$found['id']}}">{{$found['id']}}. {{$found['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection