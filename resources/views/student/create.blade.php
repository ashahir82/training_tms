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
                                    <label for="name" class="col-sm-2 col-form-label">
                                        Name
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ic" class="col-sm-2 col-form-label">
                                        No. IC
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ic" name="ic" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ndp" class="col-sm-2 col-form-label">
                                        NDP
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ndp" name='ndp' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel_no" class="col-sm-2 col-form-label">
                                        No. Tel
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tel_no" name='tel_no' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label">
                                        Gender
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select name="gender" class="form-control" id="gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_id" class="col-sm-2 col-form-label">
                                        Course
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select name="course_id" class="form-control" id="course_id" required>
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
