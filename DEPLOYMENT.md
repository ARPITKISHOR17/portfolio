# Deployment Guide

## Quick Deployment Checklist

### 1. Pre-Deployment

- [ ] Update `.env` with production settings
- [ ] Set `APP_ENV=production` and `APP_DEBUG=false`
- [ ] Configure database credentials
- [ ] Set up mail configuration (optional)
- [ ] Add your resume PDF to `public/resume.pdf`

### 2. Build Assets

```bash
npm run build
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 3. Database Setup

```bash
php artisan migrate --force
```

### 4. File Permissions

```bash
chmod -R 755 storage bootstrap/cache
```

### 5. Web Server Configuration

#### Apache (.htaccess)

The Laravel `.htaccess` file in the `public` directory should work out of the box.

#### Nginx

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/arpit-portfolio/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```


## Hosting Options

### Option 1: Shared Hosting (cPanel)

1. Upload files via FTP/SFTP
2. Point domain to `public` directory
3. Import database and update `.env`
4. Run migrations via SSH or phpMyAdmin

### Option 2: VPS (DigitalOcean, Linode, AWS)

1. Set up LEMP/LAMP stack
2. Clone repository
3. Run installation commands
4. Configure web server
5. Set up SSL with Let's Encrypt

### Option 3: Laravel Forge

1. Connect your server
2. Create new site
3. Deploy from Git repository
4. Forge handles everything automatically

### Option 4: Heroku

1. Create Heroku app
2. Add Heroku Postgres addon
3. Set environment variables
4. Deploy via Git

```bash
heroku create arpit-portfolio
heroku addons:create heroku-postgresql:hobby-dev
git push heroku main
heroku run php artisan migrate --force
```

## SSL Certificate

Use Let's Encrypt for free SSL:

```bash
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

## Performance Optimization

1. Enable OPcache in PHP
2. Use Redis for caching (optional)
3. Enable Gzip compression
4. Use CDN for static assets
5. Optimize images

## Monitoring

- Set up error logging
- Monitor server resources
- Track application performance
- Set up uptime monitoring

## Backup Strategy

1. Database backups (daily)
2. File backups (weekly)
3. Store backups off-site
4. Test restore procedures

## Security

- Keep Laravel and dependencies updated
- Use strong database passwords
- Enable HTTPS only
- Set proper file permissions
- Configure firewall rules
- Regular security audits

## Post-Deployment

- [ ] Test all functionality
- [ ] Verify contact form works
- [ ] Check mobile responsiveness
- [ ] Test dark/light mode
- [ ] Verify all links work
- [ ] Test resume download
- [ ] Check page load speed
- [ ] Verify SEO meta tags

## Troubleshooting

### 500 Error
- Check file permissions
- Clear cache: `php artisan cache:clear`
- Check error logs

### Assets Not Loading
- Run `npm run build`
- Check `public/build` directory exists
- Verify `APP_URL` in `.env`

### Database Connection Error
- Verify database credentials
- Check database server is running
- Ensure database exists

## Support

For issues or questions, contact:
- Email: arpitkishor5647@gmail.com
- Phone: +91 7984821975
