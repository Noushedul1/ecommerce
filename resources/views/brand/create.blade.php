<x-app-layout>
    @section('admin_title','Brand')
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
                            <h2 class="text-center">Add Brand</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" />
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="brandSummerNote" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Image :</label>
                                    <div class="col-md-8">
                                        <input type="file" onchange="previewImage(this)" name="image" class="from-control">
                                        <img src="" id="prevImage" alt="" height="100" width="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="New Brand" class="btn btn-outline-success" />
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
            $('#brandSummerNote').summernote();
        });
        $('#prevImage').hide();
        function previewImage(inputVal) {
            if(inputVal.files && inputVal.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prevImage').show();
                    $('#prevImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(inputVal.files[0]);
            }
        }
    </script>
    @endpush
    @endsection
</x-app-layout>

