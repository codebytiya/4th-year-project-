<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Timetable System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px 0;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .controls {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            flex: 1;
            min-width: 200px;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #555;
        }

        select, input {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            background-color: #f9f9f9;
            transition: all 0.3s;
        }

        select:focus, input:focus {
            outline: none;
            border-color: #6a11cb;
            box-shadow: 0 0 0 2px rgba(106, 17, 203, 0.2);
        }

        .current-time {
            background-color: #e8f4fd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
            color: #2575fc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .timetable-container {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .timetable {
            width: 100%;
            border-collapse: collapse;
        }

        .timetable th {
            background-color: #6a11cb;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }

        .timetable td {
            padding: 15px;
            text-align: center;
            border: 1px solid #eee;
            transition: all 0.3s;
        }

        .timetable tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .timetable tr:hover td {
            background-color: #f0f4ff;
        }

        .course-card {
            background-color: white;
            border-left: 4px solid #6a11cb;
            padding: 12px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .course-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .teacher {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .time {
            color: #2575fc;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .current-class {
            background-color: #e6f7ff !important;
            border: 1px solid #91d5ff;
            position: relative;
        }

        .current-class::after {
            content: "NOW";
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #52c41a;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 10px;
        }

        .empty-slot {
            background-color: #f9f9f9;
            color: #999;
            font-style: italic;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .timetable-container {
                overflow-x: auto;
            }
            
            .timetable {
                min-width: 700px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Student Timetable</h1>
            <p class="subtitle">View your courses, teachers, and schedule at a glance</p>
        </header>

        <div class="controls">
            <div class="filter-group">
                <label for="program-select">Select Program</label>
                <select id="program-select">
                    <option value="business">Business Administration</option>
                    <option value="computer-science">Computer Science</option>
                    <option value="engineering">Engineering</option>
                    <option value="arts">Arts & Humanities</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="year-select">Academic Year</label>
                <select id="year-select">
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="week-select">Week Starting</label>
                <input type="week" id="week-select">
            </div>
        </div>

        <div class="current-time">
            Current Date & Time: <span id="current-time-display"></span>
        </div>

        <div class="timetable-container">
            <table class="timetable">
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
                <tbody id="timetable-body">
                    <!-- Timetable will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <footer>
            <p>Student Timetable | For academic use only</p>
        </footer>
    </div>

    <script>
        // where timetable data will be
        const timetableData = {
            "business": {
                "1": {
                    "Monday": [
                        { time: "09:00-10:30", course: "Introduction to Business", teacher: "Dr. Johnson", room: "B-101" },
                        { time: "11:00-12:30", course: "Business Mathematics", teacher: "Ms. Tiya", room: "B-205" },
                        { time: "14:00-15:30", course: "Principles of Marketing", teacher: "Prof. Davis", room: "B-102" }
                    ],
                    "Tuesday": [
                        { time: "10:00-11:30", course: "Financial Accounting", teacher: "Mr. Wilson", room: "B-103" },
                        { time: "13:00-14:30", course: "Business Communication", teacher: "Ms. Parker", room: "B-104" }
                    ],
                    "Wednesday": [
                        { time: "09:00-10:30", course: "Business Mathematics", teacher: "Ms. Tiya", room: "B-205" },
                        { time: "11:00-12:30", course: "Organizational Behavior", teacher: "Dr. Roberts", room: "B-106" }
                    ],
                    "Thursday": [
                        { time: "10:00-11:30", course: "Introduction to Business", teacher: "Dr. Johnson", room: "B-101" },
                        { time: "14:00-15:30", course: "Economics", teacher: "Prof. Miller", room: "B-107" }
                    ],
                    "Friday": [
                        { time: "09:00-10:30", course: "Business Ethics", teacher: "Dr. Anderson", room: "B-108" },
                        { time: "11:00-12:30", course: "Financial Accounting", teacher: "Mr. Wilson", room: "B-103" }
                    ]
                },
                "2": {
                    "Monday": [
                        { time: "09:00-10:30", course: "Business Law", teacher: "Prof. Thompson", room: "B-201" },
                        { time: "11:00-12:30", course: "Managerial Accounting", teacher: "Ms. Garcia", room: "B-202" }
                    ],
                    "Tuesday": [
                        { time: "10:00-11:30", course: "Operations Management", teacher: "Dr. Lee", room: "B-203" },
                        { time: "13:00-14:30", course: "Business Statistics", teacher: "Mr. Brown", room: "B-204" }
                    ],
                    "Wednesday": [
                        { time: "09:00-10:30", course: "Marketing Management", teacher: "Prof. Davis", room: "B-102" },
                        { time: "11:00-12:30", course: "Financial Management", teacher: "Ms. Garcia", room: "B-202" }
                    ],
                    "Thursday": [
                        { time: "10:00-11:30", course: "Human Resource Management", teacher: "Dr. Roberts", room: "B-106" },
                        { time: "14:00-15:30", course: "Business Law", teacher: "Prof. Thompson", room: "B-201" }
                    ],
                    "Friday": [
                        { time: "09:00-10:30", course: "Strategic Management", teacher: "Dr. Johnson", room: "B-101" },
                        { time: "11:00-12:30", course: "Operations Management", teacher: "Dr. Lee", room: "B-203" }
                    ]
                }
            },
            "computer-science": {
                "1": {
                    "Monday": [
                        { time: "09:00-10:30", course: "Introduction to Programming", teacher: "Dr. Smith", room: "CS-101" },
                        { time: "11:00-12:30", course: "Discrete Mathematics", teacher: "Prof. Kumar", room: "CS-102" }
                    ],
                    "Tuesday": [
                        { time: "10:00-11:30", course: "Computer Fundamentals", teacher: "Ms. Chen", room: "CS-103" },
                        { time: "13:00-14:30", course: "Data Structures", teacher: "Dr. Rodriguez", room: "CS-104" }
                    ],
                    "Wednesday": [
                        { time: "09:00-10:30", course: "Introduction to Programming", teacher: "Dr. Smith", room: "CS-101" },
                        { time: "11:00-12:30", course: "Web Development", teacher: "Mr. Patel", room: "CS-105" }
                    ],
                    "Thursday": [
                        { time: "10:00-11:30", course: "Discrete Mathematics", teacher: "Prof. Kumar", room: "CS-102" },
                        { time: "14:00-15:30", course: "Computer Fundamentals", teacher: "Ms. Chen", room: "CS-103" }
                    ],
                    "Friday": [
                        { time: "09:00-10:30", course: "Data Structures", teacher: "Dr. Rodriguez", room: "CS-104" },
                        { time: "11:00-12:30", course: "Web Development", teacher: "Mr. Patel", room: "CS-105" }
                    ]
                }
            }
            // Additional programs and changes will   be added here
        };

        // Time slots for the timetable
        const timeSlots = [
            "08:00-09:00",
            "09:00-10:30",
            "10:30-11:00",
            "11:00-12:30",
            "12:30-13:30",
            "13:30-15:00",
            "15:00-16:30",
            "16:30-18:00"
        ];

        // DOM elements
        const programSelect = document.getElementById('program-select');
        const yearSelect = document.getElementById('year-select');
        const weekSelect = document.getElementById('week-select');
        const timetableBody = document.getElementById('timetable-body');
        const currentTimeDisplay = document.getElementById('current-time-display');

        // Initialize the week selector to current week
        function initializeWeekSelector() {
            const today = new Date();
            const year = today.getFullYear();
            const firstDay = new Date(today.setDate(today.getDate() - today.getDay() + 1)); // Monday
            const weekNumber = Math.ceil((((firstDay - new Date(firstDay.getFullYear(), 0, 1)) / 86400000) + 1) / 7);
            
            weekSelect.value = `${year}-W${weekNumber.toString().padStart(2, '0')}`;
        }

        // Update current time display
        function updateCurrentTime() {
            const now = new Date();
            currentTimeDisplay.textContent = now.toLocaleString();
        }

        // Generate timetable based on selected program and year
        function generateTimetable() {
            const program = programSelect.value;
            const year = yearSelect.value;
            
            // Clear existing timetable
            timetableBody.innerHTML = '';
            
            // Check if data exists for selected program and year
            if (!timetableData[program] || !timetableData[program][year]) {
                timetableBody.innerHTML = '<tr><td colspan="6" style="text-align: center; padding: 20px;">No timetable available for the selected program and year.</td></tr>';
                return;
            }
            
            const programData = timetableData[program][year];
            
            // Create rows for each time slot
            timeSlots.forEach(timeSlot => {
                const row = document.createElement('tr');
                
                // Add time slot cell
                const timeCell = document.createElement('td');
                timeCell.textContent = timeSlot;
                timeCell.style.fontWeight = '600';
                timeCell.style.backgroundColor = '#f5f7fa';
                row.appendChild(timeCell);
                
                // Add cells for each day
                const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
                days.forEach(day => {
                    const dayCell = document.createElement('td');
                    
                    // Find if there's a class at this time slot for this day
                    const classAtThisTime = programData[day] ? 
                        programData[day].find(cls => cls.time === timeSlot) : null;
                    
                    if (classAtThisTime) {
                        const courseCard = document.createElement('div');
                        courseCard.className = 'course-card';
                        
                        const courseName = document.createElement('div');
                        courseName.className = 'course-name';
                        courseName.textContent = classAtThisTime.course;
                        
                        const teacher = document.createElement('div');
                        teacher.className = 'teacher';
                        teacher.textContent = `Teacher: ${classAtThisTime.teacher}`;
                        
                        const time = document.createElement('div');
                        time.className = 'time';
                        time.textContent = classAtThisTime.time;
                        
                        const room = document.createElement('div');
                        room.className = 'teacher';
                        room.textContent = `Room: ${classAtThisTime.room}`;
                        
                        courseCard.appendChild(courseName);
                        courseCard.appendChild(teacher);
                        courseCard.appendChild(time);
                        courseCard.appendChild(room);
                        
                        dayCell.appendChild(courseCard);
                        
                        // Check if this is the current class
                        if (isCurrentClass(day, timeSlot)) {
                            dayCell.classList.add('current-class');
                        }
                    } else {
                        dayCell.textContent = '-';
                        dayCell.className = 'empty-slot';
                    }
                    
                    row.appendChild(dayCell);
                });
                
                timetableBody.appendChild(row);
            });
        }

        // Check if a class is happening now
        function isCurrentClass(day, timeSlot) {
            const now = new Date();
            const currentDay = now.toLocaleDateString('en-US', { weekday: 'long' });
            
            if (currentDay !== day) return false;
            
            const [startTime, endTime] = timeSlot.split('-');
            const currentTime = now.toTimeString().substring(0, 5);
            
            return currentTime >= startTime && currentTime <= endTime;
        }

        // Initialize the page
        function initializePage() {
            initializeWeekSelector();
            updateCurrentTime();
            generateTimetable();
            
            // Update current time every minute
            setInterval(updateCurrentTime, 60000);
            
            // Add event listeners
            programSelect.addEventListener('change', generateTimetable);
            yearSelect.addEventListener('change', generateTimetable);
            weekSelect.addEventListener('change', generateTimetable);
        }

        // Start the application when the page loads
        document.addEventListener('DOMContentLoaded', initializePage);
    </script>
</body>
</html>