@extends('dashboard.layouts.master')
@section('title')
    Projects
@endsection
@section('projects-active', 'active')
@section('content')



    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4 fw-bold"><span class="text-muted fw-light">Home /</span> Projects </h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="mb-4 card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0"> Projects </h5>
                            <div class="mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#AddModel">
                                    Add New
                                </button>
                                @livewire('dashboard.projects.add-project-comp')
                            </div>

                        </div>
                        <div class="card-body">
                            @livewire('dashboard.projects.projects-data-comp')
                        </div>

                        @livewire('dashboard.projects.edit-project-comp')
                        @livewire('dashboard.projects.delete-project-comp')
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>

@endsection


@section('js')

@endsection
