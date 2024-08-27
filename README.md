# My Project Dashboard

## Overview

This project is a Symfony-based admin dashboard for managing Accounts, Customers, and Users. It utilizes EasyAdmin for a quick and customizable admin interface.

## Requirements

- PHP 8.1 or higher
- Composer
- Symfony CLI
- SQLite

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/dcsm8/easyadmin-poc.git
   ```

2. Navigate to the project directory:
   ```
   cd easyadmin-poc
   ```

3. Install dependencies:
   ```
   composer install
   ```

4. Create the database:
   ```
   php bin/console doctrine:database:create
   ```

5. Run migrations:
   ```
   php bin/console doctrine:migrations:migrate
   ```

## Usage

1. Start the Symfony development server:
   ```
   symfony server:start
   ```

2. Access the admin dashboard at `http://localhost:8000/admin`

## Features

- CRUD operations for Accounts, Customers, and Users
- Customized action buttons for each entity (View, Edit, Delete)
- Association management between entities
- Role-based access control for certain actions (e.g., Delete restricted to ROLE_SUPER_ADMIN)

## Customization

The project uses EasyAdmin for the admin interface. You can customize the behavior and appearance of the admin pages by modifying the respective CRUD controllers:

- `src/Controller/Admin/AccountCrudController.php`
- `src/Controller/Admin/CustomerCrudController.php`
- `src/Controller/Admin/UserCrudController.php`

The main dashboard configuration can be found in `src/Controller/Admin/DashboardController.php`.