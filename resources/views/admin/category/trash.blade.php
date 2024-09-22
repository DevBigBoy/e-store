@extends('admin.layouts.master')

@section('page-title', 'category')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="{{ route('dashboard.categories.index') }}">Category</a>
                </div>
                <div class="breadcrumb-item">All</div>
            </div>
        </div>


        <div class="row">
            <form method="GET" action="{{ route('dashboard.categories.index') }}"
                class="row d-flex align-content-center align-items-baseline w-100">

                <div class="form-group col-md-3 pr-0">
                    <input type="text" id="name_en" name="name_en" class="form-control"
                        value="{{ request()->get('name_en') }}" placeholder="Search by English name">
                </div>

                <div class="form-group col-md-2 pr-0">
                    <input type="text" id="name_ar" name="name_ar" class="form-control"
                        value="{{ request()->get('name_ar') }}" placeholder="Search by Arabic name">
                </div>

                <div class="form-group col-md-2 pr-0">
                    <select id="category" name="category" class="form-control">
                        <option value="">All Parent Categories</option>
                        @foreach ($parents as $parent)
                            <option @selected(request()->get('category') == $parent->id) value="{{ $parent->id }}">{{ $parent->name_en }} -
                                {{ $parent->name_ar }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2 pr-0 mr-2">
                    <select id="status" name="status" class="form-control">
                        <option value="">Choose Status</option>
                        <option @selected(request()->get('status') == 'active') value="active">Active</option>
                        <option @selected(request()->get('status') == 'archived') value="archived">Archived</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary col-md-1">Search</button>
                @if (request()->hasAny(['name_en', 'name_ar', 'status', 'category']))
                    <a href="{{ route('dashboard.categories.index') }}" class="btn btn-danger col-md-1 ml-2">Clear</a>
                @endif
            </form>


        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>Name (English)</th>
                                            <th>Name (Arabic)</th>
                                            <th>Parent</th>
                                            <th>Iamge</th>
                                            <th>H.m Products</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($categories as $key=> $category)
                                            <tr>
                                                <td class="p-0 text-center">
                                                    {{ $key + 1 }}
                                                </td>

                                                <td>{{ $category->name_en }}</td>

                                                <td>{{ $category->name_ar }}</td>

                                                <td>{{ $category->parent->name_en }}</td>

                                                <td>
                                                    <img src="{{ asset('storage/' . $category->image) }}" alt=""
                                                        width="100px">
                                                </td>

                                                <td>{{ $category->products_count }}</td>

                                                <td>
                                                    <div class="badge badge-success">{{ $category->status }}</div>
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="far fa-edit"></i>
                                                    </a>

                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <td>
                                                No Available data in this table
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center">
                                    {{ $categories->appends(request()->input())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/components-table.js') }}"></script>
@endpush
