# PraxisPHP

PraxisPHP is a lightweight and modern PHP micro-framework designed for simplicity, speed, and flexibility.  
Perfect for building small to medium web applications and APIs without the heavy baggage of larger frameworks.

---

## 🚀 Features

- Minimal and Clean MVC Architecture
- Built-in Lightweight Routing
- Simple Database Connection (PDO)
- Environment Variables Loader (.env)
- Extendable and Customizable Core
- Composer Autoloading
- GitHub Actions CI ready

---

## 🧰 Requirements

- PHP 8.0 or higher
- Composer
- MySQL or MariaDB
- Web Server (Apache, Nginx, etc.)

---

## 📦 Installation

1. **Install via Composer:**

   You can install the PraxisPHP package directly using Composer:

   ```bash
   composer create-project alanretubis/praxis-php <project-name>
   ```

2. Configure the Environment

   Copy the example environment file to `.env`.

   - For **macOS/Linux**:

   ```bash
   cp .env.example .env
   ```

   - For **Windows**:

   ```bash
   copy .env.example .env
   ```

3. Running your app

   ```bash
   php -S localhost:8000 -t public
   ```
