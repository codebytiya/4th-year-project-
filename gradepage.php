<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International College of Business and Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4bb543;
            --warning: #ffcc00;
            --danger: #dc3545;
            --gray: #6c757d;
        }

        body {
            background-color: #f5f7fb;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            color: white;
            padding: 20px 0;
            transition: all 0.3s;
        }

        .logo {
            display: flex;
            align-items: center;
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo i {
            font-size: 28px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: 600;
            text-align: center;
        }

        .nav-links {
            margin-top: 20px;
        }

        .nav-links li {
            list-style: none;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .nav-links li:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-links li.active {
            background: rgba(255, 255, 255, 0.2);
            border-left: 4px solid var(--accent);
        }

        .nav-links i {
            margin-right: 10px;
            font-size: 18px;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .header h2 {
            color: var(--primary);
            font-weight: 6000;
            text-align: center;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            border: 2px solid var(--accent);
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card i {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .card h3 {
            font-size: 16px;
            color: var(--gray);
            margin-bottom: 5px;
        }

        .card .value {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }

        /* Content Sections */
        .content-section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .section-header h3 {
            color: var(--primary);
            font-weight: 600;
        }

        .section-header a {
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
        }

        /* Grades Table */
        .grades-table {
            width: 100%;
            border-collapse: collapse;
        }

        .grades-table th, .grades-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .grades-table th {
            background-color: #f8f9fa;
            color: var(--gray);
            font-weight: 600;
        }

        .grades-table tr:hover {
            background-color: #f8f9fa;
        }

        .grade {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
        }

        .grade.a {
            background-color: rgba(76, 201, 240, 0.2);
            color: var(--accent);
        }

        .grade.b {
            background-color: rgba(67, 97, 238, 0.2);
            color: var(--primary);
        }

        .grade.c {
            background-color: rgba(255, 204, 0, 0.2);
            color: #cc9900;
        }

        .grade.d {
            background-color: rgba(220, 53, 69, 0.2);
            color: var(--danger);
        }

        /* Exams List */
        .exams-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .exam-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-radius: 8px;
            background-color: #f8f9fa;
            transition: all 0.3s;
        }

        .exam-item:hover {
            background-color: #e9ecef;
        }

        .exam-info h4 {
            margin-bottom: 5px;
            color: var(--dark);
        }

        .exam-info p {
            color: var(--gray);
            font-size: 14px;
        }

        .exam-date {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: var(--primary);
            color: white;
            padding: 10px;
            border-radius: 8px;
            min-width: 80px;
        }

        .exam-date .day {
            font-size: 20px;
            font-weight: 700;
        }

        .exam-date .month {
            font-size: 14px;
        }

        /* Controls Section */
        .controls {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary);
        }

        .btn-secondary {
            background-color: var(--gray);
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Progress Bar */
        .progress-container {
            margin-top: 10px;
        }

        .progress-bar {
            height: 8px;
            background-color: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background-color: var(--primary);
            border-radius: 4px;
            transition: width 0.5s ease-in-out;
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            background-color: var(--success);
            color: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transform: translateX(150%);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }

        .notification.show {
            transform: translateX(0);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
            }

            .nav-links {
                display: flex;
                overflow-x: auto;
            }

            .nav-links li {
                flex: 0 0 auto;
            }
        }

        @media (max-width: 768px) {
            .dashboard-cards {
                grid-template-columns: 1fr;
            }

            .grades-table {
                display: block;
                overflow-x: auto;
            }

            .controls {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
                <h1>ICBM</h1>
            </div>
            <ul class="nav-links">
                <li class="active"><i class="fas fa-home"></i> Dashboard</li>
                <li><i class="fas fa-user-graduate"></i> My Profile</li>
                <li><i class="fas fa-book"></i> Courses</li>
            <li onclick="openTimetable()"><i class="fas fa-calendar-alt"><a href="timetable.html" style="color: white;">Timetable</a></i>
                <li><i class="fas fa-chart-bar"></i> <a href="transcript.html" style="color: white;">Grades</a></li>
                <li><i class="fas fa-sign-out-alt"></i> Logout</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h2>Student Dashboard</h2>
                <div class="user-info">
                    <img src="https://i.pravatar.cc/150?img=12" alt="Student">
                    <div>
                        <h4>Tiyamika Malunga</h4>
                        <p>Year 2 - Semester 4</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <div class="controls">
                <button id="updateGrades" class="btn btn-primary">
                    <i class="fas fa-sync-alt"></i> Simulate Grade Updates
                </button>
                <button id="resetGrades" class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Reset to Default
                </button>
            </div>

            <!-- Dashboard Cards -->
            <div class="dashboard-cards">
                <div class="card">
                    <i class="fas fa-book-open"></i>
                    <h3>Current Courses</h3>
                    <p class="value">6</p>
                </div>
                <div class="card">
                    <i class="fas fa-tasks"></i>
                    <h3>Pending Assignments</h3>
                    <p class="value">3</p>
                </div>
                <div class="card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Average Grade</h3>
                    <p id="averageGrade" class="value">88%</p>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div id="averageProgress" class="progress" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-calendar-day"></i>
                    <h3>Upcoming Exams</h3>
                    <p class="value">4</p>
                </div>
            </div>

            <!-- Grades Section -->
            <div class="content-section">
                <div class="section-header">
                    <h3>My Grades</h3>
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                <table class="grades-table">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Assignment</th>
                            <th>Mid-Term</th>
                            <th>End-Term</th>
                            <th>Overall</th>
                            <th>Progress</th>
                        </tr>
                    </thead>
                    <tbody id="gradesTableBody">
                        <!-- Grades will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>

            <!-- Upcoming Exams Section -->
            <div class="content-section">
                <div class="section-header">
                    <h3>Upcoming Exams</h3>
                    <a href="#">View Calendar <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="exams-list">
                    <div class="exam-item">
                        <div class="exam-info">
                            <h4>Mathematics - Final Exam</h4>
                            <p>Room 204, 9:00 AM - 11:00 AM</p>
                        </div>
                        <div class="exam-date">
                            <span class="day">15</span>
                            <span class="month">June</span>
                        </div>
                    </div>
                    <div class="exam-item">
                        <div class="exam-info">
                            <h4>Science - Practical Exam</h4>
                            <p>Science Lab, 10:30 AM - 12:00 PM</p>
                        </div>
                        <div class="exam-date">
                            <span class="day">18</span>
                            <span class="month">June</span>
                        </div>
                    </div>
                    <div class="exam-item">
                        <div class="exam-info">
                            <h4>English Literature - Written Exam</h4>
                            <p>Room 105, 1:00 PM - 3:00 PM</p>
                        </div>
                        <div class="exam-date">
                            <span class="day">20</span>
                            <span class="month">June</span>
                        </div>
                    </div>
                    <div class="exam-item">
                        <div class="exam-info">
                            <h4>History - Final Exam</h4>
                            <p>Room 312, 9:30 AM - 11:30 AM</p>
                        </div>
                        <div class="exam-date">
                            <span class="day">22</span>
                            <span class="month">June</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div id="notification" class="notification">
        <i class="fas fa-check-circle"></i> Grades updated successfully!
    </div>

    <script>
        // Student data structure
        const studentData = {
            name: "Alex Johnson",
            grade: "10",
            section: "A",
            courses: [
                { name: "Mathematics", assignment: 95, midterm: 92, endterm: 88 },
                { name: "Science", assignment: 98, midterm: 85, endterm: 87 },
                { name: "English", assignment: 88, midterm: 86, endterm: 84 },
                { name: "History", assignment: 92, midterm: 89, endterm: 91 },
                { name: "Computer Science", assignment: 96, midterm: 94, endterm: 95 }
            ]
        };

        // Function to calculate overall grade
        function calculateOverall(assignment, midterm, endterm) {
            return Math.round((assignment * 0.2) + (midterm * 0.3) + (endterm * 0.5));
        }

        // Function to get grade class based on percentage
        function getGradeClass(percentage) {
            if (percentage >= 90) return "a";
            if (percentage >= 80) return "b";
            if (percentage >= 70) return "c";
            return "d";
        }

        // Function to update the grades table
        function updateGradesTable() {
            const tableBody = document.getElementById('gradesTableBody');
            tableBody.innerHTML = '';
            
            let totalOverall = 0;
            
            studentData.courses.forEach(course => {
                const overall = calculateOverall(course.assignment, course.midterm, course.endterm);
                totalOverall += overall;
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${course.name}</td>
                    <td><span class="grade ${getGradeClass(course.assignment)}">${course.assignment}%</span></td>
                    <td><span class="grade ${getGradeClass(course.midterm)}">${course.midterm}%</span></td>
                    <td><span class="grade ${getGradeClass(course.endterm)}">${course.endterm}%</span></td>
                    <td><span class="grade ${getGradeClass(overall)}">${overall}%</span></td>
                    <td>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress" style="width: ${overall}%"></div>
                            </div>
                        </div>
                    </td>
                `;
                tableBody.appendChild(row);
            });
            
            // Update average grade
            const averageGrade = Math.round(totalOverall / studentData.courses.length);
            document.getElementById('averageGrade').textContent = `${averageGrade}%`;
            document.getElementById('averageProgress').style.width = `${averageGrade}%`;
        }

        // Function to simulate grade updates
        function simulateGradeUpdates() {
            studentData.courses.forEach(course => {
                // Randomly update grades with some constraints
                course.assignment = Math.min(100, Math.max(60, course.assignment + Math.floor(Math.random() * 10) - 3));
                course.midterm = Math.min(100, Math.max(60, course.midterm + Math.floor(Math.random() * 10) - 3));
                course.endterm = Math.min(100, Math.max(60, course.endterm + Math.floor(Math.random() * 10) - 3));
            });
            
            updateGradesTable();
            showNotification("Grades updated successfully!");
        }

        // Function to reset grades to default
        function resetGrades() {
            studentData.courses = [
                { name: "Mathematics", assignment: 95, midterm: 92, endterm: 88 },
                { name: "Science", assignment: 98, midterm: 85, endterm: 87 },
                { name: "English", assignment: 88, midterm: 86, endterm: 84 },
                { name: "History", assignment: 92, midterm: 89, endterm: 91 },
                { name: "Computer Science", assignment: 96, midterm: 94, endterm: 95 }
            ];
            
            updateGradesTable();
            showNotification("Grades reset to default values!");
        }

        // Function to show notification
        function showNotification(message) {
            const notification = document.getElementById('notification');
            notification.innerHTML = `<i class="fas fa-check-circle"></i> ${message}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Function to initialize the dashboard
        function initializeDashboard() {
            updateGradesTable();
            
            // Add event listeners
            document.getElementById('updateGrades').addEventListener('click', simulateGradeUpdates);
            document.getElementById('resetGrades').addEventListener('click', resetGrades);
            
            // Highlight active navigation item
            const navItems = document.querySelectorAll('.nav-links li');
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    navItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Add animation to cards on load
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });

            // Add hover effect to exam items
            const examItems = document.querySelectorAll('.exam-item');
            examItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(5px)';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });
        }

        // Add CSS animation
        const style = document.createElement('style');
        style.textContent = `
            .fade-in {
                animation: fadeIn 0.5s ease-in-out forwards;
                opacity: 0;
            }
            
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .grade-updated {
                animation: highlight 1s ease-in-out;
            }
            
            @keyframes highlight {
                0% { background-color: rgba(76, 201, 240, 0.3); }
                100% { background-color: transparent; }
            }
        `;
        document.head.appendChild(style);

        // Initialize the dashboard when the page loads
        document.addEventListener('DOMContentLoaded', initializeDashboard);

        // Simulate periodic grade updates (every 30 seconds)
        setInterval(simulateGradeUpdates, 30000);
    </script>
</body>
</html>