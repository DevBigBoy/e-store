@extends('layouts.master')

@section('title', 'Shozo Store - Category')

@section('breadcrumb-title', 'All Categories')

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        Categories
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Create New
                    </a>
                    <a href="{{ route('dashboard.categories.trash') }}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>

                        Trashed Categories
                    </a>
                </div>
                <!-- /.card-header -->
                <x-alert type="success" />
                <x-alert type="info" />

                <div class="card-body">


                    <form action="{{ URL::current() }}" method="get" class="">
                        <div class="row d-flex justify-content-between align-items-baseline mb-4">

                            <input class="form-control col-5" type="text" placeholder="Search" name="name"
                                value="{{ request('name') }}">

                            <div class="form-group col-4">
                                <select class="form-control" name="status">
                                    <option value="">All</option>
                                    <option value="active" @seleted(request('status') == 'active')>Active</option>
                                    <option value="archived" @seleted(request('status') == 'archived')>Archived</option>
                                </select>

                            </div>

                            <button class="btn btn-dark col-2" type="submit">Search</button>
                        </div>
                    </form>


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Parent(s)</th>
                                <th>status</th>
                                <th>slug</th>
                                <th>H.M Products</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>
                                        @if ($category->image)
                                            <img src="{{ asset($category->image) }}" height="60px" alt="">
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('dashboard.categories.show', $category->id) }}" class="">
                                            {{ $category->name }}
                                        </a>
                                    </td>

                                    <td>{{ $category->parent->name }}</td>
                                    <td class="text-center">
                                        @if ($category->status == 'active')
                                            <span class="badge badge-success" style="font-size: 100%">
                                                {{ $category->status }}
                                            </span>
                                        @else
                                            <span class="badge badge-danger" style="font-size: 100%">
                                                {{ $category->status }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->products_count }}</td>
                                    <td class="d-flex justify-center align-items-center">
                                        <a href="{{ route('dashboard.categories.edit', $category->id) }}"
                                            class="btn btn-primary mr-2">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('dashboard.categories.destroy', $category->id) }}"
                                            method="post">
                                            @csrf
                                            <!-- Form Method Spofing -->
                                            @method('DELETE')
                                            <a href="{{ route('dashboard.categories.destroy', $category->id) }}"
                                                class="btn btn-danger"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="fas fa-trash-alt"></i>
                                                Delete
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">
                                        No categories defined.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $categories->withQueryString()->links() }}


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Page specific script -->

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "searching": false,
                "autoWidth": false,
                "paging": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
