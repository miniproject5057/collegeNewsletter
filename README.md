College Newsletter Web Application

Project Overview

This project is a College Newsletter Web Application designed to facilitate the publication and management of college newsletters. The system includes role-based access for administrators, staff, and students, allowing article submissions and approvals. A public-facing website ensures newsletters are accessible to anyone.

Features
	1.	Home Page and Login
	•	The first page serves as the home page and login portal.
	•	Users can log in with their email and password.
	•	Login records, including email and password (encrypted), are stored in the database for security and tracking.
	2.	Role-Based Login System
	•	Admin Login:
	•	Admins can access the admin panel to review and approve/reject article submissions.
	•	Admins manage the content displayed as newsletters.
	•	Staff/Student Login:
	•	Staff and students can submit articles via the upload page.
	•	Submitted articles remain pending until approved by the admin.
	3.	Admin Panel
	•	View all article submission requests.
	•	Approve or reject articles submitted by staff or students.
	•	Manage published newsletters.
	4.	Article Management
	•	All articles submitted by staff or students are stored in the database.
	•	Approved articles are displayed as newsletters on the public website.
	5.	Public Newsletter Website
	•	A publicly accessible website displays approved newsletters.
	•	Users can browse newsletters without needing to log in.
	6.	Database Integration
	•	Login credentials (email and password) and article data are securely stored in the database.
	•	Records include timestamps for logins and article submissions.

Technologies Used
	•	Frontend: HTML, CSS, JavaScript
	•	Backend: PHP (using XAMPP for development)
	•	Database: MySQL
	•	Web Server: Apache (via XAMPP)

Installation and Setup
	1.	Install XAMPP
	•	Download XAMPP from Apache Friends.
	•	Install and start Apache and MySQL services.
	2.	Set Up the Project
	•	Clone or download the project files to your local system.
	•	Place the project folder in the htdocs directory of your XAMPP installation.
	3.	Database Configuration
	•	Open phpMyAdmin (http://localhost/phpmyadmin).
	•	Create a new database (e.g., college_newsletter).
	•	Import the provided SQL file (newsletter.sql) to set up the database schema and tables.
	4.	Update Configuration
	•	Edit the config.php file to update database credentials (host, username, password, database_name).
	5.	Run the Application
	•	Start Apache and MySQL in XAMPP.
	•	Access the application at http://localhost/<your_project_folder>.
	•	Default login credentials (can be updated in the database):
	•	Admin:
	•	Email: admin@college.com
	•	Password: admin123
	•	Student/Staff:
	•	Email: user@college.com
	•	Password: user123
	6.	Workflow
	•	Admin:
	•	Logs in and approves or rejects submitted articles.
	•	Publishes approved articles as newsletters.
	•	Students/Staff:
	•	Logs in to submit articles via the upload page.
	•	Waits for admin approval before articles appear on the public website.
	7.	Public Website
	•	Navigate to the public website to view approved newsletters.
	•	No login is required to access the public-facing content.

Project Structure

project_folder/  
│  
├── index.php                  # Home page with login portal  
├── admin/  
│   ├── login.php              # Admin login page  
│   ├── dashboard.php          # Admin panel for managing articles  
│   ├── approval.php           # Article approval/rejection page  
├── student_staff/  
│   ├── login.php              # Login page for staff/students  
│   ├── upload.php             # Upload page for article submissions  
├── public/  
│   ├── index.php              # Public website for newsletters  
│   ├── newsletters/           # Directory for approved newsletters  
├── assets/                    # CSS, JS, images, etc.  
│   ├── css/  
│   ├── js/  
│   ├── images/  
├── config.php                 # Database connection file  
├── README.md                  # Project documentation  
└── newsletter.sql             # Database structure and sample data  

Future Improvements
	1.	Email Notifications:
	•	Notify users when their article is approved or rejected.
	2.	Search Functionality:
	•	Add a search bar to find specific newsletters quickly.
	3.	Password Recovery:
	•	Implement a password recovery feature for users.
	4.	Analytics:
	•	Track views and engagement for each newsletter.
