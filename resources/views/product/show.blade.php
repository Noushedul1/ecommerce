<x-app-layout>
    @section('admin_title','Product')
    @push('admin_link')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush
    @section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center">{{ $product->name }}</h1>
                    </div>
                    <div class="card-body">
                        <p>{!! $product->long_description !!}</p>
                        <img src="{{ asset('admin/images/product_images/'.$product->image) }}" alt="" height="200" width="200">
                        <p>{{ $product->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="card-footer">
                        @foreach ($product->subimage as $productimages)
                        <img src="{{ asset('admin/images/producsMore_images/'.$productimages->images) }}" alt="" height="100" width="100">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>

