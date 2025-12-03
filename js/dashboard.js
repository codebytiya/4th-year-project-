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