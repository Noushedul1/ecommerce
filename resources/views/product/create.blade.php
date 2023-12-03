<x-app-layout>
    @section('admin_title','Product')
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
                            <h2 class="text-center">Product</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.product.create') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name :</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="categoryId" class="form-control">
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Sub Category Name :</label>
                                    <div class="col-md-8">
                                        <select name="subcategory_id" id="subcategoryId" class="form-control">
                                            <option value="" selected disabled>Select Sub Category</option>
                                            @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name :</label>
                                    <div class="col-md-8">
                                        <select name="brand_id" id="" class="form-control">
                                            <option value="" selected disabled>Select Brand</option>
                                            @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name :</label>
                                    <div class="col-md-8">
                                        <select name="unit_id" id="" class="form-control">
                                            <option value="" selected disabled>Select Unit</option>
                                            @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Regular Price :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="regular_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Selling Price :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="selling_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Short Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control" id="shortDesSummerNote" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Long Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control" id="longDesSummerNote" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Image :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Other Image :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="images[]" class="form-control" multiple>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="New Product" class="btn btn-outline-success" />
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
            $('#shortDesSummerNote').summernote();
            $('#longDesSummerNote').summernote();

            $('#categoryId').on('change',function(){
                var categoryId = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "/admin/product/get-category-id/"+categoryId,
                    dataType: 'JSON',
                    data: {id:categoryId},
                    success: function(res) {
                        // console.log(res.subcategories);
                        var option = '';
                        option += '<option value="" selected disabled>Select Sub Category</option>';
                        $.each(res.subcategories,function(key,value){
                            option += '<option value="'+value.id+'">'+value.name+'</option>';
                        });
                        $('#subcategoryId').empty().append(option);
                    }
                });
            });
        });
    </script>
    @endpush
    @endsection
</x-app-layout>

