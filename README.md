# Guide to Initialize the Project Locally

### 1- Prerequisites
Make sure to have PHP, Composer, Node.js, NPM, Git, and a database manager installed.

### 2- Clone the Repository
```
git clone https://github.com/your-username/project-name.git
cd project-name
```

### 3- Install PHP Dependencies:
```
composer install
```

### 4- Install Node.js Dependencies:
```
npm install
```

### 5- Configure the .env File (Copy the example environment file and rename it):
```
cp .env.example .env
```

### 6- Generate the Laravel Application Key:
```
php artisan key:generate
```

### 7- Run Migrations and Seeders:
```
php artisan migrate --seed
```

### 8- Compile CSS and JavaScript Files:
```
npm run dev
```

### 9- Start the Laravel Development Server:
```
php artisan serve
```

### 9- Access the Project at http://localhost:8000 or your custom URL.