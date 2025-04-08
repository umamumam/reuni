@extends('layouts.app')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-6">
        <!-- Congratulations card -->
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body text-nowrap">
                    <h5 class="card-title mb-0 flex-wrap text-nowrap">Welcome {{ Auth::user()->name ?? 'Guest' }}! 🎉 to
                        Silsilah Keluarga
                    </h5>
                    <p class="mb-2">Mbah Buyut Abd. Jalil - Karmiji</p>
                    <h4 class="text-primary mb-0">&nbsp;</h4>
                    <p class="mb-2">Mari Eratkan Silaturahmi</p>
                    <a href="javascript:;" class="btn btn-sm btn-primary">Big Family</a>
                </div>
                <img src="{{ asset('id.png') }}" class="position-absolute bottom-0 end-0 me-5 mb-5" width="150"
                    alt="view sales" />
            </div>
        </div>
        <!--/ Congratulations card -->

        <!-- Transactions -->
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="text-primary mb-1">Big Family</h4>
                        <div class="datetime-container ms-auto text-end" style="margin-right: 15px;">
                            <b>
                                <div class="date" id="currentDate">Loading date...</div>
                                <div class="time" id="currentTime">Loading time...</div>
                            </b>
                        </div>
                        <div class="dropdown">
                            <button class="btn text-muted p-0" type="button" id="transactionID"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-line ri-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-primary mb-1">&nbsp;</h4>
                </div>

                <div class="card-body pt-lg-0">
                    <div class="row g-4">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-primary rounded shadow-xs">
                                        <i class="ri-pie-chart-2-line ri-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Status Kel.</p>
                                    <h5 class="mb-0">{{ $totalStatusKeluarga ?? '-' }}</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Service -->
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded shadow-xs">
                                        <i class="ri-group-line ri-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Keluarga</p>
                                    <h5 class="mb-0">{{ $totalKeluarga ?? '-' }}</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Game -->
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-warning rounded shadow-xs">
                                        <i class="ri-macbook-line ri-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">Santunan</p>
                                    <h5 class="mb-0">{{ $totalSantunan ?? '-' }}</h5>
                                </div>
                            </div>
                        </div>

                        <!-- User Login -->
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-info rounded shadow-xs">
                                        <i class="ri-money-dollar-circle-line ri-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">User Login</p>
                                    <h5 class="mb-0">{{ $totalUser ?? '-' }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Transactions -->

        <!-- Data Tables -->
        <div class="col-12">
            <div class="card overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th class="text-truncate">User</th>
                                <th class="text-truncate">Email</th>
                                <th class="text-truncate">Role</th>
                                <th class="text-truncate">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                                            <small class="text-truncate">@amiccoo</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">susanna.Lind57@gmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-vip-crown-line ri-22px text-primary me-2"></i>
                                        <span>Admin</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                                            <small class="text-truncate">@brossiter15</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                                        <span>Editor</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                                            <small class="text-truncate">@bemblinf</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">milo86@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-computer-line text-danger ri-22px me-2"></i>
                                        <span>Author</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                                            <small class="text-truncate">@bbinerh</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">lonnie35@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                                        <span>Editor</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                                            <small class="text-truncate">@bkrabbe1d</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-pie-chart-2-line ri-22px text-info me-2"></i>
                                        <span>Maintainer</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/7.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                                            <small class="text-truncate">@brosebothamz</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                                        <span>Editor</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                                            <small class="text-truncate">@bkildayr</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">otho21@gmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-user-3-line ri-22px text-success me-2"></i>
                                        <span>Subscriber</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                            </tr>
                            <tr class="border-transparent">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ asset('materio/assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                                            <small class="text-truncate">@bgallemore6</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-truncate">florencio.Little@hotmail.com</td>
                                <td class="text-truncate">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-user-3-line ri-22px text-success me-2"></i>
                                        <span>Subscriber</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->
    </div>
</div>
<script>
    function updateDateTime() {
            const now = new Date();
            const optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit' };

            document.getElementById('currentDate').textContent = now.toLocaleDateString('id-ID', optionsDate);
            document.getElementById('currentTime').textContent = now.toLocaleTimeString('id-ID', optionsTime);
        }

        // Perbarui setiap detik
        setInterval(updateDateTime, 1000);

        // Panggilan awal agar tidak ada delay saat load
        updateDateTime();
</script>
@endsection
