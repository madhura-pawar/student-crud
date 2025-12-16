# PHP User Authentication Project

This project is a *simple user authentication system* built with PHP and MySQL.  
It allows users to *register, login, access a dashboard, and **logout* securely.  

---

## Features

- User Registration with *username, email, and password*
- Passwords are **hashed using PHP password_hash()**
- User Login with *email and password*
- Protected Dashboard (only accessible after login)
- Logout functionality
- Basic validation (email existence, correct password)
- Fully functional *PHP & MySQL project*

---

## Technologies Used

- PHP 8+
- MySQL / phpMyAdmin
- HTML5
- CSS (optional, can be enhanced)

---

## Database

*Database Name:* internship_db  

*Table Name:* users  

*Table Structure:*

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
); 

## Installation

1. Clone this repository:  
   ```bash
   git clone https://github.com/madhura-pawar/student-crud.git
