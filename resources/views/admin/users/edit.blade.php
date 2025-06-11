@extends('layouts.admin')

@section('content')
<div class="admin-users-edit section" style="max-width: 500px; margin: 30px auto; background: var(--surface-color); border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px 40px; font-family: var(--default-font); color: var(--default-color);">
    <h2 style="color: var(--heading-color); margin-bottom: 24px;">Edit User</h2>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role">
                <option value="user" @if($user->role=='user') selected @endif>User</option>
                <option value="admin" @if($user->role=='admin') selected @endif>Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection
