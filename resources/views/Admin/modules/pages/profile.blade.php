@extends('Admin.layouts.main')
@section('title', 'Admin Profile')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-6">
                <div class="user-profile-header-banner">
                    <img src="{{ url('vuexy/assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top" />
                </div>
                <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="{{ url('vuexy/assets/img/avatars/1.png') }}" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img" />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-lg-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4 class="mb-2 mt-lg-6 adminName">{{ auth()->user()->name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 my-2">
                                    <li class="list-inline-item d-flex gap-2 align-items-center">
                                        </i><span class="fw-medium">Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary mb-1">
                                <i class="ti ti-user-check ti-xs me-2"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Profile Content -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <!-- About User -->
            <div class="card mb-6">
                <div class="card-body">
                    <small class="card-text text-uppercase text-muted small">About</small>
                    <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-user ti-lg"></i>
                            <span class="fw-medium mx-2">Admin Name:
                            </span>
                            <span class="admin-name">
                                <span class="adminName">{{ auth()->user()->name }}</span>
                                <i class="fa fa-pen edit-icon" style="cursor: pointer; color: #7367f0;"></i>
                            </span>
                            <span class="form-group mx-sm-3 mb-2 admin-update" style="display: none">
                                <input type="text" class="form-control" id="adminNameInput"
                                    value="{{ auth()->user()->name }}" placeholder="Enter your name">
                                <i class="fa fa-paper-plane submit-icon" id="submitAdminProfile"
                                    style="cursor: pointer; color: #7367f0;"></i>
                            </span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                            <i class="ti ti-mail ti-lg"></i><span class="fw-medium mx-2">Email:</span>
                            <span>{{ auth()->user()->email }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-icon', function() {
                $('.admin-name').hide();
                $('.admin-update').show();
            });

            $(document).on('click', '#submitAdminProfile', function() {
                console.log('here')
                var name = $('#adminNameInput').val();
                $.ajax({
                    url: "{{ route('admin.profile.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: name
                    },
                    success: function(response) {
                        if (response.success) {
                            $('.adminName').text(response.name);
                            $('#adminNameInput').val(response.name);
                            $('.admin-update').hide();
                            $('.admin-name').show();
                            Swal.fire({
                                text: "Profile updated successfully!",
                                icon: "success"
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Admin name can`t be mt!",
                        });
                    }
                });
            });
        });
    </script>

@endsection
