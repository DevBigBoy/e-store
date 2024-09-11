@extends('layouts.master')

@section('title', 'Products')

@section('breadcrumb-title', 'All Products')

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        Products
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('dashboard.products.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Create New
                    </a>

                    @if (Route::has('dashboard.products.trash'))
                        <a href="{{ route('dashboard.products.trash') }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            Trashed Categories
                        </a>
                    @endif
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
                                <th>image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Store</th>
                                <th>price</th>
                                <th>compare_price</th>
                                <th>status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>

                                    <td>
                                        @if ($product->image)
                                            <img src="{{ asset($product->image) }}" height="60px" alt="">
                                        @endif
                                    </td>

                                    <td>{{ $product->name }}</td>
                                    <!-- SELECT * cateories WHERE id = $product->category_id This query will run for every row -->
                                    <td>{{ $product->category->name }}</td>
                                    <!-- bed for performance -->
                                    <!-- SELECT * Stores WHERE id = $product->store_id This query will run for every row this is called N+1 problem -->
                                    <td>{{ $product->store->name }}</td>

                                    <td>{{ $product->price }}</td>

                                    <td>{{ $product->compare_price }}</td>

                                    <td class="text-center">
                                        @if ($product->status == 'active')
                                            <span class="badge badge-success" style="font-size: 100%">
                                                {{ $product->status }}
                                            </span>
                                        @else
                                            <span class="badge badge-danger" style="font-size: 100%">
                                                {{ $product->status }}
                                            </span>
                                        @endif
                                    </td>

                                    <td class="d-flex justify-center align-items-center">
                                        <a href="{{ route('dashboard.products.edit', $product->id) }}"
                                            class="btn btn-primary mr-2">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('dashboard.products.destroy', $product->id) }}"
                                            method="post">
                                            @csrf
                                            <!-- Form Method Spofing -->
                                            @method('DELETE')
                                            <a href="{{ route('dashboard.products.destroy', $product->id) }}"
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
                                    <td colspan="9" class="text-center">
                                        No Products defined.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $products->withQueryString()->links() }}


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
