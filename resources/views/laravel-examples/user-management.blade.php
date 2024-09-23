@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Danh sách nhân viên</h5>
                        </div>
                        <a href="{{ route('user.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Thêm nhân viên</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Creation Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td class="ps-4">{{ $employee->id }}</td>
                                <td class="text-center">{{ $employee->name }}</td>
                                <td class="text-center">{{ $employee->email }}</td>
                                <td class="text-center">{{ $employee->password }}</td>
                                <td class="text-center">{{ $employee->role }}</td>
                                <td class="text-center">{{ $employee->created_at }}</td>
                                <td class="text-center">
                                    <!-- Nút Edit -->
                                    <a href="{{ route('user.edit', $employee->id) }}" class="btn btn-link text-secondary" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Nút Delete -->
                                    <form action="{{ route('user.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-secondary" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
