
<head>
    <title>Employee</title>
    <link rel="icon" href="{{ asset('images/DTRlogs.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Style/dash.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="top-header">DAILY TIME RECORD</div>
    @include('sidebar.sidebar')
    
    <div class="main-content">
        <h2>Students Data</h2>
        <!-- Bootstrap Tabs -->
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Employee">Employee Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#TimeLogs">Time Logs</a>
            </li>
            
        </ul>

        <div class="tab-content mt-3">
            <!-- Empoyee -->
                <div id="Employee" class="tab-pane fade show active">

                <div class="d-flex buttons d-flex justify-content-end">
                    <button type="button" class="btn btn-sm btn-success" id="addStudentButton">Add Employee</button> 
                    <button type="button" class="btn btn-sm btn-warning" id="export">Export Template</button>
                    <button type="button" class="btn btn-sm btn-danger" id="import">Import Template</button> 
                </div>
                <div class="table-container">
                    <table id="Employee" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Gender</th>
                                <th>SchoolDepartment</th>
                                <th>Current Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

           <!-- Logs -->
            <div id="TimeLogs" class="tab-pane fade active">
                <div class="table-container">
                    <table id="TimeLogs" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th>ID Number</th>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Year Level</th>
                                <th>Action</th> -->
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>