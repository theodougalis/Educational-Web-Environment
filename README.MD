# Educational Web Environment

This project is a web-based educational environment designed as part of an assignment for the course "Educational Web Environments". It supports role-based access for Tutors and Students, each with a customized user interface and functionality. The project enables Tutors to manage announcements, documents, homework, and user profiles while students can view relevant materials and communicate with Tutors.

## Table of Contents
- [Login Information](#login-information)
- [Database Information](#database-information)
- [Folder Structure](#folder-structure)
- [PHP Files Overview](#php-files-overview)
- [Dependencies](#dependencies)
- [Setup Instructions](#setup-instructions)


## Login Information

The project provides role-based access with the following login credentials:

**Tutor:**
- Username: `tutor@csd.auth.gr`
- Password: `1234`

**Students:**
1. Username: `student@csd.auth.gr`
   Password: `1234`
   
2. Username: `theodoug@csd.auth.gr`
   Password: `1234`

## Database Information

- **Database Name:** `student3544`
- **User Credentials:**
  - Username: `EPDUser`
  - Password: `EPDpassword1`

## Folder Structure

The main project folder is organized as follows:

- **CSS:** Contains a single CSS file used across all pages.
- **DOC:** Contains placeholder document files.
- **IMG:** Contains all images used.
- **PHP:** Contains all the PHP files that implement the site pages and functionality.
- **student3544.sql:** SQL file exported from phpMyAdmin, containing the database structure.

## PHP Files Overview

Below is a summary of key PHP files:

- **index.php:** Landing page prompting users to log in.
- **authorize.php:** Ensures users are logged in before accessing any page.
- **home.php / homeTutor.php:** Displays the homepage for Students and Tutors, respectively.
- **announcement.php / announcementTutor.php:** Displays announcements with additional functionality for Tutors.
- **communication.php / communicationTutor.php:** Communication page with enhanced features for Tutors.
- **db_connection.php:** Establishes a connection to the MySQL database.
- **documents.php / documentsTutor.php:** Displays documents, allowing Tutors to manage files.
- **homework.php / homeworkTutor.php:** Homework section for Students and Tutors.
- **insertAnnouncement.php / insertDocument.php / insertHomework.php / insertUser.php:** Handles the addition of new announcements, documents, homework, and users.
- **deleteAnnouncement.php / deleteDocument.php / deleteHomework.php / deleteUser.php:** Handles deletion of entries for Tutors.
- **logout.php:** Terminates the session and redirects to the login page.

## Dependencies

This project relies on the following:

- **PHP** (version 7.0 or higher recommended)
- **MySQL** database
- **phpMyAdmin** (optional for database management)

## Setup Instructions

1. **Database Setup:** 
   - Import `student3544.sql` into your MySQL database.
   - Update the `db_connection.php` file with your database credentials if they differ.

2. **File Upload:**
   - Upload all files to your web server or local environment supporting PHP.

3. **Accessing the Project:**
   - Navigate to the project link or localhost URL if running locally.

4. **Logging In:**
   - Use the provided login credentials to access Tutor or Student functionalities.

---

### Note
This project was developed as an assignment and may have limited features compared to a fully-fledged application. Future updates may refine the functionality and user experience.

---
