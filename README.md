
# Classified_Ads_System

This project is a Laravel-based API for managing ads, categories, reviews, and users with authentication.

---

## Features

* Public routes for viewing ads and categories
* Protected routes for creating, updating, and deleting ads and reviews
* User authentication with Sanctum
* Image uploads for ads
* Email confirmation for ad creation ,ad review result , review notification 

---

## Setup Instructions

1. **Clone the repository**

```bash
git clone https://github.com/halahasan1/Classified_Ads_System.git
```

2. **Install dependencies**

```bash
composer install
npm install
npm run dev
```

3. **Configure environment**

Copy `.env.example` to `.env` and update database and mail settings.

```bash
cp .env.example .env
php artisan key:generate
```

4. **Run migrations and seeders**

```bash
php artisan migrate --seed
```

5. **Create storage symlink**

```bash
php artisan storage:link
```

6. **Run the application**

```bash
php artisan serve
```

---

## Postman API Collection

To test all endpoints, import this Postman collection:

👉 **[Postman Collection Link](https://www.postman.com/research-geoscientist-78470583/workspace/my-workspace/collection/39063412-b79fb710-518d-4676-a106-b27694e3581d?action=share&creator=39063412)**
