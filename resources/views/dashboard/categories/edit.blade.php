@extends('layouts.master')

@section('title', 'Shezo Store - Category')

@section('breadcrumb-title', 'Edit Category')



@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.categories.index') }}">Categories</a>
    </li>
    <li class="breadcrumb-item active">
        Edit
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('dashboard.categories.index') }}" class="btn btn-warning">
                        <i class="fas fa-arrow-left"></i>
                        Back
                    </a>
                </div>
                <!-- /.card-header -->

                <form method="POST" action="{{ route('dashboard.categories.update', $category->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" @class(['form-control', 'is-invalid' => $errors->has('name')]) id="name" placeholder="Name"
                                name="name" value="{{ $category->name }}">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" placeholder="write Something about your category" name="description">
                                {{ $category->description }}
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
                                        <option value="active" @selected($category->status == 'active')>Active
                                        </option>
                                        <option value="archived" @selected($category->status == 'archived')>Archived</option>
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
                                            <option value="{{ $parent->id }}" @selected($category->parent_id == $parent->id)>
                                                {{ $parent->name }}</option>
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

                            @if ($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" height="70px" alt="">
                            @endif

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
