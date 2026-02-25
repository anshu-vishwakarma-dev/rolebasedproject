# Task Manager Pro

A professional, high-performance Task Management System built with PHP and MySQL, featuring a premium Dark Mode interface and Granular Role-Based Access Control (RBAC).

## 🚀 Features

-   **Premium Dark Mode UI**: A modern, eyes-friendly interface designed for focused productivity.
-   **Granular Permissions**:
    -   **Admin**: Full system control (Users, Tasks, Settings).
    -   **Manager**: Team orchestration (Create, Assign, and Manage Tasks).
    -   **Employee**: Execution focused (View assigned tasks and update status).
-   **Dynamic Dashboard**: Real-time stats and activity overview.
-   **Responsive Layout**: Fully functional on desktop, tablet, and mobile devices.
-   **Custom Error Handling**: Professional 404 redirection system via `.htaccess`.
-   **Secure Authentication**: Session-based login with role-specific redirection.

## 🛠️ Tech Stack

-   **Frontend**: HTML5, Vanilla CSS (Custom Variable System), FontAwesome Icons, Google Fonts (Inter).
-   **Backend**: PHP 8.x.
-   **Database**: MySQL / MariaDB.
-   **Server**: Apache (with `mod_rewrite` for 404 handling).

## 📦 Installation

1.  **Clone the Repository**:
    ```bash
    git clone https://github.com/anshu-vishwakarma-dev/rolebasedproject.git
    ```
2.  **Database Setup**:
    -   Create a database named `project_db`.
    -   Import the schema from `database/schema.sql`.
3.  **Configuration**:
    -   Update `db.php` with your database credentials (Host, Username, Password).
4.  **Deployment**:
    -   Place the folder in your server root (e.g., `xampp/htdocs/role`).
    -   Access via `http://localhost/role/login` (Note: `.php` extension is hidden).

## 📂 Project Structure

-   `/assets`: CSS and UI assets.
-   `/database`: SQL schema files.
-   `/includes`: Reusable layout components (Header/Footer).
-   `login.php`: Secure entry point.
-   `dashboard.php`: Main application core.

---
Developed with ❤️ by [Anshu Vishwakarma](https://github.com/anshu-vishwakarma-dev)
