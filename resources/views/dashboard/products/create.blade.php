@extends('layouts.master')

@section('title', 'Shozo Store - Products')

@section('breadcrumb-title', 'Create Product')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.products.index') }}">Products</a>
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
                    <a href="{{ route('dashboard.products.index') }}" class="btn btn-warning">
                        <i class="fas fa-arrow-left"></i>
                        Back
                    </a>
                </div>
                <!-- /.card-header -->

                <form method="POST" action="{{ route('dashboard.products.store') }}" enctype="multipart/form-data">
                    @csrf

                    {{-- <x-input-error /> --}}

                    <x-alert type="success" />
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>

                            <x-form.input type="text" name="name" />
                        </div>

                        <div class="form-group">
                            <label>Description</label>

                            <textarea class="form-control" rows="4" placeholder="write Something about your Product" name="description">
                                {{ old('description') }}
                            </textarea>

                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="name">Price</label>

                            <x-form.input type="number" name="price" />
                        </div>

                        <div class="form-group">
                            <label for="name">Compare Price</label>
                            <x-form.input type="number" name="compare_price" />
                        </div>




                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Status -->
                                <div class="form-group">
                                    <label>status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Status</option>
                                        <option value="active">Active</option>
                                        <option value="draft">Draft</option>
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
                                        <option value="">Select a Category</option>
                                        @foreach ($categories as $parent)
                                            <optgroup label="{{ $parent->name }}">
                                                @foreach ($parent->children as $child)
                                                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach

                                    </select>

                                    @if ($errors->has('parent_id'))
                                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Status -->
                                <div class="form-group">
                                    <label>status</label>
                                    <select class="form-control" name="featured">
                                        <option value="">featured</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>

                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Product's Image</label>
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

                        <div class="form-group">
                            <label for="tags">Tags</label>

                            <x-form.input type="text" name="tags" />
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
