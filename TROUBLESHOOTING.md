# Troubleshooting Guide

Common issues and their solutions.

## Installation Issues

### Composer Install Fails

**Problem**: `composer install` shows errors

**Solutions**:
```bash
# Update Composer
composer self-update

# Clear Composer cache
composer clear-cache

# Try with verbose output
composer install -vvv
```

### NPM Install Fails

**Problem**: `npm install` shows errors

**Solutions**:
```bash
# Clear npm cache
npm cache clean --force

# Delete node_modules and try again
rm -rf node_modules package-lock.json
npm install

# Try with legacy peer deps
npm install --legacy-peer-deps
```

## Build Issues

### Tailwind CSS Not Working

**Problem**: Styles not applying

**Solutions**:
1. Check `tailwind.config.js` content paths
2. Rebuild assets: `npm run build`
3. Clear browser cache
4. Check if Vite is running: `npm run dev`

### Alpine.js Not Working

**Problem**: Interactive features not working

**Solutions**:
1. Check browser console for errors
2. Verify Alpine.js is imported in `app.js`
3. Rebuild: `npm run build`
4. Check if `x-data` is on parent element

### Build Command Fails

**Problem**: `npm run build` shows errors

**Solutions**:
```bash
# Clear Vite cache
rm -rf node_modules/.vite

# Reinstall dependencies
npm install

# Try building again
npm run build
```

## Database Issues

### Migration Fails

**Problem**: `php artisan migrate` shows errors

**Solutions**:
```bash
# Check database connection
php artisan db:show

# Reset migrations (WARNING: deletes data)
php artisan migrate:fresh

# Check .env database settings
DB_CONNECTION=sqlite
# or
DB_CONNECTION=mysql
DB_DATABASE=portfolio
```

### SQLite Database Not Found

**Problem**: "database not found" error

**Solutions**:
```bash
# Create SQLite database
touch database/database.sqlite

# Run migrations
php artisan migrate
```

### MySQL Connection Refused

**Problem**: Can't connect to MySQL

**Solutions**:
1. Check MySQL is running
2. Verify credentials in `.env`
3. Create database: `CREATE DATABASE portfolio;`
4. Check host (usually `127.0.0.1` or `localhost`)

## Server Issues

### 404 Error on Homepage

**Problem**: Homepage shows 404

**Solutions**:
1. Check web server points to `public` directory
2. Verify `.htaccess` exists in `public`
3. Enable mod_rewrite (Apache)
4. Clear route cache: `php artisan route:clear`

### 500 Internal Server Error

**Problem**: White page or 500 error

**Solutions**:
```bash
# Check error logs
tail -f storage/logs/laravel.log

# Fix permissions
chmod -R 755 storage bootstrap/cache

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Check .env file exists
cp .env.example .env
php artisan key:generate
```

### Assets Not Loading (404)

**Problem**: CSS/JS files return 404

**Solutions**:
1. Run `npm run build`
2. Check `public/build` directory exists
3. Verify `APP_URL` in `.env` matches your domain
4. Clear browser cache

## Contact Form Issues

### Form Not Submitting

**Problem**: Contact form doesn't work

**Solutions**:
1. Check CSRF token is present
2. Verify route exists: `php artisan route:list`
3. Check browser console for errors
4. Verify database connection

### Validation Errors Not Showing

**Problem**: No error messages displayed

**Solutions**:
1. Check form has `@csrf` token
2. Add error display in blade template:
```blade
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
```

## Dark Mode Issues

### Dark Mode Not Persisting

**Problem**: Dark mode resets on refresh

**Solutions**:
1. Check browser localStorage is enabled
2. Verify Alpine.js is loaded
3. Check browser console for errors
4. Clear browser cache and cookies

### Dark Mode Toggle Not Working

**Problem**: Button doesn't switch modes

**Solutions**:
1. Check Alpine.js is initialized
2. Verify `x-data` on html element
3. Check browser console for errors
4. Rebuild assets: `npm run build`

## Performance Issues

### Slow Page Load

**Problem**: Website loads slowly

**Solutions**:
```bash
# Optimize for production
npm run build
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Enable OPcache in php.ini
opcache.enable=1
```

### Large Bundle Size

**Problem**: JavaScript/CSS files too large

**Solutions**:
1. Run production build: `npm run build`
2. Check Tailwind is purging unused CSS
3. Optimize images
4. Enable Gzip compression

## Deployment Issues

### Environment Variables Not Working

**Problem**: Config values not updating

**Solutions**:
```bash
# Clear config cache
php artisan config:clear

# Cache new config
php artisan config:cache

# Verify .env file exists and is readable
```

### Permissions Error

**Problem**: "Permission denied" errors

**Solutions**:
```bash
# Fix storage permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache

# Fix ownership (Linux)
chown -R www-data:www-data storage bootstrap/cache
```

### White Screen After Deployment

**Problem**: Blank page in production

**Solutions**:
1. Set `APP_DEBUG=true` temporarily to see errors
2. Check error logs
3. Verify all files uploaded
4. Run `composer install --no-dev`
5. Run `npm run build`
6. Clear all caches

## Browser-Specific Issues

### Safari Issues

**Problem**: Features not working in Safari

**Solutions**:
1. Check for Safari-specific CSS issues
2. Test with Safari developer tools
3. Verify Alpine.js compatibility
4. Check for unsupported CSS features

### Mobile Issues

**Problem**: Not working on mobile

**Solutions**:
1. Test responsive design
2. Check touch events
3. Verify viewport meta tag
4. Test on actual devices
5. Use mobile browser dev tools

## Development Issues

### Hot Reload Not Working

**Problem**: Changes not reflecting with `npm run dev`

**Solutions**:
```bash
# Stop dev server
# Clear Vite cache
rm -rf node_modules/.vite

# Restart dev server
npm run dev
```

### Port Already in Use

**Problem**: "Port 8000 already in use"

**Solutions**:
```bash
# Use different port
php artisan serve --port=8001

# Or kill existing process (Linux/Mac)
lsof -ti:8000 | xargs kill -9

# Windows
netstat -ano | findstr :8000
taskkill /PID <PID> /F
```

## Getting Help

If you can't resolve an issue:

1. Check Laravel logs: `storage/logs/laravel.log`
2. Check browser console for JavaScript errors
3. Enable debug mode: `APP_DEBUG=true` in `.env`
4. Search Laravel documentation
5. Check GitHub issues

### Contact Support

- Email: arpitkishor5647@gmail.com
- Phone: +91 7984821975

### Useful Commands

```bash
# Clear everything
php artisan optimize:clear

# View logs
tail -f storage/logs/laravel.log

# Check Laravel version
php artisan --version

# Check PHP version
php -v

# Check Node version
node -v

# Check npm version
npm -v

# List all routes
php artisan route:list

# Check database connection
php artisan db:show
```

---

Most issues can be resolved by clearing caches and rebuilding assets!
