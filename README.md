# PHP Login System

A simple and secure login system built using PHP. This project demonstrates authentication, session handling, cookie management, and form validation.

---

## Features

-  User Login Authentication
-  Session Management
-  "Remember Me" using Cookies
-  Form Validation (Username, Email, Password)
-  Error Handling with Sessions
-  Redirect after Login (Dashboard)
-  Theme Preference using Cookies

---

##  Technologies Used

- PHP
- HTML
- Bootstrap (for UI)
- WAMP Server (Localhost)

---

##  Project Structure

- `login.php` → Login page UI
- `auth.php` → Handles login logic
- `dashboard.php` → User dashboard after login
- `validation.php` → Input validation functions

---

##  How It Works

1. User enters username, email, and password
2. Data is validated using custom functions
3. If invalid → error stored in session and redirected to login page
4. If valid → user data stored in session
5. Optional:
   - Username saved using cookies (Remember Me)
   - Theme preference stored
6. User redirected to dashboard

---

##  Cookie Usage

- `remember_username` → Stores username for future login
- `user_theme` → Stores user theme preference

---
##  Author

- Hemadharshini A

---
