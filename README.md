# 💻 PHP Full-Stack User Management System

This is a **full-stack web application** built with **PHP, MySQL, HTML, CSS, and JavaScript**, designed to manage two types of users: **Normal Users** and **Admins**. It features full **CRUD operations**, **form validation**, and a functional **Admin Dashboard** for data management.

---

## 🚀 Features

### 👤 Normal User
- ✅ **User Registration**
- 🔐 **Login / Logout**
- 📝 **View Profile**
- ✏️ **Edit Profile**
- 🗑️ **Delete Account**
- 🔁 **Update Account Information**
- ✅ **PHP Form Validation (client & server-side)**

### 🛠️ Admin
- 🔐 **Secure Admin Login**
- 📊 **Admin Dashboard Interface**
- 👥 **Manage All Users (CRUD)**
- 📥 **View, Add, Edit, Delete User Accounts**

---

## 🧰 Tech Stack

| Layer         | Technology Used              |
|---------------|-------------------------------|
| 💻 Frontend    | HTML, CSS, JavaScript         |
| 🧠 Backend     | PHP (Core PHP)                |
| 🗃️ Database     | MySQL (via phpMyAdmin)        |
| 🔒 Validation  | PHP Server-Side Form Validation |
| 📂 Database Tool | phpMyAdmin                   |

---

## 🗂️ Project Structure

---

## 📦 Database Structure

- **Database Name:** `user_management`
- **User Table:** `users`
  - `id` (INT, Primary Key, Auto Increment)
  - `fullname` (VARCHAR)
  - `username` (VARCHAR, Unique)
  - `email` (VARCHAR, Unique)
  - `password` (VARCHAR)
  - `phoneNumber` (Varchar)

**Admin Table:** `Admin`
  - `id` (INT, Primary Key, Auto Increment)
  - `fullname` (VARCHAR)
  - `username` (VARCHAR, Unique)
  - `email` (VARCHAR, Unique)
  - `password` (VARCHAR)
  - `phoneNumber` (Varchar)
  - `NidNumber` (Varchar)
    
**Product Table:** `Product`
  - will be updated


You can create the database and table using **phpMyAdmin** or import from the provided SQL file (if available).

---

## 🧪 How to Run Locally

1. Clone or download the repository.
2. Place it in your local server directory (`htdocs` if using XAMPP).
3. Create the database in **phpMyAdmin** and import the SQL script.
4. Update the database credentials in `includes/db.php`.
5. Start Apache & MySQL via XAMPP and visit `http://localhost/project_folder/`.

---

## 🔒 Security Notes

- Passwords are hashed using PHP’s `password_hash()` and verified via `password_verify()`.
- Input validation and sanitation are implemented on both frontend and backend.
- Prepared statements or basic SQL escape functions are used to prevent SQL injection.

---

## 📬 Contact

For questions or contributions, feel free to fork the repo, open an issue, or contact me directly.

---

> 🚧 This project was built for learning/demo purposes. You can expand it further with features like email verification, password reset, search/filter functions, and pagination.

