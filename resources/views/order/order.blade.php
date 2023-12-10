<x-app-layout>
    @section('admin_title','Product Order')
    @section('admin_content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Products Order</h2>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Data Table</div>
                                        <a href="{{ route('admin.order.downloadpdf') }}">Download Order Pdf</a>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Customer Name</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Product Name</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Customer Name</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Product Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                <tr>
                                                    <td><b>{{ $loop->iteration }}</b></td>
                                                    <td><b>{{ $order->first_name }} {{ $order->last_name }}</b></td>
                                                    <td><b>{{  $order->mobile }}</b></td>
                                                    <td><b>{{ $order->city }}, {{  $order->address  }}</b></td>
                                                    <td>
                                                        <ul>
                                                            @foreach ($order->orderitem as $oitem)
                                                            <li>
                                                                <b>
                                                                    {{ $oitem->product_name }} x {{ $oitem->quantity }} = {{ $oitem->total_price}}
                                                                </b>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    {{-- @if (auth()->user()->id === 1) --}}
                                                    <td>
                                                        <a href="{{ route('admin.order.orderStatus',$order->status) }}" class="orderStatus btn {{ $order->status == '0' ? 'btn-danger':'btn-success' }}">
                                                            {{ $order->status == '0' ? 'Pending' : 'Delivered' }}
                                                        </a>
                                                    </td>
                                                    {{-- @endif --}}
                                                    {{-- <td>
                                                        <a href="{{ route('admin.product.edit',$product->product_slug) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>

                                                        <a href="{{ route('admin.product.show',$product->product_slug) }}" class="btn btn-sm btn-secondary">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.product.destroy',$product->product_slug) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('productDelete{{ $product->product_slug }}').submit();">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <form action="{{ route('admin.product.destroy',$product->product_slug) }}" id="productDelete{{ $product->product_slug }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td> --}}
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
    @push('admin_script')
    <script>
    </script>
    @endpush
    @endsection
</x-app-layout>
