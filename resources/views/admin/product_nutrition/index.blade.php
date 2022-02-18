@extends('welcome')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-5">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                </div>
                            </div>
                        </div>
                        <h5>Add New Product Nutrition</h5>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <label>Product Title</label><p>{{ $product->title }}</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        @if(isset($nutritions) && sizeof($nutritions) > 0)
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <label class="form-label">Typical Values</label>
                            </div>
                            <div class="col-md-3 col-3">
                                <label class="form-label">Per 100g of Product</label>
                            </div>
                            <div class="col-md-3 col-3">
                                <label class="form-label">% RI Per 100g</label>
                            </div>
                            <div class="col-md-3 col-3"></div>
                        </div>
                            @foreach($nutritions as $nutrition)
                            @if($product_nutritions->where('typical_values',$nutrition)->first())
                            @else
                                <form action="{{route('nutrition.store')}}" method="post">
                                    @csrf
                                    
                                    <div class="row m-2">
                                        <div class="col-md-3 col-3">
                                            <input name="product_id" type="hidden" value="{{ $product->id }}">
                                            <input name="typical_values" type="text" value="{{ $nutrition }}" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <input name="per_100g_of_product" type="text" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <input name="ri_per_100g" type="text" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <button type="submit" class="btn btn-primary">Add Product Nutrition</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if(isset($product_nutritions) && $product_nutritions->count() > 0)
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <th>ID</th>
                                <th>Typical Values</th>
                                <th>Per 100g of Product</th>
                                <th>% RI Per 100g</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($product_nutritions as $product_nutrition)
                                    <tr>
                                        <td>{{ $product_nutrition->id }}</td>
                                        <td>{{ $product_nutrition->typical_values }}</td>
                                        <td>{{ $product_nutrition->per_100g_of_product }}</td>
                                        <td>{{ $product_nutrition->ri_per_100g }}</td>
                                        <td>
                                            <form action="{{ route('nutrition.destroy') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product_nutrition->id }}">
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
