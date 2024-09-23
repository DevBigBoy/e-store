@extends('admin.layouts.master')

@section('page-title', 'Product')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('dashboard.products.index') }}">Products</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create New Product</h2>


            <div class="row">
                <div class="col-12 col-md-10 col-lg-10 m-auto">
                    <div class="card">
                        <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>New Product</h4>
                            </div>

                            <div class="card-body">
                                <!-- Image -->
                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    <input type="file" @class(['form-control-file', 'is-invalid' => $errors->has('image')]) id="image" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Name -->
                                <div class="form-group ">
                                    <label>Name (English)</label>
                                    <input type="text" @class(['form-control', 'is-invalid' => $errors->has('name')]) name="name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea @class(['form-control', 'is-invalid' => $errors->has('description')]) name="description"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- price - Compare Price -->
                                <div class="row mb-2">
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="number" @class(['form-control', 'is-invalid' => $errors->has('price')]) name="price"
                                            value="{{ old('price') }}">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Compare price</label>
                                        <input type="number" @class([
                                            'form-control',
                                            'is-invalid' => $errors->has('compare_price'),
                                        ]) name="compare_price"
                                            value="{{ old('compare_price') }}">
                                        @error('compare_price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label>Category</label>
                                        <select name="category_id" @class(['form-control', 'is-invalid' => $errors->has('category_id')])>
                                            <option value="">Select a Category</option>
                                            @foreach ($categories as $parent)
                                                <optgroup label="{{ $parent->name_en }}-{{ $parent->name_ar }}">
                                                    @foreach ($parent->children as $child)
                                                        <option value="{{ $child->id }}">
                                                            {{ $child->name_en }} - {{ $child->name_ar }}
                                                        </option>
                                                    @endforeach
                                                </optgroup>
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
                                        <select name="status" @class(['form-control', 'is-invalid' => $errors->has('status')])>
                                            <option value="">Choose...</option>
                                            <option value="active">Active</option>
                                            <option value="draft">draft</option>
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
