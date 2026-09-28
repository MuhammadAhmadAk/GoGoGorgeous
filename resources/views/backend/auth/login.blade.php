<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - GoGoGorgeous</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #d4af37; /* Gold */
            --secondary-color: #1a1a1a;
            --bg-color: #f4f6f9;
            --text-color: #333;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            color: var(--text-color);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: #fff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            width: 100%;
            max-width: 380px;
        }

        .login-header {
            background-color: var(--primary-color);
            padding: 25px 20px;
            text-align: center;
            color: #fff;
        }

        .login-header h3 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .login-header i {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .login-body {
            padding: 30px 25px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-color);
        }

        .input-group-text {
            background: transparent;
            border: 1px solid #ddd;
            border-right: none;
            color: var(--primary-color);
        }

        .form-control.with-icon {
            border-left: none;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #b5952f;
            border-color: #b5952f;
            transform: translateY(-2px);
        }
        
        .alert-danger {
            border-radius: 8px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <i class="fa-solid fa-user-shield"></i>
            <h3>Admin Portal</h3>
            <p class="mb-0 mt-1" style="font-size: 0.9rem; opacity: 0.9;">Go Go Gorgeous</p>
        </div>
        <div class="login-body">
            @if($errors->any())
                <div class="alert alert-danger py-2">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="mb-4">
                    <label class="form-label text-muted fw-semibold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control with-icon" placeholder="admin@example.com" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" class="form-control with-icon" placeholder="••••••••" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">
                    <i class="fa-solid fa-right-to-bracket me-2"></i> Login to Dashboard
                </button>
            </form>
        </div>
    </div>
</body>
</html>
