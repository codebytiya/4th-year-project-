<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Portal - School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 20px 30px;
            box-shadow: var(--shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            font-size: 28px;
            color: white;
        }

        .logo-text h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .logo-text p {
            font-size: 14px;
            opacity: 0.9;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-details {
            text-align: right;
        }

        .user-name {
            font-weight: 600;
            font-size: 16px;
        }

        .user-role {
            font-size: 14px;
            opacity: 0.9;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .logout-btn {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logout-btn:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: white;
            padding: 20px 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: var(--dark);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
            font-weight: 500;
        }

        .nav-item:hover {
            background-color: rgba(52, 152, 219, 0.1);
            color: var(--secondary);
        }

        .nav-item.active {
            background-color: rgba(52, 152, 219, 0.1);
            color: var(--secondary);
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
            background-color: #eee;
            margin: 15px 25px;
        }

        .current-semester {
            padding: 20px 25px;
            background-color: #f8f9fa;
            margin: 20px 25px;
            border-radius: var(--border-radius);
            border-left: 4px solid var(--success);
        }

        .current-semester h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .current-semester p {
            font-size: 14px;
            color: #666;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .content-area {
            padding: 30px;
            flex: 1;
            overflow-y: auto;
        }

        .page-title {
            color: var(--primary);
            margin-bottom: 25px;
            font-size: 28px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .page-title i {
            color: var(--secondary);
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

        /* Timetable Section */
        .timetable-container {
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

        .timetable-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .select-control {
            padding: 8px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            background-color: white;
            font-size: 14px;
            min-width: 180px;
        }

        .timetable {
            overflow-x: auto;
            margin-top: 20px;
        }

        .timetable table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        .timetable th {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }

        .timetable td {
            padding: 15px;
            text-align: center;
            border: 1px solid #eee;
        }

        .timetable td.time {
            background-color: #f8f9fa;
            font-weight: 600;
            color: var(--primary);
        }

        .timetable td.subject {
            background-color: #e8f4fc;
            font-weight: 600;
            color: var(--dark);
        }

        .timetable td.free {
            background-color: #f9f9f9;
            color: #999;
            font-style: italic;
        }

        /* Results Upload Section */
        .upload-results-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 25px;
        }

        .upload-steps {
            display: flex;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background-color: #f8f9fa;
            border-radius: 30px;
            font-weight: 500;
        }

        .step.active {
            background-color: rgba(52, 152, 219, 0.1);
            color: var(--secondary);
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .step.active .step-number {
            background-color: var(--secondary);
            color: white;
        }

        .upload-form {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
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

        .file-upload-area {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 40px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .file-upload-area:hover {
            border-color: var(--secondary);
            background-color: rgba(52, 152, 219, 0.05);
        }

        .file-upload-area i {
            font-size: 48px;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .file-upload-area p {
            margin-bottom: 10px;
            color: #666;
        }

        .file-upload-area span {
            color: var(--secondary);
            font-weight: 600;
        }

        .file-name {
            background-color: #f8f9fa;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 10px;
            display: none;
        }

        .upload-preview {
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 30px;
        }

        .preview-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .preview-table th, .preview-table td {
            padding: 12px 15px;
            border: 1px solid #eee;
            text-align: left;
        }

        .preview-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }

        /* Results Management Section */
        .results-management {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .results-card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 25px;
        }

        .results-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .results-card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
        }

        .results-list {
            max-height: 300px;
            overflow-y: auto;
        }

        .result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .result-item:last-child {
            border-bottom: none;
        }

        .result-info h5 {
            font-size: 16px;
            margin-bottom: 5px;
            color: var(--primary);
        }

        .result-info p {
            font-size: 14px;
            color: #666;
        }

        .result-actions {
            display: flex;
            gap: 10px;
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
            .dashboard-cards {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .sidebar {
                width: 70px;
            }
            
            .nav-item span, .current-semester, .nav-divider {
                display: none;
            }
            
            .nav-item i {
                margin-right: 0;
                font-size: 20px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .user-info {
                width: 100%;
                justify-content: space-between;
            }
            
            .content-area {
                padding: 20px;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .timetable-controls {
                width: 100%;
                justify-content: space-between;
            }
        }

        @media (max-width: 480px) {
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
            
            .upload-steps {
                flex-direction: column;
            }
            
            .step {
                width: 100%;
            }
            
            .upload-form {
                grid-template-columns: 1fr;
            }
            
            .results-management {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <div class="nav-item active" data-section="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </div>
            
            <div class="nav-item" data-section="timetable">
                <i class="fas fa-calendar-alt"></i>
                <span>View Timetable</span>
            </div>
            
            <div class="nav-item" data-section="uploadResults">
                <i class="fas fa-upload"></i>
                <span>Upload Results</span>
            </div>
            
            <div class="nav-item" data-section="manageResults">
                <i class="fas fa-tasks"></i>
                <span>Manage Results</span>
            </div>
            
            <div class="nav-divider"></div>
            
            <div class="nav-item" data-section="myClasses">
                <i class="fas fa-users"></i>
                <span>My Classes</span>
            </div>
            
            <div class="nav-item" data-section="profile">
                <i class="fas fa-user-circle"></i>
                <span>My Profile</span>
            </div>
            
            <div class="current-semester">
                <h4>Current Semester</h4>
                <p>Fall 2023 - Semester 1</p>
                <p>Week 8 of 16</p>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="logo-container">
                    <div class="logo">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="logo-text">
                        <h1>School Management System</h1>
                        <p>Teacher Portal - Results & Timetable Management</p>
                    </div>
                </div>
                
                <div class="user-info">
                    <div class="user-details">
                        <div class="user-name">Dr. Michael Johnson</div>
                        <div class="user-role">Senior Teacher - Science Department</div>
                    </div>
                    <div class="user-avatar">
                        <i class="fas fa-user-tie"></i>
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
                    <h1 class="page-title">
                        <i class="fas fa-tachometer-alt"></i> Teacher Dashboard
                    </h1>
                    
                    <div class="dashboard-cards">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                                <span class="badge" style="background-color: #e74c3c; color: white; padding: 5px 10px; border-radius: 20px; font-size: 12px;">Today</span>
                            </div>
                            <div class="card-value">3</div>
                            <div class="card-title">Classes Today</div>
                            <div class="card-subtitle">Check your schedule for today</div>
                            <div class="card-actions">
                                <button class="btn btn-small view-timetable-btn">View Timetable</button>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <span class="badge" style="background-color: #f39c12; color: white; padding: 5px 10px; border-radius: 20px; font-size: 12px;">Pending</span>
                            </div>
                            <div class="card-value">24</div>
                            <div class="card-title">Results to Upload</div>
                            <div class="card-subtitle">Assignment results pending upload</div>
                            <div class="card-actions">
                                <button class="btn btn-small btn-warning upload-results-btn">Upload Now</button>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <span class="badge" style="background-color: #27ae60; color: white; padding: 5px 10px; border-radius: 20px; font-size: 12px;">Active</span>
                            </div>
                            <div class="card-value">5</div>
                            <div class="card-title">Active Classes</div>
                            <div class="card-subtitle">Classes you're teaching this semester</div>
                            <div class="card-actions">
                                <button class="btn btn-small btn-outline view-classes-btn">View Classes</button>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <span class="badge" style="background-color: #3498db; color: white; padding: 5px 10px; border-radius: 20px; font-size: 12px;">New</span>
                            </div>
                            <div class="card-value">7</div>
                            <div class="card-title">Notifications</div>
                            <div class="card-subtitle">Unread announcements and updates</div>
                            <div class="card-actions">
                                <button class="btn btn-small btn-outline view-notifications-btn">View All</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class="timetable-container">
                        <div class="section-header">
                            <h2 class="section-title">Quick Actions</h2>
                        </div>
                        
                        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <button class="btn" id="quickUploadBtn">
                                <i class="fas fa-upload"></i> Upload Assignment Results
                            </button>
                            <button class="btn btn-success" id="quickMidtermBtn">
                                <i class="fas fa-file-signature"></i> Input Midterm Scores
                            </button>
                            <button class="btn btn-warning" id="quickFinalBtn">
                                <i class="fas fa-graduation-cap"></i> Final Exam Results
                            </button>
                            <button class="btn btn-outline" id="quickTimetableBtn">
                                <i class="fas fa-calendar"></i> View Weekly Timetable
                            </button>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="upload-results-container">
                        <div class="section-header">
                            <h2 class="section-title">Recent Activity</h2>
                        </div>
                        
                        <div class="results-list">
                            <div class="result-item">
                                <div class="result-info">
                                    <h5>Mathematics 101 - Assignment 3</h5>
                                    <p>Uploaded on Oct 15, 2023 | 45 students</p>
                                </div>
                                <div class="result-actions">
                                    <button class="btn btn-small btn-outline">View</button>
                                    <button class="btn btn-small">Edit</button>
                                </div>
                            </div>
                            
                            <div class="result-item">
                                <div class="result-info">
                                    <h5>Physics 201 - Midterm Exam</h5>
                                    <p>Updated on Oct 12, 2023 | 38 students</p>
                                </div>
                                <div class="result-actions">
                                    <button class="btn btn-small btn-outline">View</button>
                                    <button class="btn btn-small">Edit</button>
                                </div>
                            </div>
                            
                            <div class="result-item">
                                <div class="result-info">
                                    <h5>Chemistry 101 - Lab Report 2</h5>
                                    <p>Uploaded on Oct 10, 2023 | 42 students</p>
                                </div>
                                <div class="result-actions">
                                    <button class="btn btn-small btn-outline">View</button>
                                    <button class="btn btn-small">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timetable Section -->
                <div class="section" id="timetableSection">
                    <h1 class="page-title">
                        <i class="fas fa-calendar-alt"></i> Teaching Timetable
                    </h1>
                    
                    <div class="timetable-container">
                        <div class="section-header">
                            <h2 class="section-title">Weekly Schedule</h2>
                            <div class="timetable-controls">
                                <select class="select-control" id="weekSelector">
                                    <option value="current">Current Week (Oct 16-20)</option>
                                    <option value="next">Next Week (Oct 23-27)</option>
                                    <option value="previous">Previous Week (Oct 9-13)</option>
                                </select>
                                
                                <select class="select-control" id="semesterSelector">
                                    <option value="fall2023">Fall 2023 - Semester 1</option>
                                    <option value="spring2023">Spring 2023 - Semester 2</option>
                                    <option value="fall2022">Fall 2022 - Semester 1</option>
                                </select>
                                
                                <button class="btn" id="printTimetableBtn">
                                    <i class="fas fa-print"></i> Print
                                </button>
                            </div>
                        </div>
                        
                        <div class="timetable">
                            <table id="timetableTable">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Timetable rows will be populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Timetable Notes -->
                    <div class="upload-results-container" style="margin-top: 30px;">
                        <h3 style="margin-bottom: 15px; color: var(--primary);">Timetable Notes</h3>
                        <ul style="padding-left: 20px; color: #666;">
                            <li style="margin-bottom: 10px;">Timetable is managed by the school administration department</li>
                            <li style="margin-bottom: 10px;">Any changes or conflicts should be reported to the admin office</li>
                            <li style="margin-bottom: 10px;">Room assignments are subject to change - check daily announcements</li>
                            <li>Free periods can be used for office hours, grading, or meetings</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Upload Results Section -->
                <div class="section" id="uploadResultsSection">
                    <h1 class="page-title">
                        <i class="fas fa-upload"></i> Upload Student Results
                    </h1>
                    
                    <div class="upload-results-container">
                        <div class="upload-steps">
                            <div class="step active" id="step1">
                                <div class="step-number">1</div>
                                <span>Select Assessment</span>
                            </div>
                            <div class="step" id="step2">
                                <div class="step-number">2</div>
                                <span>Upload File</span>
                            </div>
                            <div class="step" id="step3">
                                <div class="step-number">3</div>
                                <span>Review & Submit</span>
                            </div>
                        </div>
                        
                        <!-- Step 1: Select Assessment -->
                        <div class="upload-step active" id="step1Content">
                            <h3 style="margin-bottom: 20px; color: var(--primary);">Select Assessment Details</h3>
                            
                            <div class="upload-form">
                                <div class="form-group">
                                    <label class="form-label">Class</label>
                                    <select class="form-control" id="selectClass">
                                        <option value="">-- Select Class --</option>
                                        <option value="math101">Mathematics 101 - Year 1</option>
                                        <option value="physics201">Physics 201 - Year 2</option>
                                        <option value="chemistry101">Chemistry 101 - Year 1</option>
                                        <option value="biology301">Biology 301 - Year 3</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Assessment Type</label>
                                    <select class="form-control" id="assessmentType">
                                        <option value="">-- Select Type --</option>
                                        <option value="assignment">Assignment</option>
                                        <option value="midterm">Midterm Exam</option>
                                        <option value="final">Final Exam</option>
                                        <option value="quiz">Quiz</option>
                                        <option value="project">Project</option>
                                        <option value="lab">Lab Report</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Assessment Name/Number</label>
                                    <input type="text" class="form-control" id="assessmentName" placeholder="e.g., Assignment 3, Midterm Exam">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Maximum Score</label>
                                    <input type="number" class="form-control" id="maxScore" placeholder="e.g., 100" value="100">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Weight in Final Grade (%)</label>
                                    <input type="number" class="form-control" id="weight" placeholder="e.g., 30" value="30">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Due/Exam Date</label>
                                    <input type="date" class="form-control" id="dueDate">
                                </div>
                            </div>
                            
                            <div style="text-align: right; margin-top: 30px;">
                                <button class="btn" id="nextStep1Btn">Next <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                        
                        <!-- Step 2: Upload File -->
                        <div class="upload-step" id="step2Content">
                            <h3 style="margin-bottom: 20px; color: var(--primary);">Upload Results File</h3>
                            <p style="margin-bottom: 20px; color: #666;">Upload a CSV or Excel file with student IDs and scores. You can also download a template file to ensure correct formatting.</p>
                            
                            <div class="file-upload-area" id="fileUploadArea">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>Drag & drop your results file here or <span>browse</span></p>
                                <p style="font-size: 14px;">Supported formats: .csv, .xlsx, .xls (Max file size: 10MB)</p>
                                <input type="file" id="fileInput" accept=".csv,.xlsx,.xls" style="display: none;">
                            </div>
                            
                            <div class="file-name" id="fileNameDisplay">
                                <i class="fas fa-file"></i> <span id="fileNameText"></span>
                            </div>
                            
                            <div style="margin-top: 30px;">
                                <a href="#" class="btn btn-outline" id="downloadTemplateBtn">
                                    <i class="fas fa-download"></i> Download Template
                                </a>
                            </div>
                            
                            <div style="text-align: right; margin-top: 30px;">
                                <button class="btn btn-outline" id="backStep2Btn">
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                                <button class="btn" id="nextStep2Btn">Next <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                        
                        <!-- Step 3: Review & Submit -->
                        <div class="upload-step" id="step3Content">
                            <h3 style="margin-bottom: 20px; color: var(--primary);">Review & Submit Results</h3>
                            <p style="margin-bottom: 20px; color: #666;">Please review the information below before submitting the results to the system.</p>
                            
                            <div class="upload-preview">
                                <h4 style="margin-bottom: 15px; color: var(--primary);">Assessment Details</h4>
                                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px;">
                                    <div>
                                        <p><strong>Class:</strong> <span id="previewClass">Mathematics 101 - Year 1</span></p>
                                        <p><strong>Assessment Type:</strong> <span id="previewType">Assignment</span></p>
                                        <p><strong>Assessment Name:</strong> <span id="previewName">Assignment 3</span></p>
                                    </div>
                                    <div>
                                        <p><strong>Max Score:</strong> <span id="previewMaxScore">100</span></p>
                                        <p><strong>Weight:</strong> <span id="previewWeight">30%</span></p>
                                        <p><strong>Due Date:</strong> <span id="previewDueDate">Oct 15, 2023</span></p>
                                    </div>
                                </div>
                                
                                <h4 style="margin-bottom: 15px; color: var(--primary);">Student Results Preview</h4>
                                <div class="preview-table-container">
                                    <table class="preview-table">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Score</th>
                                                <th>Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody id="previewTableBody">
                                            <!-- Preview rows will be populated by JavaScript -->
                                       