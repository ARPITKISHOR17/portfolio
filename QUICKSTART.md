# Quick Start Guide

Get your portfolio running in 5 minutes!

## Prerequisites

- PHP 8.2+
- Composer
- Node.js & NPM

## Installation (5 Steps)

### 1. Install Dependencies

```bash
cd arpit-portfolio
composer install
npm install
```

### 2. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Setup

Using SQLite (easiest):
```bash
touch database/database.sqlite
php artisan migrate
```

Or configure MySQL in `.env`:
```env
DB_CONNECTION=mysql
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=your_password
```

Then run:
```bash
php artisan migrate
```

### 4. Build Assets

```bash
npm run build
```

### 5. Start Server

```bash
php artisan serve
```

Visit: **http://localhost:8000**

## Customization

### Update Your Information

Edit `resources/views/portfolio.blade.php`:

1. Search for "Arpit Kishor" and replace with your name
2. Update email, phone, LinkedIn
3. Modify skills, experience, projects
4. Update education section

### Add Your Resume

Replace `public/resume.pdf` with your actual resume.

### Change Colors

Edit `tailwind.config.js`:

```javascript
colors: {
  primary: {
    // Change these values
    500: '#0ea5e9',
    600: '#0284c7',
    // ...
  }
}
```

## Development Mode

For live reload during development:

Terminal 1:
```bash
npm run dev
```

Terminal 2:
```bash
php artisan serve
```

## Need Help?

Check the full README.md for detailed documentation.

Contact: arpitkishor5647@gmail.com
