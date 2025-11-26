<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International College of Business and Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
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
            <div class="tab active" data-target="dashboard">Dashboard</div>
            <div class="tab" data-target="grades">Grades</div>
            <div class="tab" data-target="transcript">Transcript</div>
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

    <script src="js/dashboard.js"></script>
</body>
</html>