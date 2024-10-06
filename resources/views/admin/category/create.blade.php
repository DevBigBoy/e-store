@extends('admin.layouts.master')

@section('page-title', 'category')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-iconpicker.min.css') }}">
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">Categories</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create New Category</h2>


            <div class="row">
                <div class="col-12 col-md-10 col-lg-10 m-auto">
                    <div class="card">
                        <form action="{{ route('dashboard.categories.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="card-header">
                                <h4>New Category</h4>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="image">image</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Icon</label>
                                        <div class="">

                                            <button data-unselected-class="btn-primary" data-iconset="fontawesome5"
                                                data-icon="fas fa-wifi" class="btn btn-primary" role="iconpicker"
                                                name="icon"></button>
                                        </div>

                                    </div>

                                </div>


                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name">
                                    @error('name_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"></textarea>
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
                                            <option>Choose...</option>
                                            <option value="">Primary Category</option>

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->name }}</option>
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
                                        <select name="status" class="form-control">
                                            <option>Choose...</option>
                                            <option value="active">Active</option>
                                            <option value="archived">archived</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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


@push('scripts')
    <script src="{{ asset('admin/assets/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
@endpush
