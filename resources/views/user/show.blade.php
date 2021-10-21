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
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="password"
                                            value="{{ $user->password }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="profile_img" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="profile_img"
                                            value="{{ $user->profile_img }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="gender"
                                            value="{{ $user->gender }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_id" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="course_id"
                                            value="{{ $user->course_id }}">
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{ route('user.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i></a>
                                    <a class="btn btn-info" href="{{ route('user.edit', $user->id) }}" role="button">Edit</a>
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
