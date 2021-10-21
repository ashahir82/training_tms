@extends('app')

@section('content')
    @include('layouts.contentheader')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $subTitle }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('student.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ic" class="col-sm-2 col-form-label">No. IC</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ic" name="ic">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ndp" class="col-sm-2 col-form-label">NDP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ndp" name='ndp'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel_no" class="col-sm-2 col-form-label">No. Tel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tel_no" name='tel_no'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="gender" name="gender">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_id" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="course_id" name="course_id">
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{ route('student.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i></a>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
@endsection
