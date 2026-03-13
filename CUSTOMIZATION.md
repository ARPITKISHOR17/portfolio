# Customization Guide

Complete guide to customize the portfolio for your needs.

## 1. Personal Information

### Update Name and Title

File: `resources/views/portfolio.blade.php`

Search and replace:
- "Arpit Kishor" → Your Name
- "Full Stack PHP / Laravel Developer" → Your Title
- "REST API Specialist | Backend Performance Optimization" → Your Specialization

### Update Contact Details

Find and update:
```html
Email: arpitkishor5647@gmail.com → your@email.com
Phone: +91 7984821975 → Your Phone
LinkedIn: linkedin.com/in/arpit-k-5a3093241 → Your LinkedIn
```

## 2. About Section

File: `resources/views/portfolio.blade.php` (line ~60)

Update the three paragraphs with your:
- Professional summary
- Experience and expertise
- Key achievements

## 3. Skills

File: `resources/views/portfolio.blade.php` (line ~80)

### Add New Skill Category

```html
<div class="skill-card">
    <h3 class="skill-card-title">Your Category</h3>
    <div class="skill-tags">
        <span class="skill-tag">Skill 1</span>
        <span class="skill-tag">Skill 2</span>
    </div>
</div>
```

### Modify Existing Skills

Simply edit the `<span class="skill-tag">` elements.

## 4. Experience

File: `resources/views/portfolio.blade.php` (line ~170)

### Add New Job

```html
<div class="experience-card">
    <div class="flex justify-between items-start mb-4">
        <div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Job Title</h3>
            <p class="text-xl text-primary-600 dark:text-primary-400">Company Name</p>
        </div>
        <span class="text-gray-600 dark:text-gray-400 font-semibold">Date Range</span>
    </div>
    <ul class="space-y-2 text-gray-700 dark:text-gray-300">
        <li class="flex items-start">
            <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            Your responsibility
        </li>
    </ul>
</div>
```

## 5. Projects

File: `resources/views/portfolio.blade.php` (line ~300)

### Add New Project

```html
<div class="project-card">
    <div class="flex justify-between items-start mb-4">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Project Name</h3>
        <span class="px-4 py-1 bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300 rounded-full text-sm font-semibold">Type</span>
    </div>
    <p class="text-gray-700 dark:text-gray-300 mb-4">
        Project description
    </p>
    <div>
        <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Technology Stack:</h4>
        <div class="flex flex-wrap gap-2">
            <span class="tech-badge">Tech 1</span>
            <span class="tech-badge">Tech 2</span>
        </div>
    </div>
</div>
```

## 6. Education

File: `resources/views/portfolio.blade.php` (line ~380)

Update degree, institution, and year.

## 7. Colors and Theme

File: `tailwind.config.js`

### Change Primary Color

```javascript
colors: {
  primary: {
    50: '#f0f9ff',
    100: '#e0f2fe',
    // ... change these hex values
    600: '#0284c7',  // Main color
    700: '#0369a1',
  },
}
```

### Popular Color Schemes

**Blue (Current)**
```javascript
600: '#0284c7'
```

**Purple**
```javascript
600: '#9333ea'
```

**Green**
```javascript
600: '#059669'
```

**Orange**
```javascript
600: '#ea580c'
```

## 8. Fonts

File: `tailwind.config.js`

```javascript
fontFamily: {
  sans: ['Your Font', 'system-ui', 'sans-serif'],
  mono: ['Your Mono Font', 'monospace'],
}
```

Update Google Fonts import in `resources/css/app.css`:
```css
@import url('https://fonts.googleapis.com/css2?family=Your+Font:wght@300;400;500;600;700&display=swap');
```

## 9. Resume

Replace `public/resume.pdf` with your actual resume PDF file.

## 10. SEO Meta Tags

File: `resources/views/layouts/app.blade.php`

Update:
```html
<meta name="description" content="Your description">
<meta name="keywords" content="Your, Keywords">
<meta property="og:title" content="Your Title">
```

## 11. Navigation

File: `resources/views/layouts/app.blade.php`

Add/remove navigation links:
```html
<a href="#section" class="nav-link">Section Name</a>
```

## 12. Footer

File: `resources/views/layouts/app.blade.php`

Update copyright and footer content.

## 13. Animations

File: `resources/views/portfolio.blade.php`

Modify Alpine.js animations:
```html
x-transition:enter="transition ease-out duration-1000"
x-transition:enter-start="opacity-0 transform translate-y-10"
```

## 14. Dark Mode

Default behavior is saved in localStorage. To change default:

File: `resources/views/layouts/app.blade.php`

```html
x-data="{ darkMode: true }"  <!-- Default to dark -->
```

## 15. Contact Form

### Add Email Notifications

File: `app/Http/Controllers/PortfolioController.php`

```php
use Illuminate\Support\Facades\Mail;

Mail::to('your@email.com')->send(new ContactMail($validated));
```

### Add More Fields

1. Update migration
2. Update model fillable
3. Update form in view
4. Update validation in controller

## 16. Add New Sections

File: `resources/views/portfolio.blade.php`

```html
<section id="new-section" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="section-title">Section Title</h2>
        <!-- Your content -->
    </div>
</section>
```

Don't forget to add to navigation!

## 17. Social Media Links

Add social icons to hero or footer:

```html
<a href="https://github.com/yourusername" target="_blank">
    <svg><!-- GitHub icon --></svg>
</a>
```

## 18. Analytics

Add Google Analytics to `resources/views/layouts/app.blade.php`:

```html
<head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>
```

## Testing Changes

After making changes:

1. Clear cache: `php artisan cache:clear`
2. Rebuild assets: `npm run build`
3. Test in browser
4. Check mobile responsiveness
5. Test dark/light mode

## Need Help?

- Check Laravel docs: https://laravel.com/docs
- Check Tailwind docs: https://tailwindcss.com/docs
- Check Alpine.js docs: https://alpinejs.dev

Contact: arpitkishor5647@gmail.com
