<x-app-layout>
    @section('admin_title','Product')
    @section('admin_content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Product</h2>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Data Table</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Brand</th>
                                                <th>Unit</th>
                                                <th>Regular Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Brand</th>
                                                <th>Unit</th>
                                                <th>Regular Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{  $product->category->name  }}</td>
                                                    <td>{{  $product->subcategory->name  }}</td>
                                                    <td>{{  $product->brand->name  }}</td>
                                                    <td>{{  $product->unit->name  }}</td>
                                                    <td>{{  $product->regular_price  }}</td>
                                                    <td>{{ $product->status === 1 ? 'Active' : 'Inactive' }}</td>
                                                    <td>
                                                        {{-- <a href="" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a> --}}

                                                        <a href="{{ route('admin.product.show',$product->product_slug) }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>

                                                        {{-- <a href="{{ route('admin.subcategory.destroy',$subcategory->subcategory_slug) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('subcategoryDelete{{ $subcategory->subcategory_slug }}').submit();"><i class="fas fa-trash"></i></a> --}}

                                                        {{-- <form action="{{ route('admin.subcategory.destroy',$subcategory->subcategory_slug) }}" id="subcategoryDelete{{ $subcategory->subcategory_slug }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form> --}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- {{ $products->link() }} --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</x-app-layout>
