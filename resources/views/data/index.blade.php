@extends('layouts/index')
@section('body')
{{-- <!-- Page Header --> --}}
<div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
    <div>
        <h1 class="page-title fw-medium fs-18 mb-2">Empty</h1>
        <div class="">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Empty</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="btn-list">
        <button class="btn btn-primary-light btn-wave me-2">
            <i class="bx bx-crown align-middle"></i> Plan Upgrade
        </button>
        <button class="btn btn-secondary-light btn-wave me-0">
            <i class="ri-upload-cloud-line align-middle"></i> Export Report
        </button>
    </div>
</div>
{{-- <!-- Page Header Close --> --}}

{{-- <!-- Start::row-1 --> --}}
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-body">
                <h6 class="mb-0">EMPTY CARD</h6>
            </div>
        </div>
    </div>
</div>
{{-- <!--End::row-1 --> --}}
@endsection