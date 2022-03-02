@extends('retailer.layout.master')
@section('content')

    <style>
        label {
            font-weight: bold;
        }

        /*.btn-primary {*/
        /*    color: black;*/
        /*}*/
    </style>

    <div class="page-content">
        <div class="main-wrapper">

            <!--form layout-->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Settings</h5>
                            <form action="{{ route('settings.store') }}" method="POST">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="privacy_policy" class="form-label">Privacy Policy</label>
                                        <textarea class="summernote" name="privacy_policy" id="privacy_policy" cols="30" rows="10">{{ $settings->where('shortcode',"privacy_policy")->first()->description ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="driver_privacy_policy" class="form-label">Driver’s Privacy Policy</label>
                                        <textarea class="summernote" name="driver_privacy_policy" id="driver_privacy_policy" cols="30" rows="10">{{ $settings->where('shortcode',"driver_privacy_policy")->first()->description ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="retailer_privacy_policy" class="form-label">Retailer’s Privacy</label>
                                        <textarea class="summernote" name="retailer_privacy_policy" id="retailer_privacy_policy" cols="30" rows="10">{{ $settings->where('shortcode',"retailer_privacy_policy")->first()->description ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="terms_condition" class="form-label">Terms and conditions</label>
                                        <textarea class="summernote" name="terms_condition" id="terms_condition" cols="30" rows="10">{{ $settings->where('shortcode',"terms_condition")->first()->description ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection