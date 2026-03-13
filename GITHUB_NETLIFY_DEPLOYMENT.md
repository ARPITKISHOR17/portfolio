# GitHub & Netlify Deployment Guide

Complete guide to deploy your Laravel portfolio to Netlify via GitHub.

## Important Note

Netlify is designed for static sites, but Laravel is a dynamic PHP application. We have two options:

### Option 1: Convert to Static HTML (Recommended for Netlify)
Export the portfolio as static HTML files that work on Netlify.

### Option 2: Use PHP Hosting (Better for Laravel)
Deploy to a PHP-compatible host like:
- Heroku (Free tier available)
- Railway.app (Free tier)
- Vercel (with PHP support)
- Traditional shared hosting

## Option 1: Static HTML for Netlify (Recommended)

### Step 1: Generate Static HTML

I'll create a static version of your portfolio that works on Netlify.

```bash
cd arpit-portfolio
npm run build
```

### Step 2: Create Static HTML File

We need to export the Blade template to HTML. Let me create a script for this.

## Option 2: Deploy Laravel to PHP Hosting

For full Laravel functionality (contact form, database), use these platforms:

### A. Deploy to Heroku (Free)

1. **Install Heroku CLI**
   ```bash
   # Download from: https://devcenter.heroku.com/articles/heroku-cli
   ```

2. **Prepare for Heroku**
   ```bash
   cd arpit-portfolio
   echo "web: vendor/bin/heroku-php-apache2 public/" > Procfile
   ```

3. **Deploy**
   ```bash
   heroku login
   heroku create arpit-portfolio
   git push heroku main
   heroku run php artisan migrate --force
   ```

### B. Deploy to Railway.app (Free)

1. Go to https://railway.app
2. Sign up with GitHub
3. Click "New Project"
4. Select "Deploy from GitHub repo"
5. Choose your repository
6. Railway auto-detects Laravel
7. Add environment variables
8. Deploy!

### C. Deploy to Vercel (with PHP)

1. Install Vercel CLI
   ```bash
   npm i -g vercel
   ```

2. Deploy
   ```bash
   cd arpit-portfolio
   vercel
   ```

## Recommended Approach for You

Since you want to use Netlify, let me create a **static HTML version** of your portfolio.

This will:
- ✅ Work perfectly on Netlify
- ✅ Be super fast
- ✅ Cost nothing
- ❌ Contact form will need external service (Formspree, Netlify Forms)

Let me create the static version now...
