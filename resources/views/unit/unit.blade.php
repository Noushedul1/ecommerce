<x-app-layout>
    @section('admin_title','Unit')
    @section('admin_content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Units</h2>
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
                                                @foreach ($units as $unit)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $unit->name }}</td>
                                                    <td>{!! $unit->description !!}</td>
                                                    <td>{{ $unit->status === 1 ? 'Active' : 'Inactive' }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.unit.edit',$unit->unit_slug) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                        @if (auth()->user()->id === 1)
                                                        <a href="{{ route('admin.unit.destroy',$unit->unit_slug) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('unitDelete{{ $unit->unit_slug }}').submit();"><i class="fas fa-trash"></i></a>

                                                        <form action="{{ route('admin.unit.destroy',$unit->unit_slug) }}" method="post" id="unitDelete{{ $unit->unit_slug }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $units->links() }}
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
