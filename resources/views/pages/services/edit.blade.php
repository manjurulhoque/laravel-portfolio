{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">{{ $page_title }}</h3>
        </div>
        <!--begin::Form-->
        <form class="form" method="post" action="{{ route('services.update', $service->id) }}">
            @csrf
            @method('PATCH')

            <div class="card-body">
                <div class="form-group">
                    <label>Icon name:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter icon name"
                           name="icon" value="{{ $service->icon }}"/>
                    <span class="form-text text-muted">Please enter your icon name</span>
                </div>
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter title" name="title" value="{{ $service->title }}"/>
                    <span class="form-text text-muted">Enter service title</span>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control form-control-solid" placeholder="Enter description"
                              rows="10" name="description">{{ $service->description }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
