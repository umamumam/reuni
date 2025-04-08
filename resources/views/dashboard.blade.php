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
                    <a href="javascript:;" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#bigFamilyModal">
                        Big Family
                    </a>

                    {{-- <a href="javascript:;" class="btn btn-sm btn-primary">Big Family</a> --}}
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
        @if (auth()->user() && auth()->user()->email === 'umam@gmail.com')
            <div class="col-12">
                <div class="card overflow-hidden">
                    <div class="table-responsive">
                        <br>
                        <div class="d-flex justify-content-start mb-3" style="margin-left: 20px;">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                                + Tambah User
                            </button>
                        </div>

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th class="text-truncate">User</th>
                                    <th class="text-truncate">Email</th>
                                    <th class="text-truncate">Status</th>
                                    <th class="text-truncate">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-4">
                                                <img src="{{ asset('materio/assets/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">{{ $user->name }}</h6>
                                                <small class="text-truncate">{{ '@' . Str::slug($user->name) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">{{ $user->email }}</td>
                                    <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                                    <td>
                                        <!-- Edit -->
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editUserModal{{ $user->id }}">
                                            Edit
                                        </button>

                                        <!-- Delete -->
                                        <form action="{{ route('dashboard.user.destroy', $user->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal Edit User -->
                                <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="editUserLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('dashboard.user.update', $user->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name{{ $user->id }}" class="form-label">Nama</label>
                                                        <input type="text" name="name" id="name{{ $user->id }}"
                                                            class="form-control" value="{{ $user->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email{{ $user->id }}" class="form-label">Email</label>
                                                        <input type="email" name="email" id="email{{ $user->id }}"
                                                            class="form-control" value="{{ $user->email }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password{{ $user->id }}" class="form-label">Password
                                                            (Kosongkan jika tidak diubah)</label>
                                                        <input type="password" name="password" id="password{{ $user->id }}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Modal Create User -->
                        <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('dashboard.user.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif

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
        setInterval(updateDateTime, 1000);
        updateDateTime();
</script>
@endsection
