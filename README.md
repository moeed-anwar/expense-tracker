# 💰 Expense & Salary Tracker

A web application built with **Laravel** and **Tailwind CSS** that allows logged-in users to manage and track their **income** and **expenses** with a simple, clean interface.

---

## 🚀 Features

- User Registration & Login
- Add Income or Expense records
- View total balance, income, and expense summary
- Responsive design using Tailwind CSS
- Secure authentication and data protection
- Admin panel for managing all users' transactions (optional)

---

## 🛠 Built With

- [Laravel](https://laravel.com/) - PHP Web Framework
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- MySQL - Database
- Blade - Laravel’s templating engine

---

## ⚙️ Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/moeed-anwar/expense-tracker.git
cd expense-tracker



2. Install PHP & JS Dependencies
composer install
npm install



3. Configure Environment
Copy the .env.example and configure your DB and mail settings:
cp .env.example .env

Update .env with your database credentials:
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password



4. Run Migrations
php artisan migrate



5. Build Frontend Assets
npm run dev



6. Run the Server
php artisan serve
The app will be available at http://127.0.0.1:8000.


👤 Author
<a href="https://github.com/moeed-anwar">Moeed Anwar</a>
