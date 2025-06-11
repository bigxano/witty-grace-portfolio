@extends('layouts.admin')

@section('content')
    <style>
        .admin-feedback-container {
            max-width: 700px;
            margin: 30px auto;
            background: var(--surface-color);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px 36px;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .admin-feedback-container h2 {
            color: #2c3e50;
            margin-bottom: 24px;
        }
        .admin-feedback-container ul {
            list-style: none;
            padding: 0;
        }
        .admin-feedback-container ul li {
            background: #f8fafc;
            margin-bottom: 12px;
            padding: 12px 16px;
            border-radius: 4px;
            color: var(--accent-color);
            border-left: 4px solid #3490dc;
        }
        .admin-feedback-container p {
            color: #888;
        }
    </style>

    <div class="admin-feedback-container">
        <h2>Feedbacks</h2>

        @if ($feedbacks->isEmpty())
            <p>No feedbacks available.</p>
        @else
            <ul>
                @foreach ($feedbacks as $feedback)
                    <li>
                        {{ $feedback->message }}
                        <br>
                        <small style="color:#555;">From User ID: {{ $feedback->user_id }}</small>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <script src="{{ asset('MyPortfolio/assets/js/theme-toggle.js') }}"></script>
@endsection
