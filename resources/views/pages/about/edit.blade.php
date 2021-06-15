{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <!--begin::Tiles Widget 1-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <div class="card-title">
                <div class="card-label">
                    <div class="font-weight-bolder">Edit about me</div>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <form class="form" method="post" action="{{ route('about-me-update') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name"
                                   value="@if(!is_null($about)) {{ $about->name }} @endif"
                                   placeholder="Enter full name"/>
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>

                        <div class="separator separator-dashed my-5"></div>

                        <div class="form-group">
                            <label>Details:</label>
                            <textarea class="form-control" placeholder="Enter details" name="details"
                                      rows="12">@if(!is_null($about)) {{ $about->details }} @endif</textarea>
                            <span class="form-text text-muted">Enter your details</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email"
                                   value="@if(!is_null($about)) {{ $about->email  }} @endif"/>
                            <span class="form-text text-muted">Please enter your email</span>
                        </div>

                        <div class="separator separator-dashed my-5"></div>

                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" class="form-control" placeholder="Enter phone" name="phone"
                                   value="@if(!is_null($about)) {{ $about->phone }} @endif"/>
                            <span class="form-text text-muted">Please enter your phone</span>
                        </div>

                        <div class="separator separator-dashed my-5"></div>

                        @if($about->image)
                            <label>Previous Image:</label>
                            <img class="img-fluid img-thumbnail" src="{{ asset('images/' . $about->image) }}" alt="">
                        @endif
                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" class="form-control" name="image"/>
                            <span class="form-text text-muted">Please enter your image</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Body-->
    </div>
    <!--end::Tiles Widget 1-->

@endsection
