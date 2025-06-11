@extends('layouts.admin')

@section('content')
<div class="admin-users-container section" style="max-width: 800px; margin: 30px auto; background: var(--surface-color); border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px 40px; font-family: var(--default-font); color: var(--default-color);">
    <h2 style="color: var(--heading-color); margin-bottom: 24px;">All Users</h2>
    <table style="width:100%; border-collapse: collapse;">
        <thead>
            <tr style="background: var(--background-color); color: var(--heading-color);">
                <th style="padding: 10px; border-bottom: 1px solid var(--accent-color);">ID</th>
                <th style="padding: 10px; border-bottom: 1px solid var(--accent-color);">Name</th>
                <th style="padding: 10px; border-bottom: 1px solid var(--accent-color);">Email</th>
                <th style="padding: 10px; border-bottom: 1px solid var(--accent-color);">Role</th>
                <th style="padding: 10px; border-bottom: 1px solid var(--accent-color);">Registered</th>
                <th style="padding: 10px; border-bottom: 1px solid var(--accent-color);">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid var(--surface-color);">{{ $user->id }}</td>
                <td style="padding: 8px; border-bottom: 1px solid var(--surface-color);">{{ $user->name }}</td>
                <td style="padding: 8px; border-bottom: 1px solid var(--surface-color);">{{ $user->email }}</td>
                <td style="padding: 8px; border-bottom: 1px solid var(--surface-color);">{{ $user->role }}</td>
                <td style="padding: 8px; border-bottom: 1px solid var(--surface-color);">{{ $user->created_at->format('Y-m-d') }}</td>
                <td style="padding: 8px; border-bottom: 1px solid var(--surface-color);">
                    <a href="{{ route('admin.users.edit', $user->id) }}" style="color: var(--accent-color); margin-right: 8px;">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: #e3342f; color: #fff; border: none; padding: 4px 10px; border-radius: 4px; font-size: 14px; cursor: pointer;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
