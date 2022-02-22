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
                        <form action="{{route('footer_about_partners.update', $footerAboutPartners['id'])}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Название</label>
                                    <input type="text" name="title" class="form-control" id=""
                                        placeholder="Введите название" value="{{$footerAboutPartners['title']}}" required>
                                </div>


                                <div class="form-group">
                                    <label for="feature_image">Footer Id</label>
                                    <input type="text" name="footer_id" class="form-control"
                                        placeholder="Введите Footer ID" value="{{$footer['id']}}" required>
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