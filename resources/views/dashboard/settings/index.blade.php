@extends('dashboard.layouts.master')

@section('setting-active', 'active')
@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4 fw-bold"><span class="text-muted fw-light">Home /</span> Settings </h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="mb-4 card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0"> Website Setting </h5>
                            <small class="text-muted float-end"> Setting </small>
                        </div>
                        <div class="card-body">
                         @livewire('dashboard.settings.update-settings')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>

@endsection
