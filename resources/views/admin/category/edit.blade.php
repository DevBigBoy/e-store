@extends('admin.layouts.master')

@section('page-title', 'category')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">Categories</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Category</h2>

            <div class="row">
                <div class="col-12 col-md-10 col-lg-10 m-auto">
                    <div class="card">
                        <form action="{{ route('dashboard.categories.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('Put')
                            <div class="card-header">
                                <h4>Edit Category</h4>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="image">image</label>
                                    <input type="file" class="form-control-file" id="image" name="image">

                                    @if ($category->image)
                                        <div class="">
                                            <img src="{{ asset('storage/' . $category->image) }}" alt=""
                                                width="400px" height="300px">
                                        </div>
                                    @endif

                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Name (English)</label>
                                        <input type="text" class="form-control" name="name_en"
                                            value="{{ old('name_en', $category->name_en) }}">
                                        @error('name_en')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name (Arabic)</label>
                                        <input type="text" class="form-control" name="name_ar"
                                            value="{{ old('name_ar', $category->name_ar) }}">
                                        @error('name_ar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Description</label>

                                    <textarea class="form-control" name="description">{{ $category->description }}</textarea>

                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label>Category</label>
                                        <select name="parent_id" class="form-control">

                                            <option value="">Primary Category
                                            </option>

                                            @foreach ($parents as $parent)
                                                <option value="{{ $category->id }}" @selected($category->parent_id == $parent->id)>
                                                    {{ $category->name_en }} -
                                                    {{ $category->name_ar }}</option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
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
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>



                </div>

            </div>
        </div>
    </section>
@endsection
