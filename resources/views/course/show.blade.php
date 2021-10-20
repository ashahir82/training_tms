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
                                    <label for="code" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="code"
                                            value="{{ $course->code }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="name"
                                            value="{{ $course->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="description"
                                            value="{{ $course->description }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="is_active" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="is_active"
                                            @if ($course->is_active == '1')
                                        value="Active"
                                    @else
                                        value="Inactive"
                                        @endif
                                        >
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{ route('course.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i></a>
                                    <a class="btn btn-info" href="{{ route('course.edit', $course->id) }}" role="button">Edit</a>
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
