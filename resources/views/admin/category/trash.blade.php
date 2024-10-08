@extends('admin.layouts.master')

@section('page-title', 'Trash category')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Trash Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="{{ route('dashboard.categories.index') }}">Category</a>
                </div>
                <div class="breadcrumb-item">Trashed</div>
            </div>
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
                                                    @if ($category->status == 'active')
                                                        <div class="badge badge-success">{{ $category->status }}</div>
                                                    @else
                                                        <div class="badge badge-danger">{{ $category->status }}</div>
                                                    @endif
                                                </td>

                                                <td>
                                                    <form
                                                        action="{{ route('dashboard.categories.restore', $category->id) }}"
                                                        method="post" class="d-inline-block">
                                                        @csrf
                                                        <!-- Form Method Spofing -->
                                                        @method('PUT')
                                                        <a href="{{ route('dashboard.categories.restore', $category->id) }}"
                                                            class="btn btn-warning"
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            Restore
                                                        </a>
                                                    </form>

                                                    <form
                                                        action="{{ route('dashboard.categories.forcedelete', $category->id) }}"
                                                        method="post" class="d-inline-block">
                                                        @csrf
                                                        <!-- Form Method Spofing -->
                                                        @method('DELETE')
                                                        <a href="{{ route('dashboard.categories.forcedelete', $category->id) }}"
                                                            class="btn btn-danger "
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <td colspan="8"
                                                class="text-center text-capitalize font-weight-bold lead bg-secondary">
                                                No Available data in this table
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center">
                                    {{ $categories->links() }}
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
