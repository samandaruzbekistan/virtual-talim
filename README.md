# Virtual Talim - Online Learning Platform

A modern online learning platform built with Laravel and Filament, designed to provide interactive educational content with sections, lessons, and quizzes.

## 🚀 Features

- **Section Management**: Organize content into logical sections with titles, names, and images
- **Lesson System**: Create detailed lessons with rich content and embedded quizzes
- **Quiz Integration**: Interactive quizzes stored as JSON for flexible question formats
- **Admin Panel**: Beautiful Filament-based admin interface for content management
- **Responsive Design**: Modern, mobile-friendly frontend with Bootstrap
- **User Authentication**: Secure user management system
- **Media Support**: Image uploads and multimedia content support

## 🛠️ Technology Stack

- **Backend**: Laravel 10.x (PHP 8.1+)
- **Admin Panel**: Filament 3.3
- **Frontend**: Bootstrap 5, jQuery, SCSS
- **Build Tool**: Vite
- **Database**: MySQL/PostgreSQL/SQLite
- **Authentication**: Laravel Sanctum

## 📋 Prerequisites

Before running this project, make sure you have the following installed:

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL/PostgreSQL/SQLite database
- Web server (Apache/Nginx) or Laravel's built-in server

## 🔧 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd virtual-talim-new
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=virtual_talim
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

## 🗄️ Database Structure

### Sections Table
- `id` - Primary key
- `title` - Section title
- `name` - Section name
- `image` - Section image path
- `created_at`, `updated_at` - Timestamps

### Lessons Table
- `id` - Primary key
- `title` - Lesson title
- `body` - Lesson content (long text)
- `quiz` - Quiz data (JSON format)
- `section_id` - Foreign key to sections table
- `created_at`, `updated_at` - Timestamps

## 🎯 Usage

### Admin Panel Access
1. Navigate to `/admin` in your browser
2. Create an admin user or use the default credentials
3. Manage sections and lessons through the intuitive Filament interface

### Creating Content
1. **Sections**: Create sections to organize your content
2. **Lessons**: Add lessons within sections with rich content
3. **Quizzes**: Embed interactive quizzes in lessons using JSON format

### Frontend
- The main application is accessible at the root URL
- Responsive design works on all devices
- Interactive elements with smooth animations

## 🚀 Deployment

### Production Build
```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Variables
Make sure to set the following in production:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL` - Your production URL
- Database credentials
- Mail configuration

## 📁 Project Structure

```
virtual-talim-new/
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/Controllers/       # Application controllers
│   └── Models/                 # Eloquent models
├── database/
│   ├── migrations/             # Database migrations
│   └── seeders/                # Database seeders
├── public/                     # Public assets
├── resources/
│   └── views/                  # Blade templates
└── routes/                     # Application routes
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🐛 Troubleshooting

### Common Issues

1. **Composer dependencies not installing**
   ```bash
   composer install --ignore-platform-reqs
   ```

2. **Permission issues on storage/logs**
   ```bash
   chmod -R 775 storage/
   chmod -R 775 bootstrap/cache/
   ```

3. **Vite build issues**
   ```bash
   npm install
   npm run build
   ```

## 📞 Support

If you encounter any issues or have questions, please:

1. Check the [Laravel documentation](https://laravel.com/docs)
2. Review the [Filament documentation](https://filamentphp.com/docs)
3. Open an issue in the repository

---

## 👨‍💻 Developer

### Samandar Sariboyev

- [Telegram](https://t.me/Samandar_developer)
- [Email](mailto:samandarsariboyev@gmail.com)
- [LinkedIn](https://www.linkedin.com/in/samandar-sariboyev-1420b7213/)
- [YouTube](https://www.youtube.com/@samandar_sariboyev)

---

**Built with ❤️ using Laravel and Filament**
