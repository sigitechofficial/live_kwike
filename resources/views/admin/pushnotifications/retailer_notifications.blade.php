@extends('welcome')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Retailer Id</label>
                                <select class="form-select shadow-sm form-control" id="autoSizingSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">+923001234567</option>
                                    <option value="2">+923011234567</option>
                                    <option value="3">+923021234567</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Retailer Message</label>
                                <textarea class="form-control shadow-sm" rows="4"></textarea>
                            </div>

                        </div>

                        <div class="row mt-5">

                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                    <button class="btn btn-primary shadow" type="submit">Send Notification</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
