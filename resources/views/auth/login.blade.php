<style>
    .auth-form-container {
        max-width: 400px;
        margin: 60px auto;
        background: var(--surface-color);
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 36px 32px 28px 32px;
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .auth-form-container h2 {
        color: #2c3e50;
        margin-bottom: 24px;
        text-align: center;
    }
    .auth-form-container form {
        display: flex;
        flex-direction: column;
    }
    .auth-form-container input,
    .auth-form-container select {
        margin-bottom: 18px;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        font-size: 15px;
        background: #f8fafc;
    }
    .auth-form-container button[type="submit"] {
        background: #3490dc;
        color: #fff;
        border: none;
        padding: 10px 0;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        font-weight: 500;
        transition: background 0.2s;
        margin-bottom: 10px;
    }
    .auth-form-container button[type="submit"]:hover {
        background: #2779bd;
    }
    .auth-form-container .register-link {
        text-align: center;
        margin-top: 10px;
    }
    .auth-form-container .register-link a {
        color: #3490dc;
        text-decoration: none;
        font-weight: 500;
    }
    .auth-form-container .register-link a:hover {
        text-decoration: underline;
    }
    .auth-form-container .forgot-link {
        text-align: right;
        margin-bottom: 12px;
    }
    .auth-form-container .forgot-link a {
        color: #888;
        font-size: 14px;
        text-decoration: none;
    }
    .auth-form-container .forgot-link a:hover {
        text-decoration: underline;
    }
</style>

<div class="auth-form-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <div class="forgot-link">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
        <button type="submit">Login</button>
    </form>
    <div class="register-link">
        Don't have an account?
        <a href="{{ route('register') }}">Register here</a>
    </div>
</div>
<script src="{{ asset('MyPortfolio/assets/js/theme-toggle.js') }}"></script>


