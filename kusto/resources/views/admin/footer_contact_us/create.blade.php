@extends('lay.admin_layout')

@section('title', 'Добавить ')

@section('content')

    <!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить</h1>
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
                        <form action="{{route('footer_contact_us.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Название</label>
                                    <input type="text" name="title" class="form-control" id=""
                                        placeholder="Введите название" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Ссылка</label>
                                    <input type="text" name="link" class="form-control" id=""
                                        placeholder="Введите ссылку" required>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Изображение</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="image" class="form-control" id="feature_image"
                                        value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Footer Id</label>
                                    <input type="text" name="footer_id" class="form-control" id="exampleInputEmail1"
                                        placeholder="Введите Footer ID" value="{{$footer['id']}}" required>
                                    {{-- <select name="member_id" class="form-control" required>
                                        @foreach($members as $member)
                                            <option value="{{$member['id']}}">{{$member['id']}}. {{$member['title']}}</option>
                                        @endforeach
                                    </select> --}}
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