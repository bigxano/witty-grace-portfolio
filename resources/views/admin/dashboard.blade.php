@extends('layouts.admin')

@section('content')
    <style>
        .admin-dashboard-container {
            max-width: 800px;
            margin: 30px auto;
            background: var(--surface-color);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px 40px;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--accent-color);
        }
        .admin-dashboard-container h2 {
            color: #2c3e50;
            margin-bottom: 24px;
        }
        .admin-dashboard-container a {
            color: #3490dc;
            text-decoration: none;
            font-weight: 500;
        }
        .admin-dashboard-container a:hover {
            text-decoration: underline;
        }
        .admin-dashboard-container hr {
            margin: 28px 0;
            border: none;
            border-top: 1px solid #e1e1e1;
        }
        .admin-dashboard-container h3 {
            color: #34495e;
            margin-bottom: 12px;
        }
        .admin-dashboard-container ul {
            list-style: none;
            padding: 0;
        }
        .admin-dashboard-container ul li {
            background: #f8fafc;
            margin-bottom: 8px;
            padding: 8px 14px;
            border-radius: 4px;
            color: #222;
        }
        .admin-dashboard-container .user-actions a {
            margin-right: 16px;
            display: inline-block;
            margin-bottom: 8px;
        }
        .admin-dashboard-container form {
            margin-top: 32px;
        }
        .admin-dashboard-container button[type="submit"] {
            background: #e3342f;
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .admin-dashboard-container button[type="submit"]:hover {
            background: #cc1f1a;
        }
    </style>

    <div class="admin-dashboard-container">
        <h2>Welcome to Admin Dashboard</h2>

        <a href="{{ route('admin.feedbacks') }}">View Feedbacks</a>
        <br>
        <a href="{{ route('admin.settings') }}">Site Settings</a>

        <hr>

        <h3>User Management</h3>
        <div class="user-actions">
            <a href="{{ route('admin.users.index') }}">View All Users</a>
            <a href="{{ route('admin.users.create') }}">Add New User</a>
        </div>

        <hr>

        <h3>Site Statistics</h3>
        <ul>
            <li>Total Users: {{ $stats['users'] ?? 'N/A' }}</li>
            <li>Total Feedbacks: {{ $stats['feedbacks'] ?? 'N/A' }}</li>
            <li>Active Sessions: {{ $stats['sessions'] ?? 'N/A' }}</li>
        </ul>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <script src="{{ asset('MyPortfolio/assets/js/theme-toggle.js') }}"></script>
@endsection
