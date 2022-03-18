@extends('admin.layout.master')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('products.update',['product'=>$product])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Title</label>
                                    <input name="title" type="text" value="{{$product->title}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Price</label>
                                    <input name="price" type="text" value="{{$product->price}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-12 col-lg-12 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" row="10" class="form-control">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-4 col-lg-4 col-12">
                                    <label class="form-label">Image</label>
                                    <label for="image">
                                        <img src="{{ asset('storage/app/public/images/'.$product->image) }}" width="120">
                                    </label>
                                    <input id="image" name="image" type="file" class="form-control" hidden>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Discount</label>
                                    <input name="discount" type="text" value="{{$product->discount}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Discount Price</label>
                                    <input name="discount_price" type="text" value="{{$product->discount_price}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Unit</label>
                                    <input name="unit" type="text" value="{{$product->unit}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Weight</label>
                                    <input name="weight" type="text" value="{{$product->weight}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Minimum Order</label>
                                    <input name="min_order" type="number" value="{{$product->min_order}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Ingredients</label>
                                    <input name="ingredients" type="text" value="{{$product->ingredients}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Allergen Information</label>
                                    <input name="allergen_information" type="text" value="{{$product->allergen_information}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Manufacturer</label>
                                    <input name="manufacturer" type="text" value="{{$product->manufacturer}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Country Of Origin</label>
                                    <input name="country_of_origin" type="text" value="{{$product->country_of_origin}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Items Per Unit</label>
                                    <input name="items_per_unit" type="text" value="{{$product->items_per_unit}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Storage Conditions</label>
                                    <input name="storage_conditions" type="text" value="{{$product->storage_conditions}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Expiration Date</label>
                                    <input name="expiration_date" type="date" value="{{$product->expiration_date}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Disclaimer</label>
                                    <input name="disclaimer" type="text" value="{{$product->disclaimer}}" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Status</label>
                                    <select name="active" class="form-control">
                                        <option value="1" {{ $product->active == "1" ? "selected":"" }}>Active</option>
                                        <option value="0" {{ $product->active == "0" ? "selected":"" }}>Disable</option>
                                    </select>
                                </div>
                            </div>
                            
                                <div class="mb-2">
                                    <label class="form-label">Is Product for 18+</label>
                                    <select name="is_18_plus" class="form-control">
                                        <option value="1" {{ $product->is_18_plus == "1" ? "selected":"" }} >Yes</option>
                                        <option value="0" {{ $product->is_18_plus == "0" ? "selected":"" }} >No</option>
                                    </select>
                                </div>
                            @if(isset($parent_categories) && $parent_categories->count() > 0)
                                <div class="mb-2">
                                    <label class="form-label">Category</label>
                                    <select id="main_category" class="form-control" required>
                                        @foreach($parent_categories as $parent_category)
                                        <option value="{{ $parent_category->id }}" {{ $product->categories->first()->parent_category->parent_category->id == $parent_category->id ? "selected":"" }} >{{ $parent_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-2">
                                    <label class="form-label">Sub Category</label>
                                    <select id="sub_category" class="form-control" required>
                                        @foreach($parent_categories as $parent_category)
                                            @foreach ($parent_category->subCategories as $sub_category)
                                                <option value="{{ $sub_category->id }}" {{ $product->categories->first()->parent_category->id == $sub_category->id ? "selected":"" }} >{{ $sub_category->name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Sub Sub Category</label>
                                    <select id="sub_sub_category" class="form-control" name="category_id" required>
                                        @foreach($parent_categories as $parent_category)
                                            @foreach ($parent_category->subCategories as $sub_category)
                                                @foreach ($sub_category->subCategories as $sub_sub_category)
                                                    <option value="{{ $sub_sub_category->id }}" {{ $product->categories->first()->id == $sub_sub_category->id ? "selected":"" }} >{{ $sub_sub_category->name }}</option>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <p id="working" style="display:none;">Working...</p>
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            @else
                                <div class="alert alert-danger">Category not created,  Cannot be submitted without categories</div>
                            @endif
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
