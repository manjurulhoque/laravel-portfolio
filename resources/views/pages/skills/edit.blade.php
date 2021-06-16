{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">Update skill</h3>
        </div>
        <!--begin::Form-->
        <form class="form" method="post" action="{{ route('skills.update', $skill->id) }}">
            @csrf
            @method('PATCH')

            <div class="card-body">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter title"
                           name="title" required value="{{ $skill->title ?? '' }}"/>
                    <span class="form-text text-muted">Please enter skill title</span>
                </div>
                <div class="form-group">
                    <label>Text:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter text" name="text"
                           required value="{{ $skill->text ?? '' }}"/>
                    <span class="form-text text-muted">Enter skill text</span>
                </div>
                <div class="form-group">
                    <label>Width:</label>
                    <input type="number" min="0" max="100" class="form-control form-control-solid"
                           placeholder="Enter width" name="width" required value="{{ $skill->width ?? '' }}"/>
                    <span class="form-text text-muted">Enter skill width</span>
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

{{-- Scripts Section --}}
@section('scripts')
    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
