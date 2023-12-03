<x-app-layout>
    @section('admin_title','Unit Edit')
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
                            <h2 class="text-center">Edit Brand</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.brand.update',$brand->brand_slug) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $brand->name }}" class="form-control @error('name')is-invalid @enderror" />
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="brandeditSummerNote" cols="30" rows="10">
                                            {{ $brand->description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Image :</label>
                                    <div class="col-md-8">
                                        <input onchange="previewImage(this)" type="file" name="image" class="form-control">
                                        <img src="" alt="" id="prevImage" height="100" width="100">
                                        <img src="{{ asset('admin/images/brand_images/'.$brand->image) }}" alt="{{ $brand->brand_slug }}" height="100" width="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" {{ $brand->status === 1 ?'checked':'' }} name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" {{ $brand->status === 0 ? 'checked': '' }} name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Brand" class="btn btn-outline-success" />
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
            $('#brandeditSummerNote').summernote();
        });
        function previewImage(inputVal){
            if(inputVal.files && inputVal.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prevImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(inputVal.files[0]);
            }
        }
    </script>
    @endpush
    @endsection
</x-app-layout>

