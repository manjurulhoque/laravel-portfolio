{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">Edit review</h3>
        </div>
        <!--begin::Form-->
        <form class="form" method="post" action="{{ route('reviews.update', $review->id) }}">
            @csrf
            @method('PATCH')

            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter name"
                           name="name" value="{{ $review->name }}"/>
                    <span class="form-text text-muted">Please enter name</span>
                </div>
                <div class="form-group">
                    <label>Review:</label>
                    <textarea class="form-control form-control-solid" placeholder="Enter review"
                              rows="10" name="review">{{ $review->review }}</textarea>
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
