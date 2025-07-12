# Delhi Metro Job Portal Web App

This is a full-stack web application built using **PHP**, **MySQL**, **CSS**, and **Bootstrap**. It allows users to sign up, log in, and apply for various job openings in departments like HR, Finance, Operations, and Internships. The project includes a modular structure using partials and a navigation system, all running locally through XAMPP

---

## Features

-  User signup, login, and logout functionality
-  Separate pages for each job department (HR, Finance, Operations, Intern, Accounts)
-  Server-side form handling using PHP and MySQL
-  Navigation bar for smooth routing between pages
-  Database connectivity using reusable `partials` PHP files
-  Clean and responsive Bootstrap UI
-  Static metro map or link for Delhi Metro

---

## Tech Stack

| Layer     | Technology               |
|-----------|---------------------------|
| Frontend  | PHP, CSS, Bootstrap       |
| Backend   | PHP + MySQL (via XAMPP)   |
| Database  | MySQL with phpMyAdmin     |
| Server    | XAMPP (Apache & MySQL)    |

---

## Folder & File Structure
```
DelhiMetroApp/
├── welcome.php
├── login.php
├── signup.php
├── logout.php
├── metro-map.php
├── navigation.php
├── style.css
│
├── hr.php
├── operationmanagement.php
├── finance.php
├── intern.php
├── account.php
│
├── assets/
│   └── logo.png
│
├── partials/
│   ├── dbconnect.php
│   └── alerts.php
│
├── partials/forms/
│   ├── handle_login.php
│   ├── handle_signup.php
│   ├── handle_hr.php
│   ├── handle_operations.php
│   ├── handle_finance.php
│   ├── handle_intern.php
│   └── handle_account.php
│
├── sql/
│   └── metro_app.sql
│
└── README.md
```


---

## How to Run Locally

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/)
2. **Start Apache & MySQL** using the XAMPP Control Panel
3. **Set Up Database**:
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a database called `metro`
   - Import your `.sql` dump (or create tables manually)
4. **Place the Project Folder** inside:
C:/xampp/htdocs/DelhiMetroApp/
5. **Visit in Browser**:
http://localhost/DelhiMetroApp/welcome.php


---

## Screenshots
-  Homepage
-  <img width="1729" height="1031" alt="Screenshot (110)" src="https://github.com/user-attachments/assets/16226bf5-a7ce-4db3-98a6-a2939f52e865" />

-  Login & Signup Interface
-  <img width="1920" height="1019" alt="Screenshot (109)" src="https://github.com/user-attachments/assets/f2726f29-ff1e-453f-a99f-69d4d59f5b21" />

-  Job Application Forms (HR, Finance, etc.)
-  <img width="1920" height="1034" alt="Screenshot (111)" src="https://github.com/user-attachments/assets/372328c0-d8bb-47c0-b224-6b7d392f6d96" />

---

## Sample Tables (MySQL)

```sql
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
email VARCHAR(100),
password VARCHAR(255)
);

CREATE TABLE job_applications (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
department VARCHAR(50),
application_date DATE
);
```

<img width="1920" height="1027" alt="Screenshot (112)" src="https://github.com/user-attachments/assets/fa794642-1a07-4074-923d-e43806c23644" />


## Future Enhancements
- Password encryption (bcrypt or password_hash)

- Email notifications after job form submission

- Resume upload feature

- Admin panel to post/view applications

- Deploy live with a custom domain

---

## Author
-   Tushar Saharan
-   Email: saharantushar2002@gmail.com


