# Laravel CRM System

A simple Customer Relationship Management (CRM) system built using Laravel.

This project is designed to simulate a real-world business system for managing clients, contacts, projects, and tasks with full CRUD functionality.

---

## Main Features

- User Authentication (Login / Register / Logout)
- Dashboard with statistics
- Client Management (CRUD)
- Contact Management (CRUD)
- Project Management (CRUD)
- Task Management (CRUD)
- Search functionality for clients
- Relationship between data (Client → Contacts → Projects → Tasks)
- Form validation
- Route protection using middleware

---

##  Database Relationships

- One Client → Many Contacts
- One Client → Many Projects
- One Project → Many Tasks

---

## 🛠️ Tech Stack

- Laravel
- PHP
- MySQL
- Blade Template Engine
- HTML / CSS

---

## ⚙️ Installation

git clone https://github.com/harrizyusuff02-glitch/laravel-crm-system.git
cd laravel-crm-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
