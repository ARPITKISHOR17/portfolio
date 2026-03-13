# Project Structure

## Overview

This is a Laravel 12 portfolio website with Tailwind CSS and Alpine.js.

## Directory Structure

```
arpit-portfolio/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PortfolioController.php    # Main portfolio controller
│   └── Models/
│       └── Contact.php                     # Contact form model
│
├── database/
│   └── migrations/
│       └── 2026_03_12_111129_create_contacts_table.php
│
├── public/
│   ├── build/                              # Compiled assets (generated)
│   └── resume.pdf                          # Your resume file
│
├── resources/
│   ├── css/
│   │   └── app.css                         # Tailwind CSS styles
│   ├── js/
│   │   └── app.js                          # Alpine.js initialization
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php               # Main layout with nav/footer
│       └── portfolio.blade.php             # Main portfolio page
│
├── routes/
│   └── web.php                             # Web routes
│
├── .env                                    # Environment configuration
├── tailwind.config.js                      # Tailwind configuration
├── vite.config.js                          # Vite build configuration
├── composer.json                           # PHP dependencies
├── package.json                            # Node dependencies
├── README.md                               # Main documentation
├── QUICKSTART.md                           # Quick start guide
├── DEPLOYMENT.md                           # Deployment guide
└── PROJECT_STRUCTURE.md                    # This file
```

## Key Files

### Backend

- `app/Http/Controllers/PortfolioController.php` - Handles homepage and contact form
- `app/Models/Contact.php` - Contact form data model
- `routes/web.php` - Application routes
- `database/migrations/*` - Database schema

### Frontend

- `resources/views/layouts/app.blade.php` - Main layout with navigation and footer
- `resources/views/portfolio.blade.php` - Portfolio content (all sections)
- `resources/css/app.css` - Tailwind CSS and custom styles
- `resources/js/app.js` - Alpine.js initialization

### Configuration

- `.env` - Environment variables (database, app settings)
- `tailwind.config.js` - Tailwind theme customization
- `vite.config.js` - Asset bundling configuration

## Features by Section

### 1. Hero Section
- Name and title
- Professional headline
- Contact information
- CTA buttons

### 2. About Section
- Professional summary
- Experience overview
- Expertise highlights

### 3. Skills Section
- Backend Development
- Frontend
- Database
- Security
- Tools
- DevOps
- Testing

### 4. Experience Section
- IPOP Solution (Current)
- Phoenix IT Park
- Trivedi Infoway

### 5. Projects Section
- Food Ordering & Pickup System
- Technology stack
- Key features

### 6. Achievements Section
- Performance improvements
- Security implementations
- Enterprise projects

### 7. Education Section
- M.Sc. Information Technology
- Bachelor of Engineering
- Languages

### 8. Contact Section
- Contact form
- Email, phone, LinkedIn
- Form validation
- Database storage

## Technologies Used

### Backend
- Laravel 12
- PHP 8.2+
- MySQL/SQLite

### Frontend
- Blade Templates
- Tailwind CSS
- Alpine.js
- Vite

### Features
- Dark/Light mode
- Responsive design
- Smooth animations
- SEO optimized
- Contact form with validation

## Customization Points

1. **Personal Info**: `resources/views/portfolio.blade.php`
2. **Colors**: `tailwind.config.js`
3. **Styles**: `resources/css/app.css`
4. **Routes**: `routes/web.php`
5. **Database**: `database/migrations/*`

## Build Process

1. Development: `npm run dev` (hot reload)
2. Production: `npm run build` (optimized)
3. Cache: `php artisan optimize`

## Database Tables

- `users` - Default Laravel users table
- `contacts` - Contact form submissions
- `cache` - Application cache
- `jobs` - Queue jobs

## Environment Variables

Key `.env` variables:
- `APP_NAME` - Application name
- `APP_ENV` - Environment (local/production)
- `APP_DEBUG` - Debug mode
- `APP_URL` - Application URL
- `DB_*` - Database configuration

## Performance

- Vite for fast asset bundling
- Tailwind CSS purging for small CSS
- Alpine.js for lightweight interactivity
- Laravel caching for optimization
- Lazy loading for images

## Security Features

- CSRF protection on forms
- Input validation
- SQL injection prevention
- XSS protection
- Secure headers
