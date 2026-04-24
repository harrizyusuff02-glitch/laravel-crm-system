<img width="1919" height="620" alt="image" src="https://github.com/user-attachments/assets/7f07182d-bf87-434f-911f-1a483024ec68" /># Laravel CRM System

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

------- Screenshots ------------

### Dashboard
![Dashboard](public/screenshots/dashboard.png)

### Clients
![Clients](public/screenshots/clients.png)

### Contacts
![Contacts](public/screenshots/contacts.png)

### Projects
![Projects](public/screenshots/projects.png)

### Tasks
![Tasks](public/screenshots/tasks.png)


