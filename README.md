This project is a full Laravel application built to fulfill a 4-part interview task:
- Task 1: Blog UI with Tailwind CSS, dark mode, and AJAX comment support
- Task 2: User authentication with role-based access using Blade & Livewire
- Task 3: E-commerce DB schema with Eloquent relationships and query demo blade
- Task 4: External API integration (JSONPlaceholder) with search and scheduler

Tech Stack Used
Laravel 12.x – PHP web framework for backend development

Livewire – For reactive UI components within Blade templates

Tailwind CSS – Utility-first CSS framework for responsive design and dark mode

Alpine.js – Lightweight JavaScript for frontend interactivity 

MySQL – Relational database for storing users, products, orders

Laravel Breeze – Lightweight auth scaffolding 

Laravel Scheduler – To automate periodic API data syncing

Composer – PHP dependency manager

Vite – Asset bundler for modern frontend builds

Node.js + NPM – For compiling frontend assets

GitHub – For version control and project submission

Setup Instructions
1. Clone this repository:
git clone https://github.com/krishashah64/laravel-developer-task.git
cd laravel-developer-task
2. Install PHP and JS dependencies:
composer install
npm install
npm run build
3. Configure Environment:
cp .env.example .env
php artisan key:generate
Update DB credentials in .env
4. Run Migrations and Seeders:
php artisan migrate --seed
5. Start Laravel server:
php artisan serve

Key Routes
/blog — Blog with dark mode & comments (Task 1)
/admin/users — Admin panel to manage users (Task 2)
/query-demo — Query blade showing Eloquent logic (Task 3)
/external-users — Display external users from API (Task 4)


Admin Login
Email: admin@example.com
Password: password
