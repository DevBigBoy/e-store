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
                </div>
                <!-- /.card-header -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Parent(s)</th>
                                <th>status</th>
                                <th>slug</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $category->image) }}" height="60px" alt="">
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->parent->name ?? 'Primary category' }}</td>
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
                                    <td>{{ $category->created_at }}</td>
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
                                    <td colspan="6" class="text-center">
                                        No categories defined.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
