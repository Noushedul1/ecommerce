<x-app-layout>
    @section('admin_title','Brand')
    @section('admin_content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Brand</h2>
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
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($brands as $brand)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $brand->name }}</td>
                                                    <td>{!! $brand->description !!}</td>
                                                    <td>
                                                        <img src="{{ asset('admin/images/brand_images/'.$brand->image) }}" alt="{{ $brand->brand_slug }}" height="100" width="100">
                                                    </td>
                                                    <td>{{ $brand->status === 1 ? 'Active' : 'Inactive' }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.brand.edit',$brand->brand_slug) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>

                                                        <a href="{{ route('admin.brand.destroy',$brand->brand_slug) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('brandDelete{{ $brand->brand_slug }}').submit();"><i class="fas fa-trash"></i></a>

                                                        <form action="{{ route('admin.brand.destroy',$brand->brand_slug) }}" method="post" id="brandDelete{{ $brand->brand_slug }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $brands->links() }}
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
