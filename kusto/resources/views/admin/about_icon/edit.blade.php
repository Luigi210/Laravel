@extends('lay.admin_layout')

@section('title', 'Редактирование Иконки')

@section('content')

    <!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование иконки: {{$icons['title']}}</h1>
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
                        <form action="{{route('abouticon.update', $icons['id'])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="feature_image">Изображение</label>
                                    <img src="{{$icons['icon']}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="icon" class="form-control" id="feature_image"
                                        placeholder="Введите Иконку" value="{{$icons['icon']}}" required>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Изменить изображение</a>
                                    
                                </div>
                                <div class="form-group">
                                    <select name="employee_id" class="form-control" required>
                                        @foreach($employees as $employee)
                                            <option value="{{$employee['id']}}">{{$employee['id']}}. {{$employee['name']}}</option>
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