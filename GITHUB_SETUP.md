# GitHub Setup Guide

## Step-by-Step: Upload to GitHub

### Prerequisites
- Git installed on your computer
- GitHub account (create at https://github.com)

### Step 1: Check Git Installation

Open terminal/command prompt:
```bash
git --version
```

If not installed, download from: https://git-scm.com

### Step 2: Configure Git (First Time Only)

```bash
git config --global user.name "Arpit Kishor"
git config --global user.email "arpitkishor5647@gmail.com"
```

### Step 3: Initialize Git Repository

```bash
cd arpit-portfolio
git init
```

### Step 4: Add All Files

```bash
git add .
```

### Step 5: Create First Commit

```bash
git commit -m "Initial commit: Portfolio website ready"
```

### Step 6: Create GitHub Repository

1. Go to https://github.com
2. Click the "+" icon (top right)
3. Click "New repository"
4. Fill in:
   - Repository name: `portfolio` or `arpit-portfolio`
   - Description: "My professional portfolio website"
   - Keep it Public (so recruiters can see)
   - DON'T check "Initialize with README"
5. Click "Create repository"

### Step 7: Connect to GitHub

Copy the commands GitHub shows, or use these:

```bash
git remote add origin https://github.com/YOUR_USERNAME/portfolio.git
git branch -M main
git push -u origin main
```

**Replace `YOUR_USERNAME` with your actual GitHub username!**

### Step 8: Verify Upload

1. Refresh your GitHub repository page
2. You should see all your files!

## Common Issues & Solutions

### Issue: "Permission denied"
**Solution**: Set up SSH key or use personal access token
```bash
# Use HTTPS with token instead
git remote set-url origin https://YOUR_TOKEN@github.com/YOUR_USERNAME/portfolio.git
```

### Issue: "Repository not found"
**Solution**: Check the URL is correct
```bash
git remote -v  # Check current remote
git remote set-url origin CORRECT_URL
```

### Issue: Files too large
**Solution**: Check .gitignore includes:
```
/node_modules
/vendor
```

## Update Portfolio Later

After making changes:

```bash
git add .
git commit -m "Updated portfolio content"
git push
```

## Next Steps

After GitHub upload:
1. ✅ Your code is backed up
2. ✅ Ready to deploy to Railway/Heroku/Vercel
3. ✅ Recruiters can see your code

**Continue to DEPLOY_TO_NETLIFY.md for deployment!**
