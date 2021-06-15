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
                    <div class="font-weight-bolder">About me</div>
                </div>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('about-me-edit') }}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                         version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path
                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Update</a>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body d-flex flex-column px-0">
            <div class="row">
                <div class="col-md-6">
                    <!--begin::Items-->
                    <div class="flex-grow-1 card-spacer-x">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <div class="d-flex align-items-center mr-2">
                                <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                    <div class="symbol-label">
                                        <img src="{{ asset('media/svg/misc/006-plurk.svg') }}" alt=""
                                             class="h-50"/>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"
                                       class="font-size-h6 text-dark-75 text-muted text-hover-primary font-weight-bolder">Name</a>
                                    <div
                                        class="font-size-sm font-weight-boldest mt-1">@if(!is_null($about)) {{ $about->name }} @endif</div>
                                </div>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <div class="d-flex align-items-center mr-2">
                                <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                    <div class="symbol-label">
                                        <img src="{{ asset('media/svg/misc/015-telegram.svg') }}" alt=""
                                             class="h-50"/>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"
                                       class="font-size-h6 text-dark-75 text-muted text-hover-primary font-weight-bolder">Email</a>
                                    <div class="font-size-sm font-weight-boldest mt-1">
                                        @if(!is_null($about)) {{ $about->email }} @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center mr-2">
                                <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                    <div class="symbol-label">
                                        <img src="{{ asset('media/svg/misc/003-puzzle.svg') }}" alt=""
                                             class="h-50"/>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"
                                       class="font-size-h6 text-dark-75 text-muted text-hover-primary font-weight-bolder">Phone</a>
                                    <div class="font-size-sm font-weight-boldest mt-1">
                                        @if(!is_null($about)) {{ $about->phone }} @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <div class="col-md-6">
                    <!--begin::Items-->
                    <div class="flex-grow-1 card-spacer-x">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <div class="d-flex align-items-center mr-2">
                                <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                    <div class="symbol-label">
                                        <img src="{{ asset('media/svg/misc/006-plurk.svg') }}" alt=""
                                             class="h-50"/>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"
                                       class="font-size-h6 text-dark-75 text-muted text-hover-primary font-weight-bolder">Details</a>
                                    <div class="font-size-sm font-weight-boldest mt-1">
                                        @if(!is_null($about)) {{ $about->details }} @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <div class="d-flex align-items-center mr-2">
                                <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                    <div class="symbol-label">
                                        <img src="{{ asset('media/svg/misc/015-telegram.svg') }}" alt=""
                                             class="h-50"/>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"
                                       class="font-size-h6 text-dark-75 text-muted text-hover-primary font-weight-bolder">Image</a>
                                    <div class="font-size-sm font-weight-boldest mt-1">
                                        @if(!is_null($about) && $about->image)
                                            <img class="img-fluid img-thumbnail"
                                                 src="{{ asset('images/' . $about->image) }}" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Tiles Widget 1-->

@endsection
