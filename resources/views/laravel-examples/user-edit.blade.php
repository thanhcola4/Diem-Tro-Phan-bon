@extends('layouts.user_type.auth')

@section('content')
<form action="{{ route('user.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $employee->name }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $employee->email }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="text" name="password" value="{{ $employee->password }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <select name="role" class="form-control" required>
            <option value="quản lý" {{ $employee->role === 'quản lý' ? 'selected' : '' }}>Quản lý</option>
            <option value="nhân viên" {{ $employee->role === 'nhân viên' ? 'selected' : '' }}>Nhân viên</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@endsection