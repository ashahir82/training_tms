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
                            <form>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="name"
                                            value="{{ $student->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ic" class="col-sm-2 col-form-label">No. IC</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="ic"
                                            value="{{ $student->ic }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ndp" class="col-sm-2 col-form-label">NDP</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="ndp"
                                            value="{{ $student->ndp }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel_no" class="col-sm-2 col-form-label">No. Tel</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="tel_no"
                                            value="{{ $student->tel_no }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="gender"
                                            value="{{ $student->gender }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_id" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="course_id"
                                            value="{{ $student->course_id }}">
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{ route('student.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i></a>
                                    <a class="btn btn-info" href="{{ route('student.edit', $student->id) }}" role="button">Edit</a>
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
