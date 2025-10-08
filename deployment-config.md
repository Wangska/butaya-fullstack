# Deployment Configuration

## Environment Variables for Coolify

Set these environment variables in your Coolify deployment:

### Database Configuration
```
DB_HOST=your-database-host
DB_NAME=your-database-name
DB_USER=your-database-user
DB_PASS=your-database-password
```

### Application Configuration
```
APP_ENV=production
APP_URL=https://your-domain.com
```

## Database Setup

1. Create a MySQL database
2. Import the `bill_splitter.sql` file or let the application create tables automatically
3. Make sure the database user has proper permissions

## Common Issues and Solutions

### "Unexpected token '<', "<html> <h"... is not valid JSON"

This error occurs when the server returns HTML instead of JSON. Common causes:

1. **Database connection issues** - Check your database credentials
2. **PHP errors** - Check server error logs
3. **Missing dependencies** - Ensure all PHP extensions are installed
4. **File permissions** - Ensure PHP can read all files

### Debugging Steps

1. Check server error logs
2. Verify database connection
3. Test API endpoints directly
4. Check PHP error reporting settings

## Production Checklist

- [ ] Set `APP_ENV=production`
- [ ] Configure database credentials
- [ ] Set up proper error logging
- [ ] Enable HTTPS
- [ ] Set secure session cookies
- [ ] Test all functionality
