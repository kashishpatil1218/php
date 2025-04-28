

# 📚 Book Management System - PHP & MySQL

This is a simple **Book Management Web Application** built using **PHP**, **MySQL**, and **Bootstrap 5**.  
It allows users to **add**, **view**, **edit**, and **delete** book records easily.

---

## 🚀 Features

- Add a new book with name, writer, details, price, and language.
- View all books in a table format.
- Edit existing book information.
- Delete any book entry.
- Responsive design using Bootstrap 5.

---

## 🛠 Technologies Used

- **PHP** (Core PHP)
- **MySQL** (Database)
- **HTML5**, **CSS3**, **Bootstrap 5** (Frontend Framework)

---

## 📂 Project Structure

```
/book-management
│
├── index.php        # Main page to add & list books
├── update.php       # Update book details
├── config.php       # Database connection and CRUD functions
├── README.md        # Project Documentation
└── /books.sql       # (Optional) SQL file for creating 'books' table
```

---

## 🛠 Setup Instructions

1. **Clone the repository** or **Download the source code**.

2. **Create a Database**:
   - Open **phpMyAdmin** or any MySQL tool.
   - Create a database named:  
     ```sql
     CREATE DATABASE Book;
     ```

3. **Create Table**:
   Run the following SQL query inside the `Book` database:

   ```sql
   CREATE TABLE `books` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `Book_Name` VARCHAR(255) NOT NULL,
     `Book_Writer` VARCHAR(255) NOT NULL,
     `Book_Details` TEXT NOT NULL,
     `Book_Language` VARCHAR(255) NOT NULL,
     `Book_Price` DECIMAL(10,2) NOT NULL
   );
   ```

4. **Configure Database**:
   - Make sure your database settings in `config.php` are correct:
     ```php
     private $host = "localhost";
     private $username = "root";
     private $password = "";
     private $database = "Book";
     ```

5. **Start Server**:
   - Run the project on **XAMPP**, **MAMP**, or any local server.
   - Visit `http://localhost/book-management/index.php` in your browser.


## ⚙️ How It Works

- **index.php**:  
  Displays a form to add new books and a table showing all books.  
  Handles add, edit redirect, and delete actions.

- **update.php**:  
  Loads the selected book’s data into a form for editing and updates it into the database.

- **config.php**:  
  Contains the **`Config`** class to handle:
  - Database connection
  - Fetching books
  - Adding a new book
  - Updating a book
  - Deleting a book



https://github.com/user-attachments/assets/221f5371-7e90-4c80-8d71-2a59267d3533

