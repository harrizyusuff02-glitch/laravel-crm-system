<!DOCTYPE html>
<html>
<head>
    <title>Simple CRM</title>
        <style>
        body {
            font-family: Arial;
            background-color: #f1f3f6;
            margin: 0;
        }

        .container {
            width: 85%;
            margin: auto;
            padding: 20px;
        }

        .navbar {
            background: #1e293b;
            padding: 12px 0;
        }

        .navbar-container {
            width: 85%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-left a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .navbar a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #f8fafc;
        }

        button {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="nav-left">
                <a href="/dashboard">Dashboard</a>
                <a href="{{ route('clients.index') }}">Clients</a>
                <a href="{{ route('projects.index') }}">Projects</a>
                <a href="{{ route('tasks.index') }}">Tasks</a>
                <a href="{{ route('contacts.index') }}">Contacts</a>
            </div>

            <div class="nav-right">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="container">

        @if(session('success'))
            <div class="card" style="background:#dcfce7;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>
