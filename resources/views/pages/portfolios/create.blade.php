{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">Create portfolio</h3>
        </div>
        <!--begin::Form-->
        <form class="form" method="post" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter title"
                           name="title" required/>
                    <span class="form-text text-muted">Please enter title</span>
                </div>
                <div class="form-group">
                    <label>Link:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter link"
                           name="link" required/>
                    <span class="form-text text-muted">Please enter link</span>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control form-control-solid" placeholder="Enter description"
                              rows="10" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" class="form-control" name="image" required/>
                    <span class="form-text text-muted">Please enter image</span>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>

@endsection
