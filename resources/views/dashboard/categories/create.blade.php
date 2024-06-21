@extends('layouts.master')

@section('title', 'Shozo Store - Category')

@section('breadcrumb-title', 'Create Category')



@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('categories.index') }}">Categories</a>
    </li>
    <li class="breadcrumb-item active">
        create
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('categories.index') }}" class="btn btn-warning">
                        <i class="fas fa-arrow-left"></i>
                        Back
                    </a>
                </div>
                <!-- /.card-header -->

                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    @csrf

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                autofocus value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" placeholder="write Something about your category" name="description">
                                {{ old('description') }}
                            </textarea>

                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Status -->
                                <div class="form-group">
                                    <label>status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Status</option>
                                        <option value="active">Active</option>
                                        <option value="archived">Archived</option>
                                    </select>

                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Category Parent</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="">Primary Category</option>
                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('parent_id'))
                                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Category's Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
