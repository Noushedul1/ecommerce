<x-app-layout>
    @section('admin_title','Category')
    @section('admin_content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Categories</h2>
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
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{!! $category->description !!}</td>
                                                    <td>{{ $category->status === 1 ? 'Active' : 'Inactive' }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.category.edit',$category->category_slug) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                        @if (auth()->user()->id === 1)
                                                        <a href="{{ route('admin.category.destroy',$category->category_slug) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('categoryDelete{{ $category->category_slug }}').submit();"><i class="fas fa-trash"></i></a>

                                                        <form action="{{ route('admin.category.destroy',$category->category_slug) }}" method="post" id="categoryDelete{{ $category->category_slug }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- {{ $categories->links() }} --}}
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
