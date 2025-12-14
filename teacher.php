<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Teacher Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --success-color: #27ae60;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        /* Login Page Styles */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }

        .login-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 40px;
            width: 400px;
            max-width: 90%;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .login-header p {
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
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
            border-color: var(--secondary-color);
            outline: none;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .btn-logout {
            background-color: var(--accent-color);
            width: auto;
            padding: 8px 15px;
        }

        .btn-logout:hover {
            background-color: #c0392b;
        }

        .user-type-selector {
            display: flex;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .user-type {
            flex: 1;
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s;
        }

        .user-type.active {
            background-color: var(--secondary-color);
            color: white;
        }

        .error-message {
            color: var(--accent-color);
            margin-top: 10px;
            text-align: center;
            font-size: 14px;
        }

        /* Teacher Dashboard Styles */
        .sidebar {
            width: 250px;
            background-color: var(--primary-color);
            color: white;
            padding: 20px 0;
            display: none;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            display: none;
            flex-direction: column;
        }

        .header {
            background-color: white;
            padding: 15px 30px;
            box-shadow: var(--shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            color: var(--primary-color);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info i {
            font-size: 24px;
            color: var(--secondary-color);
        }

        .content {
            padding: 30px;
            flex: 1;
        }

        .section {
            background-color: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 25px;
            margin-bottom: 30px;
            display: none;
        }

        .section.active {
            display: block;
        }

        .section h3 {
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-color);
        }

        /* Navigation Styles */
        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
            border-left: 4px solid transparent;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .nav-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: var(--secondary-color);
        }

        .nav-item i {
            margin-right: 15px;
            font-size: 18px;
        }

        .logo {
            text-align: center;
            padding: 20px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .logo h2 {
            color: white;
        }

        /* Grade Input Styles */
        .grade-form {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            border-left: 4px solid var(--secondary-color);
        }

        .student-list {
            max-height: 400px;
            overflow-y: auto;
            margin-top: 20px;
        }

        .student-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 15px;
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            align-items: center;
        }

        .student-row.header {
            font-weight: 700;
            background-color: #f1f8ff;
            border-bottom: 2px solid var(--secondary-color);
        }

        .grade-input {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Timetable Styles */
        .timetable-controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .timetable {
            overflow-x: auto;
        }

        .timetable table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        .timetable th, .timetable td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .timetable th {
            background-color: var(--primary-color);
            color: white;
        }

        .timetable td {
            background-color: white;
        }

        .timetable td.subject {
            background-color: #e8f4fc;
            font-weight: 600;
            color: var(--dark-color);
        }

        .timetable td.free {
            background-color: #f9f9f9;
            color: #999;
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card i {
            font-size: 40px;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }

        .card h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
            font-size: 14px;
        }

        .card-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            margin: 10px 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            
            .nav-item span {
                display: none;
            }
            
            .nav-item i {
                margin-right: 0;
                font-size: 20px;
            }
            
            .content {
                padding: 20px;
            }
            
            .header {
                padding: 15px 20px;
            }
            
            .user-info span {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 30px 20px;
            }
            
            .section {
                padding: 20px 15px;
            }
            
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Login Page -->
    <div class="container login-container" id="loginPage">
        <div class="login-box">
            <div class="login-header">
                <h1><i class="fas fa-graduation-cap"></i> School Management System</h1>
                <p>Teacher Portal - Please login to continue</p>
            </div>
            
            <div class="user-type-selector">
                <div class="user-type active" id="teacherSelect">Teacher</div>
                <div class="user-type" id="adminSelect">Admin</div>
                <div class="user-type" id="studentSelect">Student</div>
            </div>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Teacher ID</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your teacher ID" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
                
                <button type="submit" class="btn">Login</button>
                
                <div class="error-message" id="loginError"></div>
            </form>
            
            <div style="margin-top: 20px; text-align: center; font-size: 14px; color: #666;">
                <p>Demo Credentials:<br>
                Teacher ID: teacher123<br>
                Password: password123</p>
            </div>
        </div>
    </div>
    
    <!-- Teacher Dashboard -->
    <div class="container" id="dashboard" style="display: none;">
        <!-- Sidebar Navigation -->
        <div class="sidebar" id="sidebar">
            <div class="logo">
                <h2><i class="fas fa-graduation-cap"></i> SMS</h2>
            </div>
            
            <a href="#" class="nav-item active" data-section="dashboardSection">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            
            <a href="#" class="nav-item" data-section="gradeInputSection">
                <i class="fas fa-edit"></i>
                <span>Input Grades</span>
            </a>
            
            <a href="#" class="nav-item" data-section="timetableSection">
                <i class="fas fa-calendar-alt"></i>
                <span>View Timetable</span>
            </a>
            
            <a href="#" class="nav-item" data-section="classesSection">
                <i class="fas fa-users"></i>
                <span>My Classes</span>
            </a>
            
            <a href="#" class="nav-item" data-section="profileSection">
                <i class="fas fa-user-circle"></i>
                <span>My Profile</span>
            </a>
        </div>
        
        <!-- Main Content Area -->
        <div class="main-content" id="mainContent">
            <!-- Header -->
            <div class="header">
                <h2 id="pageTitle">Teacher Dashboard</h2>
                
                <div class="user-info">
                    <span id="teacherName">Ms. Johnson</span>
                    <i class="fas fa-user-tie"></i>
                    <button class="btn btn-logout" id="logoutBtn">Logout</button>
                </div>
            </div>
            
            <!-- Content Sections -->
            <div class="content">
                <!-- Dashboard Section -->
                <div class="section active" id="dashboardSection">
                    <h3>Welcome to Teacher Dashboard</h3>
                    <p>Use the navigation menu to access different features of the school management system.</p>
                    
                    <div class="dashboard-cards">
                        <div class="card">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h4>My Classes</h4>
                            <div class="card-value">5</div>
                            <p>Classes assigned this semester</p>
                        </div>
                        
                        <div class="card">
                            <i class="fas fa-clipboard-list"></i>
                            <h4>Pending Grades</h4>
                            <div class="card-value">24</div>
                            <p>Grades to be submitted</p>
                        </div>
                        
                        <div class="card">
                            <i class="fas fa-calendar-day"></i>
                            <h4>Today's Classes</h4>
                            <div class="card-value">3</div>
                            <p>Classes scheduled for today</p>
                        </div>
                        
                        <div class="card">
                            <i class="fas fa-exclamation-circle"></i>
                            <h4>Notifications</h4>
                            <div class="card-value">7</div>
                            <p>Unread notifications</p>
                        </div>
                    </div>
                </div>
                
                <!-- Grade Input Section -->
                <div class="section" id="gradeInputSection">
                    <h3>Input Student Grades</h3>
                    <p>Select a class and input grades for students. Changes are saved automatically.</p>
                    
                    <div class="grade-form">
                        <div class="form-card">
                            <h4>Select Class</h4>
                            <select id="classSelect" class="form-control">
                                <option value="math101">Mathematics 101 - Year 1, Semester 1</option>
                                <option value="physics201">Physics 201 - Year 2, Semester 1</option>
                                <option value="chemistry101">Chemistry 101 - Year 1, Semester 1</option>
                                <option value="biology301">Biology 301 - Year 3, Semester 2</option>
                            </select>
                        </div>
                        
                        <div class="form-card">
                            <h4>Select Assessment</h4>
                            <select id="assessmentSelect" class="form-control">
                                <option value="midterm">Midterm Exam</option>
                                <option value="final">Final Exam</option>
                                <option value="assignment1">Assignment 1</option>
                                <option value="assignment2">Assignment 2</option>
                                <option value="project">Project</option>
                            </select>
                        </div>
                        
                        <div class="form-card">
                            <h4>Assessment Details</h4>
                            <div style="margin-top: 10px;">
                                <p><strong>Max Score:</strong> 100 points</p>
                                <p><strong>Due Date:</strong> <span id="dueDate">October 15, 2023</span></p>
                                <p><strong>Weight:</strong> 30% of final grade</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-list">
                        <div class="student-row header">
                            <div>Student Name</div>
                            <div>Student ID</div>
                            <div>Grade /100</div>
                        </div>
                        
                        <!-- Student rows will be populated by JavaScript -->
                    </div>
                    
                    <div style="margin-top: 20px; text-align: right;">
                        <button class="btn" id="saveGradesBtn">Save All Grades</button>
                    </div>
                </div>
                
                <!-- Timetable Section -->
                <div class="section" id="timetableSection">
                    <h3>Class Timetable</h3>
                    <p>View your teaching schedule for the current week. Timetable is managed by the admin.</p>
                    
                    <div class="timetable-controls">
                        <div>
                            <select id="weekSelect" class="form-control" style="width: auto;">
                                <option value="current">Current Week (Oct 9-13)</option>
                                <option value="next">Next Week (Oct 16-20)</option>
                                <option value="previous">Previous Week (Oct 2-6)</option>
                            </select>
                        </div>
                        
                        <div>
                            <button class="btn" id="printTimetableBtn">
                                <i class="fas fa-print"></i> Print Timetable
                            </button>
                        </div>
                    </div>
                    
                    <div class="timetable">
                        <table>
                            <thead>
                                <tr>
                                    <th>Time/Day</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                </tr>
                            </thead>
                            <tbody id="timetableBody">
                                <!-- Timetable rows will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- My Classes Section -->
                <div class="section" id="classesSection">
                    <h3>My Classes This Semester</h3>
                    <p>Below are the classes assigned to you for the current semester.</p>
                    
                    <div class="dashboard-cards">
                        <div class="card">
                            <i class="fas fa-square-root-alt"></i>
                            <h4>Mathematics 101</h4>
                            <p>Year 1, Semester 1</p>
                            <p><strong>Students:</strong> 45</p>
                            <p><strong>Schedule:</strong> Mon, Wed 9:00-10:30</p>
                        </div>
                        
                        <div class="card">
                            <i class="fas fa-atom"></i>
                            <h4>Physics 201</h4>
                            <p>Year 2, Semester 1</p>
                            <p><strong>Students:</strong> 38</p>
                            <p><strong>Schedule:</strong> Tue, Thu 11:00-12:30</p>
                        </div>
                        
                        <div class="card">
                            <i class="fas fa-flask"></i>
                            <h4>Chemistry 101</h4>
                            <p>Year 1, Semester 1</p>
                            <p><strong>Students:</strong> 42</p>
                            <p><strong>Schedule:</strong> Mon, Fri 14:00-15:30</p>
                        </div>
                        
                        <div class="card">
                            <i class="fas fa-dna"></i>
                            <h4>Biology 301</h4>
                            <p>Year 3, Semester 2</p>
                            <p><strong>Students:</strong> 32</p>
                            <p><strong>Schedule:</strong> Wed, Thu 10:00-11:30</p>
                        </div>
                    </div>
                </div>
                
                <!-- Profile Section -->
                <div class="section" id="profileSection">
                    <h3>My Profile</h3>
                    <div style="display: flex; gap: 30px; flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 300px;">
                            <div class="form-card" style="margin-bottom: 20px;">
                                <h4>Personal Information</h4>
                                <p><strong>Name:</strong> Ms. Sarah Johnson</p>
                                <p><strong>Teacher ID:</strong> TCH-2021-045</p>
                                <p><strong>Department:</strong> Science & Mathematics</p>
                                <p><strong>Email:</strong> s.johnson@school.edu</p>
                                <p><strong>Phone:</strong> (555) 123-4567</p>
                                <p><strong>Joined:</strong> August 2021</p>
                            </div>
                            
                            <div class="form-card">
                                <h4>Current Semester Details</h4>
                                <p><strong>Academic Year:</strong> 2023-2024</p>
                                <p><strong>Semester:</strong> Fall Semester (Semester 1)</p>
                                <p><strong>Total Classes:</strong> 4</p>
                                <p><strong>Total Students:</strong> 157</p>
                                <p><strong>Office Hours:</strong> Tuesday 2:00-4:00 PM</p>
                            </div>
                        </div>
                        
                        <div style="flex: 1; min-width: 300px;">
                            <div class="form-card">
                                <h4>Quick Actions</h4>
                                <div style="margin-top: 15px; display: flex; flex-direction: column; gap: 10px;">
                                    <button class="btn" style="margin-bottom: 5px;">
                                        <i class="fas fa-key"></i> Change Password
                                    </button>
                                    <button class="btn" style="margin-bottom: 5px;">
                                        <i class="fas fa-envelope"></i> Update Email
                                    </button>
                                    <button class="btn" style="margin-bottom: 5px;">
                                        <i class="fas fa-bell"></i> Notification Settings
                                    </button>
                                    <button class="btn" style="margin-bottom: 5px;">
                                        <i class="fas fa-download"></i> Download Schedule
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // DOM Elements
        const loginPage = document.getElementById('loginPage');
        const dashboard = document.getElementById('dashboard');
        const loginForm = document.getElementById('loginForm');
        const loginError = document.getElementById('loginError');
        const logoutBtn = document.getElementById('logoutBtn');
        const navItems = document.querySelectorAll('.nav-item');
        const sections = document.querySelectorAll('.section');
        const pageTitle = document.getElementById('pageTitle');
        const teacherName = document.getElementById('teacherName');
        const classSelect = document.getElementById('classSelect');
        const assessmentSelect = document.getElementById('assessmentSelect');
        const studentList = document.querySelector('.student-list');
        const saveGradesBtn = document.getElementById('saveGradesBtn');
        const weekSelect = document.getElementById('weekSelect');
        const timetableBody = document.getElementById('timetableBody');
        const printTimetableBtn = document.getElementById('printTimetableBtn');
        const userTypeSelectors = document.querySelectorAll('.user-type');

        // Demo teacher credentials
        const validCredentials = {
            username: 'teacher123',
            password: 'password123'
        };

        // Demo student data for grade input
        const demoStudents = {
            math101: [
                { id: 'S001', name: 'John Smith', grade: 85 },
                { id: 'S002', name: 'Emma Wilson', grade: 92 },
                { id: 'S003', name: 'Michael Brown', grade: 78 },
                { id: 'S004', name: 'Sophia Davis', grade: 88 },
                { id: 'S005', name: 'James Miller', grade: 95 }
            ],
            physics201: [
                { id: 'S101', name: 'Olivia Taylor', grade: 82 },
                { id: 'S102', name: 'William Johnson', grade: 76 },
                { id: 'S103', name: 'Ava Martinez', grade: 90 },
                { id: 'S104', name: 'Benjamin Anderson', grade: 85 },
                { id: 'S105', name: 'Mia Thomas', grade: 79 }
            ],
            chemistry101: [
                { id: 'S201', name: 'Ethan Jackson', grade: 87 },
                { id: 'S202', name: 'Charlotte White', grade: 93 },
                { id: 'S203', name: 'Daniel Harris', grade: 81 },
                { id: 'S204', name: 'Amelia Clark', grade: 89 },
                { id: 'S205', name: 'Matthew Lewis', grade: 84 }
            ],
            biology301: [
                { id: 'S301', name: 'Harper Walker', grade: 91 },
                { id: 'S302', name: 'Henry Hall', grade: 77 },
                { id: 'S303', name: 'Evelyn Allen', grade: 86 },
                { id: 'S304', name: 'Samuel Young', grade: 94 },
                { id: 'S305', name: 'Abigail King', grade: 82 }
            ]
        };

        // Timetable data
        const timetableData = {
            current: [
                { time: '8:00 - 9:30', mon: 'Mathematics 101', tue: 'Free', wed: 'Mathematics 101', thu: 'Free', fri: 'Chemistry 101' },
                { time: '9:45 - 11:15', mon: 'Free', tue: 'Physics 201', wed: 'Biology 301', thu: 'Physics 201', fri: 'Free' },
                { time: '11:30 - 13:00', mon: 'Office Hours', tue: 'Free', wed: 'Chemistry 101', thu: 'Biology 301', fri: 'Mathematics 101' },
                { time: '14:00 - 15:30', mon: 'Free', tue: 'Department Meeting', wed: 'Free', thu: 'Free', fri: 'Free' },
                { time: '15:45 - 17:15', mon: 'Free', tue: 'Free', wed: 'Free', thu: 'Free', fri: 'Staff Training' }
            ],
            next: [
                { time: '8:00 - 9:30', mon: 'Mathematics 101', tue: 'Free', wed: 'Mathematics 101', thu: 'Free', fri: 'Chemistry 101' },
                { time: '9:45 - 11:15', mon: 'Free', tue: 'Physics 201', wed: 'Biology 301', thu: 'Physics 201', fri: 'Free' },
                { time: '11:30 - 13:00', mon: 'Office Hours', tue: 'Free', wed: 'Chemistry 101', thu: 'Biology 301', fri: 'Mathematics 101' },
                { time: '14:00 - 15:30', mon: 'Free', tue: 'Free', wed: 'Free', thu: 'Free', fri: 'Parent Meetings' },
                { time: '15:45 - 17:15', mon: 'Free', tue: 'Free', wed: 'Free', thu: 'Free', fri: 'Free' }
            ],
            previous: [
                { time: '8:00 - 9:30', mon: 'Mathematics 101', tue: 'Free', wed: 'Mathematics 101', thu: 'Free', fri: 'Chemistry 101' },
                { time: '9:45 - 11:15', mon: 'Free', tue: 'Physics 201', wed: 'Biology 301', thu: 'Physics 201', fri: 'Free' },
                { time: '11:30 - 13:00', mon: 'Office Hours', tue: 'Free', wed: 'Chemistry 101', thu: 'Biology 301', fri: 'Mathematics 101' },
                { time: '14:00 - 15:30', mon: 'Free', tue: 'Free', wed: 'Exam Preparation', thu: 'Free', fri: 'Free' },
                { time: '15:45 - 17:15', mon: 'Free', tue: 'Free', wed: 'Free', thu: 'Free', fri: 'Free' }
            ]
        };

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Check if user is already logged in (from session storage)
            const isLoggedIn = sessionStorage.getItem('teacherLoggedIn');
            if (isLoggedIn === 'true') {
                showDashboard();
            }
            
            // Set up event listeners for user type selector
            userTypeSelectors.forEach(selector => {
                selector.addEventListener('click', function() {
                    userTypeSelectors.forEach(s => s.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Set up event listeners for navigation
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Update active nav item
                    navItems.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show corresponding section
                    const sectionId = this.getAttribute('data-section');
                    showSection(sectionId);
                    
                    // Update page title
                    const sectionName = this.querySelector('span').textContent;
                    pageTitle.textContent = sectionName;
                });
            });
            
            // Populate student list for grade input
            populateStudentList('math101');
            
            // Populate timetable
            populateTimetable('current');
        });

        // Login form submission
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Validate credentials
            if (username === validCredentials.username && password === validCredentials.password) {
                // Successful login
                loginError.textContent = '';
                sessionStorage.setItem('teacherLoggedIn', 'true');
                showDashboard();
            } else {
                // Failed login
                loginError.textContent = 'Invalid teacher ID or password. Please try again.';
            }
        });

        // Logout functionality
        logoutBtn.addEventListener('click', function() {
            sessionStorage.removeItem('teacherLoggedIn');
            showLoginPage();
        });

        // Class selection for grade input
        classSelect.addEventListener('change', function() {
            const selectedClass = this.value;
            populateStudentList(selectedClass);
        });

        // Assessment selection for grade input
        assessmentSelect.addEventListener('change', function() {
            // Update due date based on assessment
            const dueDates = {
                midterm: 'October 15, 2023',
                final: 'December 10, 2023',
                assignment1: 'September 20, 2023',
                assignment2: 'November 5, 2023',
                project: 'November 25, 2023'
            };
            
            const selectedAssessment = this.value;
            document.getElementById('dueDate').textContent = dueDates[selectedAssessment] || 'October 15, 2023';
        });

        // Save grades button
        saveGradesBtn.addEventListener('click', function() {
            // Collect all grades
            const gradeInputs = document.querySelectorAll('.grade-input');
            const grades = [];
            
            gradeInputs.forEach(input => {
                grades.push({
                    studentId: input.getAttribute('data-student-id'),
                    grade: input.value
                });
            });
            
            // In a real application, you would send this data to the server
            alert(`Grades for ${grades.length} students have been saved successfully!`);
            
            // Update button text temporarily to show success
            const originalText = this.textContent;
            this.textContent = 'Grades Saved!';
            this.style.backgroundColor = 'var(--success-color)';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.backgroundColor = '';
            }, 2000);
        });

        // Week selection for timetable
        weekSelect.addEventListener('change', function() {
            const selectedWeek = this.value;
            populateTimetable(selectedWeek);
        });

        // Print timetable button
        printTimetableBtn.addEventListener('click', function() {
            window.print();
        });

        // Functions
        function showDashboard() {
            loginPage.style.display = 'none';
            dashboard.style.display = 'flex';
            
            // Show sidebar and main content
            document.getElementById('sidebar').style.display = 'flex';
            document.getElementById('mainContent').style.display = 'flex';
        }

        function showLoginPage() {
            loginPage.style.display = 'flex';
            dashboard.style.display = 'none';
            
            // Clear login form
            loginForm.reset();
        }

        function showSection(sectionId) {
            // Hide all sections
            sections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show selected section
            document.getElementById(sectionId).classList.add('active');
        }

        function populateStudentList(className) {
            // Clear existing student list (except header)
            const rows = studentList.querySelectorAll('.student-row:not(.header)');
            rows.forEach(row => row.remove());
            
            // Get students for selected class
            const students = demoStudents[className] || demoStudents.math101;
            
            // Add student rows
            students.forEach(student => {
                const row = document.createElement('div');
                row.className = 'student-row';
                row.innerHTML = `
                    <div>${student.name}</div>
                    <div>${student.id}</div>
                    <div>
                        <input type="number" min="0" max="100" value="${student.grade}" 
                               class="grade-input" data-student-id="${student.id}">
                    </div>
                `;
                studentList.appendChild(row);
            });
        }

        function populateTimetable(week) {
            // Clear existing timetable
            timetableBody.innerHTML = '';
            
            // Get timetable data for selected week
            const timetable = timetableData[week] || timetableData.current;
            
            // Add timetable rows
            timetable.forEach(rowData => {
                const row = document.createElement('tr');
                
                // Add time cell
                const timeCell = document.createElement('td');
                timeCell.textContent = rowData.time;
                row.appendChild(timeCell);
                
                // Add day cells
                const days = ['mon', 'tue', 'wed', 'thu', 'fri'];
                days.forEach(day => {
                    const cell = document.createElement('td');
                    const subject = rowData[day];
                    
                    if (subject === 'Free') {
                        cell.className = 'free';
                        cell.textContent = subject;
                    } else {
                        cell.className = 'subject';
                        cell.textContent = subject;
                    }
                    
                    row.appendChild(cell);
                });
                
                timetableBody.appendChild(row);
            });
        }
    </script>
</body>
</html>