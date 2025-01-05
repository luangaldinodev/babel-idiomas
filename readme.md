# PHP-based Educational Website with Quiz Functionality

This project is a PHP-based educational website that includes quiz functionality, user management, and content delivery. It provides a platform for users to access educational content, take quizzes, and manage their accounts.

The website is designed to offer a comprehensive learning experience with features such as course information, video content, and interactive quizzes of varying difficulty levels. The project structure is organized to separate content, database operations, and styling, making it easy to maintain and extend.

Key features include:
- User authentication and account management
- Multi-level quiz system (easy, medium, difficult)
- Course and video content delivery
- Contact form for user inquiries
- Responsive design for various devices

## Repository Structure

The repository is organized as follows:

- `assets/`: Contains the main components of the website
  - `conteudo/`: PHP files for various content pages and components
  - `database/`: PHP scripts for database operations and user management
  - `html/`: HTML template files
  - `styles/`: CSS files for styling different parts of the website
- Root directory: Contains main PHP files that serve as entry points for different sections of the website

Key Files:
- `index.php`: Main entry point of the website
- `index-cliente.php`: Entry point for authenticated user dashboard
- `index-quiz-*.php`: Entry points for different quiz difficulty levels
- `assets/database/conexao.php`: Database connection configuration
- `assets/database/protecao.php`: User authentication and protection logic

## Usage Instructions

### Installation

Prerequisites:
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache web server

Steps:
1. Clone the repository to your web server's document root.
2. Import the database schema (not provided in the repository structure).
3. Configure the database connection in `assets/database/conexao.php`.
4. Ensure proper file permissions for the web server to read and execute PHP files.

### Configuration

1. Update `assets/database/conexao.php` with your database credentials:
   ```php
   $servername = "your_server";
   $username = "your_username";
   $password = "your_password";
   $dbname = "your_database";
   ```

2. Customize content in the `assets/conteudo/` directory to match your educational material.

### Getting Started

1. Access the website through your web browser by navigating to the root URL where you installed the project.
2. Users can register for an account or log in if they already have one.
3. Explore courses, watch videos, and take quizzes based on difficulty levels.

### Common Use Cases

1. Taking a Quiz:
   - Navigate to the desired quiz difficulty level (`index-quiz-facil.php`, `index-quiz-medio.php`, or `index-quiz-dificil.php`).
   - Answer the questions presented.
   - Submit the quiz to see results.

2. Accessing Course Content:
   - Log in to your account.
   - Navigate to the courses section to view available materials.

3. Contacting Support:
   - Access the contact form through the navigation menu.
   - Fill out the required fields and submit your inquiry.

### Testing & Quality

To ensure the quality of the website:
1. Test user registration and login functionality.
2. Verify that quizzes are scoring correctly across all difficulty levels.
3. Check responsiveness on various devices and screen sizes.
4. Ensure all database operations (CRUD) are functioning as expected.

### Troubleshooting

Common Issue: Database Connection Failure
- Problem: Website shows a database connection error.
- Error Message: "Connection failed: [specific error message]"
- Diagnostic Process:
  1. Check if MySQL service is running.
  2. Verify database credentials in `assets/database/conexao.php`.
  3. Ensure the database exists and is accessible.
- Debug Mode:
  1. In `assets/database/conexao.php`, add:
     ```php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);
     ```
  2. Refresh the page to see detailed error messages.
- Expected Outcome: Successful database connection or specific error for troubleshooting.

Performance Optimization:
- Monitor server response time for quiz submissions and video playback.
- Use browser developer tools to identify any client-side performance issues.
- Optimize database queries in `assets/database/` files if slow responses are observed.

## Data Flow

The data flow in this educational website follows a typical PHP-based web application pattern:

1. User Request -> Web Server -> PHP Interpreter
2. PHP Script -> Database Interaction (if needed)
3. Data Processing -> HTML Generation
4. Response -> User's Browser

```
[User] <-> [Web Browser]
   ^            |
   |            v
[Web Server] <-> [PHP Scripts]
                  |
                  v
             [Database]
```

Key technical considerations:
- User authentication state is managed through PHP sessions.
- Database queries are centralized in the `assets/database/` directory for better maintainability.
- Content is dynamically loaded based on user interactions and permissions.