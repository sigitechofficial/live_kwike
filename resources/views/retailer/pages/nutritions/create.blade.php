@extends('retailer.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Add New Nutrition</h5>
                        <form action="{{ route('nutritions.store') }}" method="post">
                            @csrf
                            <div class="row mt-5">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">typical_values</label>
                                    <input name="typical_values" type="text" class="form-control" required>
                                </div>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Add Nutrition</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
