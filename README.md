# 🗂️ Laravel Task Manager with Authentication, Tailwind CSS & Image Upload

This is a simple Task Management Web Application built with **Laravel**, **MySQL**, and **Tailwind CSS**. It features **user authentication**, a secure **dashboard**, and the ability to **create tasks with image uploads**.

---

## 🚀 Features

- 🧑‍💼 User Registration and Login (with name, email, password)
- 🔐 Authenticated Dashboard (protected via middleware)
- 📝 Create and View Tasks
- 🖼️ Upload and display task images
- 🎨 Clean and responsive UI using Tailwind CSS
- 📦 Store images using Laravel's storage system
- 🔓 Logout functionality

---

## 🧰 Tech Stack

- **Laravel 10+**
- **PHP 8+**
- **MySQL**
- **Tailwind CSS**
- **Blade Templating Engine**

---

## 🛠️ Installation

### Prerequisites

- PHP 8+
- Composer
- MySQL
- Node.js & npm (for Tailwind)
- Laravel CLI

### Steps

```bash
# 1. Clone the repository
git clone https://github.com/your-username/task-manager-laravel.git
cd task-manager-laravel

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
# Laravel-Task-Manager
