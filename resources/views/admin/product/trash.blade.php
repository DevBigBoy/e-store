@extends('admin.layouts.master')

@section('page-title', 'Trash Products')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="{{ route('dashboard.products.index') }}">Product</a>
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
                                            <th>ID </th>
                                            <th>Name (English)</th>
                                            <th>Store Name</th>
                                            <th>Category Name</th>
                                            <th>Iamge</th>
                                            <th>Price</th>
                                            <th>DisCount price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($products as $key=> $product)
                                            <tr>
                                                <td class="p-0 text-center">
                                                    {{ $key + 1 }}
                                                </td>

                                                <td>{{ $product->name }}</td>

                                                <td>{{ $product->store->name }}</td>

                                                <td>{{ $product->category->name_en }}</td>

                                                <td>
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                                        width="100px">
                                                </td>

                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->compare_price }}</td>

                                                <td>
                                                    @if ($product->status == 'active')
                                                        <div class="badge badge-success">Active</div>
                                                    @elseif ($product->status == 'draft')
                                                        <div class="badge badge-warning">Active</div>
                                                    @else
                                                        <div class="badge badge-danger">Archived</div>
                                                    @endif
                                                </td>

                                                <td style="width: 200px">
                                                    <form action="{{ route('dashboard.products.restore', $product->id) }}"
                                                        method="post" class="d-inline-block">
                                                        @csrf
                                                        @method('Put')
                                                        <a href="{{ route('dashboard.products.restore', $product->id) }}"
                                                            class="btn btn-success "
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="fas fa-trash-alt"></i> Restore
                                                        </a>
                                                    </form>

                                                    <form
                                                        action="{{ route('dashboard.products.forcedelete', $product->id) }}"
                                                        method="post" class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('dashboard.products.forcedelete', $product->id) }}"
                                                            class="btn btn-danger "
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <td colspan="9"
                                                class="text-center text-capitalize font-weight-bold lead bg-secondary">
                                                No Available data in this table
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center">
                                    {{ $products->links() }}
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
