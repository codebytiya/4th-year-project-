 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --success: #27ae60;
            --warning: #f39c12;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --sidebar: #1a252f;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --border-radius: 10px;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            background-color: var(--sidebar);
            color: white;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            padding: 0 25px 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        .logo {
            font-size: 36px;
            color: white;
            margin-bottom: 10px;
        }

        .logo-text h2 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .logo-text p {
            font-size: 14px;
            opacity: 0.8;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
            cursor: pointer;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
        }

        .nav-item.active {
            background-color: rgba(52, 152, 219, 0.2);
            color: white;
            border-left-color: var(--secondary);
        }

        .nav-item i {
            margin-right: 15px;
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .nav-divider {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.1);
            margin: 15px 25px;
        }

        .admin-info {
            padding: 20px 25px;
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(52, 152, 219, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .admin-details h4 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .admin-details p {
            font-size: 14px;
            opacity: 0.8;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: white;
            padding: 20px 30px;
            box-shadow: var(--shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-title h1 {
            color: var(--primary);
            font-size: 28px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-title p {
            color: #666;
            font-size: 14px;
            margin-top: 5px;
        }

        .header-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .notification-badge {
            position: relative;
            cursor: pointer;
        }

        .notification-badge i {
            font-size: 22px;
            color: var(--primary);
        }

        .badge-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent);
            color: white;
            font-size: 12px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .logout-btn {
            background-color: var(--accent);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        .content-area {
            padding: 30px;
            flex: 1;
            overflow-y: auto;
        }

        /* Dashboard Section */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            transition: transform 0.3s;
            border-top: 4px solid var(--secondary);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background-color: rgba(52, 152, 219, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--secondary);
        }

        .card-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
            margin: 10px 0;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-size: 14px;
            color: #666;
        }

        .card-actions {
            margin-top: 20px;
        }

        /* Common Styles */
        .btn {
            display: inline-block;
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
            text-decoration: none;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--secondary);
            color: var(--secondary);
        }

        .btn-outline:hover {
            background-color: rgba(52, 152, 219, 0.1);
        }

        .btn-success {
            background-color: var(--success);
        }

        .btn-success:hover {
            background-color: #219653;
        }

        .btn-warning {
            background-color: var(--warning);
        }

        .btn-warning:hover {
            background-color: #e67e22;
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 13px;
        }

        .section-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 25px;
            margin-bottom: 30px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .section-title {
            color: var(--primary);
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--secondary);
            outline: none;
        }

        .select-control {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            background-color: white;
            font-size: 14px;
            min-width: 200px;
        }

        /* Enrollment Section */
        .enrollment-form {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .form-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            border-left: 4px solid var(--secondary);
        }

        .student-photo-upload {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .student-photo-upload:hover {
            border-color: var(--secondary);
            background-color: rgba(52, 152, 219, 0.05);
        }

        .student-photo-upload i {
            font-size: 48px;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .photo-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            display: none;
        }

        /* Student List Table */
        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        .data-table th {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            position: sticky;
            top: 0;
        }

        .data-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .data-table tr:hover {
            background-color: #f9f9f9;
        }

        .student-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #e8f4fc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            font-weight: 600;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-active {
            background-color: rgba(39, 174, 96, 0.1);
            color: var(--success);
        }

        .status-inactive {
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--accent);
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        /* Timetable Management */
        .timetable-upload-area {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 40px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 30px;
        }

        .timetable-upload-area:hover {
            border-color: var(--secondary);
            background-color: rgba(52, 152, 219, 0.05);
        }

        .timetable-upload-area i {
            font-size: 48px;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .timetable-preview {
            margin-top: 30px;
        }

        .timetable-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .timetable-table th, .timetable-table td {
            padding: 12px 15px;
            border: 1px solid #eee;
            text-align: center;
        }

        .timetable-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }

        .timetable-table td.subject {
            background-color: #e8f4fc;
            font-weight: 600;
        }

        /* Grades Section */
        .grades-filter {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .grade-summary {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .grade-item {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .grade-letter {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .grade-A { color: var(--success); }
        .grade-B { color: #2ecc71; }
        .grade-C { color: #f39c12; }
        .grade-D { color: #e67e22; }
        .grade-F { color: var(--accent); }

        .grade-count {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: var(--shadow);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .modal-title {
            color: var(--primary);
            font-size: 22px;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 24px;
            color: #999;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close-modal:hover {
            color: var(--accent);
        }

        /* Notifications */
        .notification {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--success);
            color: white;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 15px;
            z-index: 1000;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s;
        }

        .notification.show {
            transform: translateY(0);
            opacity: 1;
        }

        .notification-error {
            background-color: var(--accent);
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .sidebar {
                width: 80px;
            }
            
            .logo-text, .nav-item span, .admin-details, .nav-divider {
                display: none;
            }
            
            .nav-item i {
                margin-right: 0;
                font-size: 20px;
            }
            
            .logo-container {
                padding: 15px;
            }
            
            .admin-info {
                justify-content: center;
                padding: 15px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .header-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .content-area {
                padding: 20px;
            }
            
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 480px) {
            .enrollment-form {
                grid-template-columns: 1fr;
            }
            
            .grade-summary {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                padding: 20px;
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <div class="logo-container">
                <div class="logo">
                    <i class="fas fa-school"></i>
                </div>
                <div class="logo-text">
                    <h2>SMS Admin</h2>
                    <p>Administrator Panel</p>
                </div>
            </div>
            
            <div class="nav-item active" data-section="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </div>
            
            <div class="nav-item" data-section="enrollment">
                <i class="fas fa-user-plus"></i>
                <span>Enroll Students</span>
            </div>
            
            <div class="nav-item" data-section="students">
                <i class="fas fa-users"></i>
                <span>Student Management</span>
            </div>
            
            <div class="nav-item" data-section="timetable">
                <i class="fas fa-calendar-alt"></i>
                <span>Timetable Management</span>
            </div>
            
            <div class="nav-item" data-section="grades">
                <i class="fas fa-chart-bar"></i>
                <span>Student Grades</span>
            </div>
            
            <div class="nav-divider"></div>
            
            <div class="nav-item" data-section="teachers">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Teacher Management</span>
            </div>
            
            <div class="nav-item" data-section="reports">
                <i class="fas fa-file-alt"></i>
                <span>Reports & Analytics</span>
            </div>
            
            <div class="nav-item" data-section="settings">
                <i class="fas fa-cog"></i>
                <span>System Settings</span>
            </div>
            
            <div class="admin-info">
                <div class="admin-avatar">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="admin-details">
                    <h4>Admin User</h4>
                    <p>System Administrator</p>
                </div>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="header-title">
                    <h1 id="pageTitle">
                        <i class="fas fa-tachometer-alt"></i> Admin Dashboard
                    </h1>
                    <p id="pageSubtitle">Manage students, timetables, and grades</p>
                </div>
                
                <div class="header-actions">
                    <div class="notification-badge" id="notificationBtn">
                        <i class="fas fa-bell"></i>
                        <div class="badge-count">5</div>
                    </div>
                    
                    <button class="logout-btn" id="logoutBtn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </div>
            </div>
            
            <!-- Content Area -->
            <div class="content-area">
                <!-- Dashboard Section -->
                <div class="section active" id="dashboardSection">
                    <div class="dashboard-cards">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <span class="status-badge status-active">Active</span>
                            </div>
                            <div class="card-value" id="totalStudents">1,245</div>
                            <div class="card-title">Total Students</div>
                            <div class="card-subtitle">Enrolled in current semester</div>
                            <div class="card-actions">
                                <button class="btn btn-small view-students-btn">View All</button>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <span class="status-badge status-active">Active</span>
                            </div>
                            <div class="card-value" id="totalTeachers">68</div>
                            <div class="card-title">Teaching Staff</div>
                            <div class="card-subtitle">Active faculty members</div>
                            <div class="card-actions">
                                <button class="btn btn-small btn-outline">Manage</button>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span class="status-badge status-active">Current</span>
                            </div>
                            <div class="card-value" id="activeCourses">42</div>
                            <div class="card-title">Active Courses</div>
                            <div class="card-subtitle">Being offered this semester</div>
                            <div class="card-actions">
                                <button class="btn btn-small btn-outline">View Courses</button>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <span class="status-badge status-active">Updated</span>
                            </div>
                            <div class="card-value" id="pendingTasks">18</div>
                            <div class="card-title">Pending Tasks</div>
                            <div class="card-subtitle">Require admin attention</div>
                            <div class="card-actions">
                                <button class="btn btn-small btn-warning">View Tasks</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Stats -->
                    <div class="section-container">
                        <div class="section-header">
                            <h2 class="section-title">System Overview</h2>
                            <div>
                                <select class="select-control" id="semesterFilter">
                                    <option value="fall2023">Fall 2023 Semester</option>
                                    <option value="spring2023">Spring 2023 Semester</option>
                                    <option value="fall2022">Fall 2022 Semester</option>
                                </select>
                            </div>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
                            <div style="text-align: center; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                                <div style="font-size: 32px; font-weight: 700; color: var(--primary);">92%</div>
                                <div style="font-size: 14px; color: #666; margin-top: 5px;">Attendance Rate</div>
                            </div>
                            
                            <div style="text-align: center; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                                <div style="font-size: 32px; font-weight: 700; color: var(--success);">3.8</div>
                                <div style="font-size: 14px; color: #666; margin-top: 5px;">Average GPA</div>
                            </div>
                            
                            <div style="text-align: center; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                                <div style="font-size: 32px; font-weight: 700; color: var(--secondary);">98%</div>
                                <div style="font-size: 14px; color: #666; margin-top: 5px;">System Uptime</div>
                            </div>
                            
                            <div style="text-align: center; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                                <div style="font-size: 32px; font-weight: 700; color: var(--warning);">24</div>
                                <div style="font-size: 14px; color: #666; margin-top: 5px;">Pending Approvals</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="section-container">
                        <div class="section-header">
                            <h2 class="section-title">Recent Activity</h2>
                            <button class="btn btn-outline btn-small">View All</button>
                        </div>
                        
                        <div class="table-container">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Activity</th>
                                        <th>User</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Today, 10:30 AM</td>
                                        <td>New student enrolled</td>
                                        <td>Admin User</td>
                                        <td>John Smith (ID: S20231234)</td>
                                    </tr>
                                    <tr>
                                        <td>Yesterday, 3:45 PM</td>
                                        <td>Timetable uploaded</td>
                                        <td>Admin User</td>
                                        <td>Science Department - Fall 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Oct 15, 2:15 PM</td>
                                        <td>Grades updated</td>
                                        <td>Dr. Johnson</td>
                                        <td>Mathematics 101 - Midterm Exam</td>
                                    </tr>
                                    <tr>
                                        <td>Oct 14, 11:20 AM</td>
                                        <td>New teacher added</td>
                                        <td>Admin User</td>
                                        <td>Ms. Davis - Physics Department</td>
                                    </tr>
                                    <tr>
                                        <td>Oct 13, 4:30 PM</td>
                                        <td>System maintenance</td>
                                        <td>System</td>
                                        <td>Database backup completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Enrollment Section -->
                <div class="section" id="enrollmentSection">
                    <div class="section-container">
                        <div class="section-header">
                            <h2 class="section-title">Enroll New Student</h2>
                            <button class="btn" id="bulkEnrollBtn">
                                <i class="fas fa-file-upload"></i> Bulk Enrollment
                            </button>
                        </div>
                        
                        <div class="enrollment-form">
                            <div class="form-card">
                                <h3 style="margin-bottom: 20px; color: var(--primary);">Student Information</h3>
                                
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="studentName" placeholder="Enter student's full name">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="studentDOB">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control" id="studentGender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="studentEmail" placeholder="student@school.edu">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="studentPhone" placeholder="+1 (555) 123-4567">
                                </div>
                            </div>
                            
                            <div class="form-card">
                                <h3 style="margin-bottom: 20px; color: var(--primary);">Academic Information</h3>
                                
                                <div class="form-group">
                                    <label class="form-label">Student ID</label>
                                    <input type="text" class="form-control" id="studentID" placeholder="Auto-generated" readonly>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Admission Year</label>
                                    <select class="form-control" id="admissionYear">
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Current Grade/Year</label>
                                    <select class="form-control" id="studentYear">
                                        <option value="1">Year 1</option>
                                        <option value="2">Year 2</option>
                                        <option value="3">Year 3</option>
                                        <option value="4">Year 4</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Semester</label>
                                    <select class="form-control" id="studentSemester">
                                        <option value="1">Semester 1</option>
                                        <option value="2">Semester 2</option>
                                        <option value="3">Semester 3</option>
                                        <option value="4">Semester 4</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Program/Department</label>
                                    <select class="form-control" id="studentProgram">
                                        <option value="">Select Program</option>
                                        <option value="science">Science</option>
                                        <option value="arts">Arts</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="engineering">Engineering</option>
                                        <option value="medicine">Medicine</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-card">
                                <h3 style="margin-bottom: 20px; color: var(--primary);">Additional Information</h3>
                                
                                <div class="student-photo-upload" id="photoUploadArea">
                                    <img id="photoPreview" class="photo-preview" alt="Student Photo">
                                    <i class="fas fa-camera" id="photoIcon"></i>
                                    <p>Click to upload student photo</p>
                                    <p style="font-size: 14px;">Recommended: 300x300px, JPG/PNG</p>
                                    <input type="file" id="photoInput" accept="image/*" style="display: none;">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" id="studentAddress" rows="3" placeholder="Full residential address"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Guardian/Parent Name</label>
                                    <input type="text" class="form-control" id="guardianName" placeholder="Guardian's full name">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Guardian Contact</label>
                                    <input type="tel" class="form-control" id="guardianPhone" placeholder="Guardian's phone number">
                                </div>
                            </div>
                        </div>
                        
                        <div style="text-align: right; margin-top: 30px;">
                            <button class="btn btn-outline" id="clearFormBtn">Clear Form</button>
                            <button class="btn btn-success" id="enrollStudentBtn">
                                <i class="fas fa-user-plus"></i> Enroll Student
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Student Management Section -->
                <div class="section" id="studentsSection">
                    <div class="section-container">
                        <div class="section-header">
                            <h2 class="section-title">Student Management</h2>
                            <div style="display: flex; gap: 15px;">
                                <input type="text" class="form-control" id="searchStudents" placeholder="Search students..." style="width: 250px;">
                                <button class="btn btn-outline">
                                    <i class="fas fa-filter"></i> Filter
                                </button>
                                <button class="btn">
                                    <i class="fas fa-download"></i> Export
                                </button>
                            </div>
                        </div>
                        
                        <div class="table-container">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student</th>
                                        <th>Program</th>
                                        <th>Year</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="studentsTable