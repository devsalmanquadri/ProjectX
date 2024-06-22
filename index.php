<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="./Styles/index.css">
</head>

<body>
    <?php include ("./nav.php"); ?>
    <div class="container">
        <div class="sidenav">
            <!-- <div class="logo">
                <img src="logo.png" alt="Logo">
            </div> -->
            <ul>
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#">Progress Tracking</a></li>
                <li><a href="#">Chat Rooms</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="./studytools.php">Study Tools</a></li>
                <li><a href="#">Attendance</a></li>
                <li><a href="#">Grades</a></li>
                <li><a href="#">Tasks</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        <div class="main-content">
            <header>
                <h1>Welcome to Your Student Dashboard</h1>
            </header>
            <section class="section">
                <h2>Dashboard Overview</h2>
                <div class="dashboard-content">
                    <div class="progress-chart-container">
                        <canvas id="progressChart"></canvas>
                    </div>
                    <div class="recent-activity">
                        <h3>Recent Activity</h3>
                        <ul>
                            <li>Completed JavaScript quiz - 80%</li>
                            <li>Joined Study Group: React Development</li>
                            <li>Submitted CSS Project</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Progress Tracking</h2>
                <div class="progress-content">
                    <div class="goals">
                        <h3>Goals</h3>
                        <ul>
                            <li>Complete React Tutorial by July</li>
                            <li>Improve JavaScript Skills</li>
                        </ul>
                    </div>
                    <div class="milestones">
                        <h3>Milestones</h3>
                        <ul>
                            <li>Passed HTML Certification</li>
                            <li>Attended Web Development Workshop</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Chat Rooms</h2>
                <div class="chat-content">
                    <div class="chat-group">
                        <h3>React Study Group</h3>
                        <p>Discussing React hooks and state management...</p>
                    </div>
                    <div class="chat-group">
                        <h3>JavaScript Q&A</h3>
                        <p>Get help with JavaScript syntax and concepts...</p>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Resources</h2>
                <div class="resource-gallery">
                    <div class="resource-item">
                        <i class="fas fa-book"></i>
                        <h3>JavaScript Guide</h3>
                        <p>Explore the fundamentals of JavaScript...</p>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-video"></i>
                        <h3>React Tutorial</h3>
                        <p>Learn React from scratch with hands-on examples...</p>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Forums</h2>
                <div class="forum-list">
                    <div class="forum-item">
                        <h3>Web Development Forum</h3>
                        <p>Discuss latest trends in web development...</p>
                    </div>
                    <div class="forum-item">
                        <h3>Programming Challenges</h3>
                        <p>Participate in coding challenges and improve skills...</p>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Study Tools</h2>
                <div class="tools-content">
                    <div class="tool-item">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>Task Manager</h3>
                        <p>Organize study tasks and track progress...</p>
                    </div>
                    <div class="tool-item">
                        <i class="fas fa-file-alt"></i>
                        <h3>Notes Organizer</h3>
                        <p>Take and manage study notes effectively...</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const body = document.body;


            // Chart.js code remains unchanged
            var ctx = document.getElementById('progressChart').getContext('2d');
            var progressChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['React', 'JavaScript', 'CSS', 'HTML', 'PYTHON', 'C++'],
                    datasets: [{
                        label: 'Completion (%)',
                        data: [75, 50, 90, 60, 80, 68],
                        backgroundColor: [
                            '#FF9C00', // Orange
                            '#FFBB00', // Yellow
                            '#00A6FF', // Blue
                            '#B366FF'  // Purple
                        ],
                        borderColor: [
                            '#FF9C00',
                            '#FFBB00',
                            '#00A6FF',
                            '#B366FF'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        });

    </script>
</body>

</html>