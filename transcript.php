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
            --primary: #3498db;
            --secondary: #2c3e50;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
            --light: #ecf0f1;
            --dark: #34495e;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 10px 10px;
            margin-bottom: 30px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo i {
            font-size: 2.5rem;
        }

        .logo h1 {
            font-size: 1.8rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--secondary);
        }

        .nav-tabs {
            display: flex;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .tab:hover {
            background-color: var(--light);
        }

        .tab.active {
            background-color: var(--primary);
            color: white;
        }

        .content-section {
            display: none;
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .content-section.active {
            display: block;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--secondary);
            border-bottom: 2px solid var(--light);
            padding-bottom: 10px;
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }

        .stat-icon.primary {
            background-color: rgba(52, 152, 219, 0.2);
            color: var(--primary);
        }

        .stat-icon.success {
            background-color: rgba(46, 204, 113, 0.2);
            color: var(--success);
        }

        .stat-icon.warning {
            background-color: rgba(243, 156, 18, 0.2);
            color: var(--warning);
        }

        .stat-info h3 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .semester-selector {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .semester-btn {
            padding: 10px 20px;
            background-color: var(--light);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .semester-btn.active {
            background-color: var(--primary);
            color: white;
        }

        .grades-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .grades-table th, .grades-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .grades-table th {
            background-color: var(--light);
            font-weight: 600;
        }

        .grades-table tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
        }

        .grade-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .grade-A {
            background-color: rgba(46, 204, 113, 0.2);
            color: var(--success);
        }

        .grade-B {
            background-color: rgba(52, 152, 219, 0.2);
            color: var(--primary);
        }

        .grade-C {
            background-color: rgba(243, 156, 18, 0.2);
            color: var(--warning);
        }

        .grade-D {
            background-color: rgba(231, 76, 60, 0.2);
            color: var(--danger);
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-success {
            background-color: var(--success);
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .transcript-preview {
            background-color: white;
            border: 1px solid #ddd;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .transcript-header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 20px;
        }

        .transcript-student-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .transcript-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .transcript-table th, .transcript-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .transcript-table th {
            background-color: var(--light);
        }

        .transcript-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .print-only {
            display: none;
        }

        @media print {
            body * {
                visibility: hidden;
            }
            .transcript-preview, .transcript-preview * {
                visibility: visible;
            }
            .transcript-preview {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                box-shadow: none;
                border: none;
            }
            .no-print {
                display: none;
            }
            .print-only {
                display: block;
            }
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: var(--dark);
            font-size: 0.9rem;
        }

        .progress-container {
            margin-bottom: 30px;
        }

        .progress-bar {
            height: 10px;
            background-color: var(--light);
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .progress {
            height: 100%;
            background-color: var(--primary);
            border-radius: 5px;
        }

        .progress-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: var(--dark);
        }

        .year-selector {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .year-btn {
            padding: 10px 20px;
            background-color: var(--light);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .year-btn.active {
            background-color: var(--primary);
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-graduation-cap"></i>
                    <h1>International College of Business and Management</h1>
                </div>
                <div class="user-info">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h3>Tiyamika Malunga</h3>
                        <p>Student <ID:MA1600></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="nav-tabs">
            <div class="tab" data-target="dashboard">Dashboard</div>
            <div class="tab" data-target="grades">Grades</div>
            <div class="tab active" data-target="transcript">Transcript</div>
            <div class="tab" data-target="progress">Academic Progress</div>
        </div>

        <!-- Dashboard Section -->
        <section id="dashboard" class="content-section active">
            <h2 class="section-title">Student Dashboard</h2>
            
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-info">
                        <h3>3.75</h3>
                        <p>Current GPA</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon success">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3>48</h3>
                        <p>Credits Completed</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon warning">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-info">
                        <h3>5</h3>
                        <p>Current Courses</p>
                    </div>
                </div>
            </div>
            
            <div class="semester-selector">
                <button class="semester-btn active" data-semester="1">Semester 1</button>
                <button class="semester-btn" data-semester="2">Semester 2</button>
            </div>
            
            <h3 class="section-title">Current Semester Grades</h3>
            
            <table class="grades-table">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Assignment</th>
                        <th>Midterm</th>
                        <th>Final Exam</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CS101</td>
                        <td>Introduction to Programming</td>
                        <td>85</td>
                        <td>78</td>
                        <td>82</td>
                        <td>81.5</td>
                        <td><span class="grade-badge grade-B">B</span></td>
                    </tr>
                    <tr>
                        <td>MATH201</td>
                        <td>Calculus I</td>
                        <td>92</td>
                        <td>88</td>
                        <td>90</td>
                        <td>90.0</td>
                        <td><span class="grade-badge grade-A">A</span></td>
                    </tr>
                    <tr>
                        <td>ENG101</td>
                        <td>English Composition</td>
                        <td>78</td>
                        <td>82</td>
                        <td>80</td>
                        <td>80.0</td>
                        <td><span class="grade-badge grade-B">B</span></td>
                    </tr>
                    <tr>
                        <td>PHY101</td>
                        <td>Physics I</td>
                        <td>88</td>
                        <td>85</td>
                        <td>87</td>
                        <td>86.7</td>
                        <td><span class="grade-badge grade-B">B+</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Grades Section -->
        <section id="grades" class="content-section">
            <h2 class="section-title">Academic Grades</h2>
            
            <div class="year-selector">
                <button class="year-btn active" data-year="1">Year 1</button>
                <button class="year-btn" data-year="2">Year 2</button>
                <button class="year-btn" data-year="3">Year 3</button>
                <button class="year-btn" data-year="4">Year 4</button>
            </div>
            
            <div class="semester-selector">
                <button class="semester-btn active" data-semester="1">Semester 1</button>
                <button class="semester-btn" data-semester="2">Semester 2</button>
            </div>
            
            <table class="grades-table">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credits</th>
                        <th>Assignment</th>
                        <th>Midterm</th>
                        <th>Final Exam</th>
                        <th>Total</th>
                        <th>Grade</th>
                        <th>GPA</th>
                    </tr>
                </thead>
                <tbody id="grades-table-body">
                    <!-- Grades will be populated by JavaScript -->
                </tbody>
            </table>
            
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="semester-gpa">0.00</h3>
                        <p>Semester GPA</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon success">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="cumulative-gpa">0.00</h3>
                        <p>Cumulative GPA</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon warning">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-credits">0</h3>
                        <p>Total Credits</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Transcript Section -->
        <section id="transcript" class="content-section">
            <h2 class="section-title">Academic Transcript</h2>
            
            <div class="transcript-preview" id="transcript-preview">
                <div class="transcript-header">
                    <h1>UNIVERSITY OF TECHNOLOGY</h1>
                    <h2>OFFICIAL ACADEMIC TRANSCRIPT</h2>
                </div>
                
                <div class="transcript-student-info">
                    <div>
                        <p><strong>Student Name:</strong> John Doe</p>
                        <p><strong>Student ID:</strong> S12345</p>
                        <p><strong>Program:</strong> Bachelor of Computer Science</p>
                    </div>
                    <div>
                        <p><strong>Date of Birth:</strong> 15/05/2002</p>
                        <p><strong>Enrollment Date:</strong> September 2021</p>
                        <p><strong>Expected Graduation:</strong> May 2025</p>
                    </div>
                </div>
                
                <table class="transcript-table" id="transcript-table">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Credits</th>
                            <th>Grade</th>
                            <th>Grade Points</th>
                            <th>Semester</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody id="transcript-table-body">
                        <!-- Transcript data will be populated by JavaScript -->
                    </tbody>
                </table>
                
                <div class="transcript-footer">
                    <div>
                        <p><strong>Cumulative GPA:</strong> <span id="transcript-gpa">0.00</span></p>
                        <p><strong>Total Credits:</strong> <span id="transcript-credits">0</span></p>
                    </div>
                    <div class="print-only">
                        <p>Generated on: <span id="transcript-date"></span></p>
                        <p>Official Transcript</p>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-success no-print" id="print-transcript">
                <i class="fas fa-print"></i> Print Transcript
            </button>
        </section>

        <!-- Academic Progress Section -->
        <section id="progress" class="content-section">
            <h2 class="section-title">Academic Progress</h2>
            
            <div class="progress-container">
                <h3>Degree Completion Progress</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 60%;"></div>
                </div>
                <div class="progress-labels">
                    <span>0%</span>
                    <span>60% Complete</span>
                    <span>100%</span>
                </div>
                <p>Completed 72 out of 120 required credits</p>
            </div>
            
            <div class="progress-container">
                <h3>GPA Trend</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 85%; background-color: var(--success);"></div>
                </div>
                <div class="progress-labels">
                    <span>2.0</span>
                    <span>Current: 3.75</span>
                    <span>4.0</span>
                </div>
                <p>Maintaining a strong academic performance</p>
            </div>
            
            <h3 class="section-title">Academic Timeline</h3>
            
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Year 1</h3>
                        <p>Completed - GPA: 3.68</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon success">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Year 2</h3>
                        <p>Completed - GPA: 3.72</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon warning">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Year 3</h3>
                        <p>In Progress - Current GPA: 3.75</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <i class="fas fa-calendar-plus"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Year 4</h3>
                        <p>Upcoming</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>School Management System &copy; 2023 | All rights reserved</p>
        </div>
    </footer>

    <script>
        // Sample data for the application
        const studentData = {
            name: "John Doe",
            id: "S12345",
            program: "Bachelor of Computer Science",
            enrollmentDate: "September 2021",
            expectedGraduation: "May 2025",
            cumulativeGPA: 3.72,
            totalCredits: 72,
            courses: {
                year1: {
                    semester1: [
                        { code: "CS101", name: "Introduction to Programming", credits: 3, assignment: 85, midterm: 78, final: 82, total: 81.5, grade: "B", gradePoints: 3.0 },
                        { code: "MATH101", name: "College Algebra", credits: 3, assignment: 90, midterm: 88, final: 92, total: 90.0, grade: "A", gradePoints: 4.0 },
                        { code: "ENG101", name: "English Composition", credits: 3, assignment: 78, midterm: 82, final: 80, total: 80.0, grade: "B", gradePoints: 3.0 },
                        { code: "HIST101", name: "World History", credits: 3, assignment: 88, midterm: 85, final: 87, total: 86.7, grade: "B+", gradePoints: 3.3 }
                    ],
                    semester2: [
                        { code: "CS102", name: "Data Structures", credits: 3, assignment: 92, midterm: 90, final: 88, total: 90.0, grade: "A", gradePoints: 4.0 },
                        { code: "MATH102", name: "Calculus I", credits: 4, assignment: 85, midterm: 80, final: 82, total: 82.3, grade: "B", gradePoints: 3.0 },
                        { code: "PHY101", name: "Physics I", credits: 4, assignment: 78, midterm: 75, final: 80, total: 77.7, grade: "C+", gradePoints: 2.3 },
                        { code: "ENG102", name: "Literature", credits: 3, assignment: 90, midterm: 88, final: 85, total: 87.7, grade: "B+", gradePoints: 3.3 }
                    ]
                },
                year2: {
                    semester1: [
                        { code: "CS201", name: "Algorithms", credits: 3, assignment: 88, midterm: 85, final: 90, total: 87.7, grade: "B+", gradePoints: 3.3 },
                        { code: "MATH201", name: "Calculus II", credits: 4, assignment: 82, midterm: 85, final: 80, total: 82.3, grade: "B", gradePoints: 3.0 },
                        { code: "PHY102", name: "Physics II", credits: 4, assignment: 85, midterm: 80, final: 82, total: 82.3, grade: "B", gradePoints: 3.0 },
                        { code: "STAT101", name: "Statistics", credits: 3, assignment: 90, midterm: 92, final: 88, total: 90.0, grade: "A", gradePoints: 4.0 }
                    ],
                    semester2: [
                        { code: "CS202", name: "Database Systems", credits: 3, assignment: 92, midterm: 90, final: 94, total: 92.0, grade: "A", gradePoints: 4.0 },
                        { code: "CS203", name: "Computer Networks", credits: 3, assignment: 85, midterm: 88, final: 82, total: 85.0, grade: "B", gradePoints: 3.0 },
                        { code: "MATH202", name: "Linear Algebra", credits: 3, assignment: 88, midterm: 85, final: 90, total: 87.7, grade: "B+", gradePoints: 3.3 },
                        { code: "ELEC1", name: "Elective I", credits: 3, assignment: 90, midterm: 92, final: 88, total: 90.0, grade: "A", gradePoints: 4.0 }
                    ]
                },
                year3: {
                    semester1: [
                        { code: "CS301", name: "Software Engineering", credits: 3, assignment: 85, midterm: 78, final: 82, total: 81.5, grade: "B", gradePoints: 3.0 },
                        { code: "CS302", name: "Operating Systems", credits: 3, assignment: 92, midterm: 88, final: 90, total: 90.0, grade: "A", gradePoints: 4.0 },
                        { code: "CS303", name: "Artificial Intelligence", credits: 3, assignment: 78, midterm: 82, final: 80, total: 80.0, grade: "B", gradePoints: 3.0 },
                        { code: "ELEC2", name: "Elective II", credits: 3, assignment: 88, midterm: 85, final: 87, total: 86.7, grade: "B+", gradePoints: 3.3 }
                    ],
                    semester2: [
                        { code: "CS304", name: "Web Development", credits: 3, assignment: 92, midterm: 90, final: 88, total: 90.0, grade: "A", gradePoints: 4.0 },
                        { code: "CS305", name: "Mobile App Development", credits: 3, assignment: 85, midterm: 80, final: 82, total: 82.3, grade: "B", gradePoints: 3.0 },
                        { code: "CS306", name: "Cybersecurity", credits: 3, assignment: 78, midterm: 75, final: 80, total: 77.7, grade: "C+", gradePoints: 2.3 },
                        { code: "ELEC3", name: "Elective III", credits: 3, assignment: 90, midterm: 88, final: 85, total: 87.7, grade: "B+", gradePoints: 3.3 }
                    ]
                },
                year4: {
                    semester1: [],
                    semester2: []
                }
            }
        };

        // DOM elements
        const tabs = document.querySelectorAll('.tab');
        const contentSections = document.querySelectorAll('.content-section');
        const semesterButtons = document.querySelectorAll('.semester-btn');
        const yearButtons = document.querySelectorAll('.year-btn');
        const gradesTableBody = document.getElementById('grades-table-body');
        const transcriptTableBody = document.getElementById('transcript-table-body');
        const printTranscriptBtn = document.getElementById('print-transcript');
        const semesterGpaElement = document.getElementById('semester-gpa');
        const cumulativeGpaElement = document.getElementById('cumulative-gpa');
        const totalCreditsElement = document.getElementById('total-credits');
        const transcriptGpaElement = document.getElementById('transcript-gpa');
        const transcriptCreditsElement = document.getElementById('transcript-credits');
        const transcriptDateElement = document.getElementById('transcript-date');

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            // Set up tab navigation
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    
                    // Update active tab
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show corresponding content section
                    contentSections.forEach(section => {
                        section.classList.remove('active');
                        if (section.id === targetId) {
                            section.classList.add('active');
                        }
                    });
                    
                    // If transcript tab is selected, update transcript data
                    if (targetId === 'transcript') {
                        updateTranscript();
                    }
                });
            });
            
            // Set up semester selection
            semesterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const semester = this.getAttribute('data-semester');
                    
                    // Update active semester button
                    semesterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update grades table based on selected year and semester
                    updateGradesTable();
                });
            });
            
            // Set up year selection
            yearButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const year = this.getAttribute('data-year');
                    
                    // Update active year button
                    yearButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update grades table based on selected year and semester
                    updateGradesTable();
                });
            });
            
            // Set up print transcript button
            printTranscriptBtn.addEventListener('click', function() {
                window.print();
            });
            
            // Initialize grades table
            updateGradesTable();
            
            // Set transcript date
            const today = new Date();
            transcriptDateElement.textContent = today.toLocaleDateString();
        });

        // Function to update the grades table based on selected year and semester
        function updateGradesTable() {
            const activeYear = document.querySelector('.year-btn.active').getAttribute('data-year');
            const activeSemester = document.querySelector('.semester-btn.active').getAttribute('data-semester');
            
            // Clear the table
            gradesTableBody.innerHTML = '';
            
            // Get courses for selected year and semester
            const courses = studentData.courses[`year${activeYear}`][`semester${activeSemester}`];
            
            // Calculate semester GPA and credits
            let totalGradePoints = 0;
            let totalCredits = 0;
            
            // Populate the table
            courses.forEach(course => {
                const row = document.createElement('tr');
                
                row.innerHTML = `
                    <td>${course.code}</td>
                    <td>${course.name}</td>
                    <td>${course.credits}</td>
                    <td>${course.assignment}</td>
                    <td>${course.midterm}</td>
                    <td>${course.final}</td>
                    <td>${course.total.toFixed(1)}</td>
                    <td><span class="grade-badge grade-${course.grade.charAt(0)}">${course.grade}</span></td>
                    <td>${course.gradePoints.toFixed(1)}</td>
                `;
                
                gradesTableBody.appendChild(row);
                
                // Update totals for GPA calculation
                totalGradePoints += course.gradePoints * course.credits;
                totalCredits += course.credits;
            });
            
            // Calculate and display semester GPA
            const semesterGPA = totalCredits > 0 ? (totalGradePoints / totalCredits).toFixed(2) : "0.00";
            semesterGpaElement.textContent = semesterGPA;
            
            // Display cumulative GPA and total credits
            cumulativeGpaElement.textContent = studentData.cumulativeGPA.toFixed(2);
            totalCreditsElement.textContent = studentData.totalCredits;
        }

        // Function to update the transcript with all academic records
        function updateTranscript() {
            // Clear the table
            transcriptTableBody.innerHTML = '';
            
            let totalGradePoints = 0;
            let totalCredits = 0;
            
            // Iterate through all years and semesters
            for (let year = 1; year <= 4; year++) {
                for (let semester = 1; semester <= 2; semester++) {
                    const courses = studentData.courses[`year${year}`][`semester${semester}`];
                    
                    courses.forEach(course => {
                        const row = document.createElement('tr');
                        
                        row.innerHTML = `
                            <td>${course.code}</td>
                            <td>${course.name}</td>
                            <td>${course.credits}</td>
                            <td>${course.grade}</td>
                            <td>${course.gradePoints.toFixed(1)}</td>
                            <td>${semester}</td>
                            <td>${year}</td>
                        `;
                        
                        transcriptTableBody.appendChild(row);
                        
                        // Update totals for GPA calculation
                        totalGradePoints += course.gradePoints * course.credits;
                        totalCredits += course.credits;
                    });
                }
            }
            
            // Calculate and display cumulative GPA
            const cumulativeGPA = totalCredits > 0 ? (totalGradePoints / totalCredits).toFixed(2) : "0.00";
            transcriptGpaElement.textContent = cumulativeGPA;
            transcriptCreditsElement.textContent = totalCredits;
        }
    </script>
</body>
</html>