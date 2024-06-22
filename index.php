<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHub - Student Portal</title>
    <link rel="stylesheet" href="./Styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include ("nav.php"); ?>
    <section id="home" class="banner">
        <div class="container">
            <div class="banner-content">
                <h1>Welcome to CodeHub</h1>
                <p>Empower Your Coding Journey</p>
                <button onclick="showAlert()">Get Started</button>
            </div>
        </div>
    </section>
    <section id="profile" class="section">
        <div class="container">
            <h2>Profile</h2>
            <div class="profile-content">
                <div class="profile-avatar">
                    <img src="https://via.placeholder.com/150" alt="User Avatar">
                </div>
                <div class="profile-details">
                    <h3>Username</h3>
                    <p>Bio: Aspiring developer with a passion for coding and learning new technologies.</p>
                    <p>Study Interests: Web Development, Data Science, Mobile Development</p>
                    <button>Edit Profile</button>
                </div>
            </div>
        </div>
    </section>
    <section id="dashboard" class="section">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="dashboard-content">
                <div class="progress-chart">
                    <h3>Progress Overview</h3>
                    <canvas id="progressChart"></canvas>
                </div>
                <div class="recent-activity">
                    <h3>Recent Activity</h3>
                    <ul>
                        <li>Completed "JavaScript Basics" course</li>
                        <li>Joined "Data Science Study Group"</li>
                        <li>Added new project "Portfolio Website"</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="schedule" class="section">
        <div class="container">
            <h2>Study Schedule</h2>
            <div class="calendar-container">
                <iframe src="https://calendar.google.com/calendar/embed?src=your_calendar_id&ctz=America/New_York"
                    style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </section>
    <section id="progress" class="section">
        <div class="container">
            <h2>Progress Tracking</h2>
            <div class="progress-content">
                <div class="goals">
                    <h3>Goals</h3>
                    <ul>
                        <li>Complete "React.js Advanced" course</li>
                        <li>Build a weather app</li>
                        <li>Contribute to open-source</li>
                    </ul>
                </div>
                <div class="milestones">
                    <h3>Milestones</h3>
                    <ul>
                        <li>Finish 50% of "Machine Learning Basics"</li>
                        <li>Implement authentication in "Blog App"</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="chat" class="section">
        <div class="container">
            <h2>Chat Rooms</h2>
            <div class="chat-content">
                <div class="chat-group">
                    <h3>Web Development</h3>
                    <button>Join Chat</button>
                </div>
                <div class="chat-group">
                    <h3>Data Science</h3>
                    <button>Join Chat</button>
                </div>
                <div class="chat-group">
                    <h3>Mobile Development</h3>
                    <button>Join Chat</button>
                </div>
            </div>
        </div>
    </section>
    <section id="resources" class="section">
        <div class="container">
            <h2>Resource Library</h2>
            <div class="resource-gallery">
                <a href="#" class="resource-item"><i class="fas fa-book"></i> Documentation</a>
                <a href="#" class="resource-item"><i class="fas fa-code"></i> Code Snippets</a>
                <a href="#" class="resource-item"><i class="fas fa-video"></i> Tutorials</a>
                <a href="#" class="resource-item"><i class="fas fa-chalkboard-teacher"></i> Mentorship</a>
            </div>
        </div>
    </section>
    <section id="forums" class="section">
        <div class="container">
            <h2>Discussion Forums</h2>
            <div class="forum-list">
                <a href="#">Web Development</a>
                <a href="#">Data Science</a>
                <a href="#">Mobile Development</a>
                <a href="#">Project Ideas</a>
            </div>
        </div>
    </section>
    <section id="tools" class="section">
        <div class="container">
            <h2>Study Tools</h2>
            <div class="tools-content">
                <a href="#" class="tool-item"><i class="fas fa-file-alt"></i> Flashcards</a>
                <a href="#" class="tool-item"><i class="fas fa-question-circle"></i> Quizzes</a>
                <a href="#" class="tool-item"><i class="fas fa-laptop"></i> Practice Tests</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 CodeHub. All rights reserved.</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>

</html>