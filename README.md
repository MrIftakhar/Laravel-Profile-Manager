# 🗂️ Laravel Profile Manager with Authentication, Bootstrap & Image Upload

This is a simple Profile Management Web Application built with **Laravel**, **MySQL**, and **Bootstrap**. It features **user authentication**, a secure **dashboard**, and the ability to **create profile with image uploads**.

---

## 🚀 Features

- 🧑‍💼 User Registration and Login (with name, email, password)
- 🔐 Authenticated Dashboard (protected via middleware)
- 📝 Create and View profiles
- 🖼️ Upload and display images
- 🎨 Clean and responsive UI using Bootstrap
- 📦 Store images using Laravel's storage system
- 🔓 Logout functionality

---

## 🧰 Tech Stack

- **Laravel 10+**
- **PHP 8+**
- **MySQL**
- **Bootstrap**
- **Blade Templating Engine**

---

## 🛠️ Installation

### Prerequisites

- PHP 8+
- Composer
- MySQL
- Node.js & npm
- Bootstrap
- Laravel CLI

### Steps

```bash
# 1. Clone the repository
git clone https://github.com/MrIftakhar/Laravel-Profile-Manager.git
cd Laravel-Profile-Manager

# 2. Install PHP dependencies
composer install

# 3. Install JavaScript dependencies
npm install

# 4. Compile Tailwind CSS
npm run dev   # or `npm run build` for production

# 5. Copy the .env file and configure
cp .env.example .env

# 6. Generate application key
php artisan key:generate

# 7. Set your database credentials in `.env`

# 8. Run database migrations
php artisan migrate

# 9. Create symbolic link for public storage
php artisan storage:link

# 10. Serve the application
php artisan serve
# Laravel-Profile-Manager
