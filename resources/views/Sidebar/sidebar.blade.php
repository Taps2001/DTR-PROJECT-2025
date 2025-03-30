<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DTR</title>
        <link rel="stylesheet" href="{{ asset('Style/dash.css') }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <!-- BootStrap Modal -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    <div class="top-header">DAILY TIME RECORD</div>

        <div class="sidebar">
            <img src="{{ asset('images/DTRlogs.png') }}" alt="Logo" class="logo">

            <button onclick="window.location.href='{{ route('admin.dashboard') }}'" class="active"><img src="{{ asset('icons/dashboard.png') }}" alt="Dashboard">Dashboard</button>
            <button onclick="window.location.href='{{ route('admin.employee') }}'"><img  src="{{ asset('icons/students.png') }}" alt="Employee">Employee List Info</button>

            <!-- <button onclick="window.location.href='{{ route('admin.employee') }}'"><img  src="{{ asset('icons/students.png') }}" alt="Employee">School Departments</button>
            <button onclick="window.location.href='{{ route('admin.employee') }}'"><img  src="{{ asset('icons/students.png') }}" alt="Employee">School Information</button>
            
            <button onclick="window.location.href='{{ route('admin.employee') }}'"><img  src="{{ asset('icons/students.png') }}" alt="Employee">Users Accounts</button> -->

       
            <!-- Logout Form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <button class="logout" onclick="document.getElementById('logout-form').submit();">
                <img src="{{ asset('icons/logout.png') }}" alt="Logout">Logout
            </button>
        </div>

</body>
</html>