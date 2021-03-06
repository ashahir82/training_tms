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
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        Name
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $user->name }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">
                                        Email
                                        <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ $user->email }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="profile_img" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <img src="{{ asset($user->profile_img) }}" alt="User Image" width="150">
                                        <input type="file" class="form-control-file" id="profile_img" name='profile_img'>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{ route('user.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i></a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
