<x-app-layout>
    @section('admin_title','Product Edit')
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
                            <h2 class="text-center">Product Edit</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.product.update',$product->product_slug) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name :</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="categoryId" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id ===$product->category_id ? "selected" : "" }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Sub Category Name :</label>
                                    <div class="col-md-8">
                                        <select name="subcategory_id" id="subcategoryId" class="form-control">
                                            @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id === $product->subcategory_id ? "selected" : "" }}>{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name :</label>
                                    <div class="col-md-8">
                                        <select name="brand_id" id="" class="form-control">
                                            @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id === $product->brand_id ? "selected" : "" }}>{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name :</label>
                                    <div class="col-md-8">
                                        <select name="unit_id" id="" class="form-control">
                                            @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}" {{ $unit->id === $product->unit_id ? "selected" :"" }}>{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Regular Price :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="{{ $product->regular_price }}" name="regular_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Selling Price :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="{{ $product->selling_price }}" name="selling_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Short Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control" id="shortDesSummerNote" cols="30" rows="10">
                                            {{ $product->short_description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Long Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control" id="longDesSummerNote" cols="30" rows="10">
                                            {{ $product->long_description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Image :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset('admin/images/product_images/'.$product->image) }}" alt="" height="100" width="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Other Image :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="images[]" class="form-control" multiple>
                                        <div>
                                            @foreach ($product->subimage as $subimg)
                                            <img src="{{ asset('admin/images/producsMore_images/'.$subimg->images) }}" alt="" height="100" width="100">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1" {{ $product->status === 1 ? 'checked' : '' }}> Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{ $product->status === 0 ? 'checked' : '' }}> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Product" class="btn btn-outline-success" />
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
        });
    </script>
    @endpush
    @endsection
</x-app-layout>

