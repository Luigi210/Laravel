@extends('lay.admin_layout')

@section('title', 'Добавить Новости')

@section('content')

    <!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить Работника</h1>
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
                        <form action="{{route('employee.update', $employees['id'])}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">ФИО</label>
                                    <input type="text" name="name" class="form-control" id=""
                                        placeholder="Введите команду" value="{{$employees['name']}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Должность</label>
                                    <input type="text" name="position" class="form-control" id=""
                                        placeholder="Введите тип" value="{{$employees['position']}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Member Id</label>
                                    {{-- <input type="text" name="found_id" class="form-control" id="exampleInputEmail1"
                                        placeholder="Введите Found ID" required> --}}
                                    <select name="member_id" class="form-control" required>
                                        @foreach($members as $member)
                                            <option value="{{$member['id']}}">{{$member['id']}}. {{$member['title']}}</option>
                                        @endforeach
                                    </select>
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