# Arpit Kishor - Portfolio Website

A modern, professional portfolio website for Arpit Kishor, a Full Stack PHP / Laravel Developer with 3+ years of experience.

## Features

- ✨ Modern, clean developer-focused design
- 🌓 Dark/Light mode toggle
- 📱 Fully responsive (mobile, tablet, desktop)
- ⚡ Fast loading and SEO optimized
- 🎨 Smooth animations and transitions
- 📧 Contact form with database storage
- 🔒 Secure and scalable architecture

## Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL/SQLite
- **Build Tool**: Vite
- **Version Control**: Git

## Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL or SQLite

### Setup Steps

1. Clone the repository:
```bash
git clone <repository-url>
cd arpit-portfolio
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure database in `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```

Or use SQLite (default):
```env
DB_CONNECTION=sqlite
```

7. Run migrations:
```bash
php artisan migrate
```

8. Build frontend assets:
```bash
npm run build
```

9. Start development server:
```bash
php artisan serve
```

Visit: http://localhost:8000

## Development

For development with hot reload:

```bash
npm run dev
```

In another terminal:
```bash
php artisan serve
```

## Sections

1. **Hero Section** - Introduction with contact details
2. **About Me** - Professional summary
3. **Technical Skills** - Categorized skill showcase
4. **Professional Experience** - Timeline of work history
5. **Featured Projects** - Project showcase
6. **Achievements** - Key accomplishments
7. **Education** - Academic background
8. **Contact** - Contact form and information

## Customization

### Update Personal Information

Edit `resources/views/portfolio.blade.php` to update:
- Name and title
- Contact information
- Skills
- Experience
- Projects
- Education

### Styling

- Tailwind configuration: `tailwind.config.js`
- Custom styles: `resources/css/app.css`
- Colors and theme: Update in `tailwind.config.js`

### Add Resume

Place your resume PDF in `public/resume.pdf`

## Deployment

### Production Build

```bash
npm run build
php artisan optimize
```

### Environment Setup

Update `.env` for production:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

### Recommended Hosting

- Laravel Forge
- DigitalOcean
- AWS
- Heroku
- Shared hosting with PHP support

## Contact Form

Contact submissions are stored in the `contacts` table. You can:

1. View submissions in the database
2. Set up email notifications (configure mail settings in `.env`)
3. Create an admin panel to manage submissions

## License

This project is open-source and available for personal use.

## Author

**Arpit Kishor**
- Email: arpitkishor5647@gmail.com
- Phone: +91 7984821975
- LinkedIn: [linkedin.com/in/arpit-k-5a3093241](https://linkedin.com/in/arpit-k-5a3093241)

---

Built with ❤️ using Laravel, Tailwind CSS, and Alpine.js
