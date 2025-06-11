@extends('layouts.admin')

@section('content')
<div class="admin-users-create section" style="max-width: 500px; margin: 30px auto; background: var(--surface-color); border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px 40px; font-family: var(--default-font); color: var(--default-color);">
    <h2 style="color: var(--heading-color); margin-bottom: 24px;">Add New User</h2>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>






















@endsection</div>    </form>        <button type="submit" class="btn btn-primary">Create User</button>        </div>            </select>                <option value="admin">Admin</option>                <option value="user">User</option>            <select id="role" name="role">            <label for="role">Role</label>        <div class="form-group">        </div>            <input id="password" type="password" name="password" required>            <label for="password">Password</label>
        <div class="form-group">        </div>            <input id="email" type="email" name="email" required>            <label for="email">Email</label>        <div class="form-group">        </div>            <input id="name" type="text" name="name" required autofocus>
