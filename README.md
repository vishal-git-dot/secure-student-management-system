# 🎓 Student Management System (PHP + MySQL + PDO)

![PHP](https://img.shields.io/badge/PHP-8.x-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![PDO](https://img.shields.io/badge/PDO-Secure%20Queries-green)
![License](https://img.shields.io/badge/License-MIT-yellow)
![Status](https://img.shields.io/badge/Project-Active-success)
![Contributions](https://img.shields.io/badge/Contributions-Welcome-brightgreen)

A simple and secure **Student Management System** built with **PHP, MySQL, and PDO**.  
This project demonstrates **user authentication and full CRUD operations** with a clean and consistent UI.

It is designed as a **beginner-friendly backend project** that follows good practices like **PDO prepared statements, password hashing, and session authentication**.

---

# 🚀 Features

- 🔐 Secure Login System (password_hash & password_verify)
- 📋 Student Management (Create, Read, Update, Delete)
- 🗄 MySQL Database Integration
- 🛡 PDO Prepared Statements (SQL Injection Protection)
- 🔑 Session-based Authentication
- 🎨 Simple Consistent UI
- 📦 Clean Project Structure

---

# 🛠 Tech Stack

### Backend
- PHP
- PDO (PHP Data Objects)

### Frontend
- HTML
- CSS

### Database
- MySQL

### Security
- Password Hashing
- Prepared Statements
- Session Authentication

---

# 📂 Project Structure

```
student-management-system-php-pdo/
│
├── assets/
│   └── style.css
│
├── config/
│   └── database.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── database/
│   └── student_db.sql
│
├── index.php
├── login.php
├── logout.php
├── dashboard.php
├── students.php
├── add_student.php
├── edit_student.php
├── delete_student.php
│
└── README.md
```

---

# ⚙️ Installation & Setup

## 1️⃣ Clone the Repository

```bash
git clone https://github.com/vishal-git-dot/secure-student-management-system.git
```

Move the project folder into your local server directory.

For **XAMPP**

```
htdocs/
```

For **WAMP**

```
www/
```

---

# 🗄 Database Setup

1. Open **phpMyAdmin**
2. Create a new database

```
student_db
```

3. Import the SQL file:

```
database/student_db.sql
```

Or run this command:

```bash
mysql -u root -p < database/student_db.sql
```

---

# ⚙️ Configure Database Connection

Open the file:

```
config/database.php
```

Update credentials if needed:

```php
$host = "localhost";
$dbname = "student_db";
$username = "root";
$password = "";
```

---

# ▶️ Run the Application

Start **Apache** and **MySQL** in **XAMPP / WAMP**.

Open your browser and visit:

```
http://localhost/student-management-system-php-pdo
```

---

# 🔑 Default Login

```
Username: admin
Password: admin123
```

---

# 📸 Screenshots

Update Soon.

---

# 📚 What This Project Demonstrates

- PHP backend development
- Secure login authentication
- CRUD application architecture
- Database interaction with PDO
- Organized folder structure
- Basic UI integration

---

# 🚧 Possible Improvements

- Add **Bootstrap UI**
- Implement **Search & Pagination**
- Add **Role-Based Authentication**
- Convert to **REST API**
- Add **AJAX-based CRUD operations**

---

# 👨‍💻 Author

GitHub:  
https://github.com/vishal-git-dot

---

# 📜 License

This project is licensed under the **MIT License**.
