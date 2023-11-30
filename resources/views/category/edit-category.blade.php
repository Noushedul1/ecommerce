<x-app-layout>
    @section('admin_title','Category Edit')
    @push('admin_link')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush
    @section('admin_content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Edit Category</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.category.update',$category->category_slug) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control @error('name')is-invalid @enderror" />
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="categoryeditSummerNote" cols="30" rows="10">
                                            {{ $category->description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" {{ $category->status === 1 ?'checked':'' }} name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" {{ $category->status === 0 ? 'checked': '' }} name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Category" class="btn btn-outline-success" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('admin_script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#categoryeditSummerNote').summernote();
        });
    </script>
    @endpush
    @endsection
</x-app-layout>

