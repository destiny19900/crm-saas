# Buildera ERP SaaS

<p align="center">
<img src="public/storage/uploads/logo/logo-dark.png" alt="Buildera ERP SaaS" width="200">
</p>

<p align="center">
<a href="https://github.com/destiny19900/crm-saas/blob/main/LICENSE"><img src="https://img.shields.io/badge/license-Proprietary-red" alt="License"></a>
<a href="https://github.com/destiny19900/crm-saas/stargazers"><img src="https://img.shields.io/github/stars/destiny19900/crm-saas" alt="Stars"></a>
<a href="https://github.com/destiny19900/crm-saas/network"><img src="https://img.shields.io/github/forks/destiny19900/crm-saas" alt="Forks"></a>
</p>

## About Buildera ERP SaaS

Buildera ERP SaaS is a comprehensive business management solution that combines Project Management, Accounting, HR, and CRM functionalities in one platform. It helps businesses streamline operations, improve productivity, and make data-driven decisions through real-time insights and analytics.

## Key Features

- **Project Management**
  - Task tracking and management
  - Team collaboration tools
  - Project timeline and milestones
  - Resource allocation
  - Progress monitoring

- **Financial Management**
  - Complete accounting suite
  - Invoice generation and tracking
  - Expense management
  - Financial reporting
  - Cash flow monitoring

- **HR & CRM**
  - Employee management
  - Recruitment tools
  - Performance tracking
  - Customer relationship management
  - Lead and opportunity tracking

- **Business Intelligence**
  - Real-time analytics
  - Customizable dashboards
  - Advanced reporting
  - Data visualization
  - Performance metrics

- **Cloud-Based Solution**
  - Secure data storage
  - Automatic backups
  - Regular updates
  - Cross-device accessibility
  - Enterprise-grade security

## Requirements

- PHP >= 8.0
- MySQL >= 5.7
- Composer
- Node.js & NPM
- Web Server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/destiny19900/crm-saas.git
cd crm-saas
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
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

6. Configure your database in `.env` file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Create storage link:
```bash
php artisan storage:link
```

9. Start the development server:
```bash
php artisan serve
```

## Usage

1. Access the application at `http://localhost:8000`
2. Register a new account or use the demo credentials
3. Configure your company settings
4. Start managing your business operations

## Security

If you discover any security vulnerabilities, please send an email to [security@builderasaas.com](mailto:security@builderasaas.com). All security vulnerabilities will be promptly addressed.

## Support

For support, please email [support@builderasaas.com](mailto:support@builderasaas.com) or visit our [support portal](https://builderasaas.com/support).

## Contributing

We welcome contributions to Buildera ERP SaaS! Please see our [contributing guidelines](CONTRIBUTING.md) for details.

## License

Buildera ERP SaaS is proprietary software. All rights are reserved by Buildera Tech.

This software is NOT open source and requires a valid license for use. To obtain a license:

1. Contact us at [sales@builderasaas.com](mailto:sales@builderasaas.com)
2. Provide details about your intended use
3. Complete our licensing process

For more information, please see our [LICENSE](LICENSE) file.

## Credits

- [Laravel Framework](https://laravel.com)
- [Bootstrap](https://getbootstrap.com)
- [Tabler Icons](https://tabler-icons.io)
- [All Contributors](../../contributors)
