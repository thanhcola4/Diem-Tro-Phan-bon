@extends('layouts.user_type.auth')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Nhân Viên</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <select name="role" required>
                            <option value="quản lý">Quản lý</option>
                            <option value="nhân viên">Nhân viên</option>
                        </select>

                        <button type="submit" class="btn btn-primary">Thêm nhân viên</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
