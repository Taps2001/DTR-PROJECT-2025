
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
        <h2>Employees Data</h2>
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

    <!-- Add Student Modal -->
    <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content shadow-lg rounded-4">
                <!-- Modal Header -->
                <div class="modal-body d-flex justify-content-center align-items-center" style="background-color:rgba(30, 71, 206, 0.65); color: white;">
                    <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                    <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="addStudentForm">
                        <div class="row g-3">
                            <!-- First Row -->
                            <div class="col-md-4">
                                <label for="staffnumber" class="form-label">Staff Number</label>
                                <input type="text" class="form-control" id="staffnumber" name="staffnumber" required>
                            </div>

                            <div class="col-md-4">
                                <label for="EmployeeID" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="EmployeeID" name="EmployeeID" required>
                            </div>

                            <div class="col-md-4">
                                <label for="deviceID" class="form-label">Device ID</label>
                                <input type="text" class="form-control" id="deviceID" name="deviceID" required>
                            </div>

                            <!-- Second Row -->
                            <div class="col-md-5">
                                <label for="Lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="Lastname" name="Lastname" required>
                            </div>
                            <div class="col-md-5">
                                <label for="Firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="Firstname" name="Firstname" required>
                            </div>
                            <div class="col-md-2">
                                <label for="Middlename" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="Middlename" name="Middlename" required>
                            </div>

                            <!-- Third Row -->
                            <div class="col-md-4">
                                <label for="Gender" class="form-label">Gender</label>
                                <select class="form-select" id="Gender" name="Gender" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-5">
                                <label for="Dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="Dob" name="Dob" required>
                            </div>

                            <div class="col-md-3">
                                <label for="civilstatus" class="form-label">Civil Status</label>
                                <select class="form-select" id="civilstatus" name="civilstatus">
                                    <option value="" disabled>Choose...</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <!-- Fourth Row -->
                            <div class="col-md-6">
                                <label for="currentAddress" class="form-label">Current Address</label>
                                <input type="text" class="form-control" id="currentAddress" name="currentAddress">
                            </div>
                            <div class="col-md-6">
                                <label for="Guardian_Address" class="form-label">Guardian Address</label>
                                <input type="text" class="form-control" id="Guardian_Address" name="Guardian_Address">
                            </div>

                            <!-- Fifth Row (Provincial Address) -->
                            <div class="col-md-10 mx-auto my-3">
                                <label for="Provincialaddress" class="form-label">Provincial Address</label>
                                <input type="text" class="form-control" id="Provincialaddress" name="Provincialaddress">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  

    <!-- Import Modal -->
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content shadow-lg rounded-4 bg-white">
                <!-- Modal Header -->
                <div class="modal-body d-flex justify-content-center align-items-center" style="background-color:rgba(30, 71, 206, 0.65); color: white;">
                    <h5 class="modal-title" id="importStudentModalLabel">Upload Student Data File</h5>
                    <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body px-4 py-5">
                    <form id="importStudentForm">
                        <div class="row g-3">
                            <!-- File Upload Section -->
                            <div class="col-md-12">
                                <label for="fileUpload" class="form-label fs-5 fw-semibold text-dark">Select File to Upload</label>
                                <input type="file" class="form-control form-control-lg" id="fileUpload" name="fileUpload" required>
                                <small class="text-muted mt-2 d-block">Please select a valid data file and template for uploading.</small>
                            </div>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-outline-secondary btn-lg btn-sm" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle"></i> Close
                            </button>
                            <button type="submit" class="btn btn-primary btn-lg btn-sm">
                                <i class="bi bi-upload"></i> Upload File
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




<script>

    $('#addStudentButton').on('click', function(){
        $('#addStudentModal').modal('show');
    });

    $('#import').on('click', function() {
            $('#importModal').modal('show');
    });

</script>

</body>
</html>