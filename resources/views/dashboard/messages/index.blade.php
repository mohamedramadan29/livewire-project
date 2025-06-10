@extends('dashboard.layouts.master')
@section('title')
    Messages
@endsection
@section('messages-active', 'active')
@section('content')



    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4 fw-bold"><span class="text-muted fw-light">Home /</span> Messages </h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="mb-4 card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0"> Messages </h5>
                        </div>
                        <div class="card-body">
                            @livewire('dashboard.messages.message-data-comp')
                        </div>
                        @livewire('dashboard.messages.message-show-comp')

                        {{-- @livewire('dashboard.messages.delete-message-comp') --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>

@endsection


@section('js')

@endsection
