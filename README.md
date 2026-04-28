# Project Setup and Run Guide

This project is a Laravel application running in a Dockerized environment with Nginx, PHP-FPM, and Node (Vite).

## Prerequisites

- Docker and Docker Compose installed.

## Getting Started

You can start the project with a single command:

```bash
npm run start
```

This command will:
1. Create your `.env` file if it doesn't exist.
2. Create the SQLite database file.
3. Build and start the Docker containers.
4. Install composer dependencies.
5. Generate the Laravel application key.
6. Run database migrations and seeders.

### Manual Setup (Alternative)
If you prefer to run the steps manually:

### 1. Environment Configuration
Copy the example environment file to create your local `.env` file:
```bash
cp .env.example .env
```

### 2. Database Initialization
This project uses SQLite by default. Ensure the database file exists:
```bash
touch database/database.sqlite
```

### 3. Start Docker Containers
Build and start the services in detached mode:
```bash
docker compose up -d --build
```

### 4. Application Setup
Run the following commands inside the PHP container to initialize the Laravel application:

- **Generate Application Key:**
  ```bash
  docker exec smarthead_php php artisan key:generate
  ```

- **Run Migrations and Seeders:**
  ```bash
  docker exec smarthead_php php artisan migrate --seed
  ```

### 5. Access the Application
Once the containers are running and the setup is complete:
- **Web Application:** [http://localhost:8000](http://localhost:8000)
- **Vite Dev Server:** [http://localhost:5173](http://localhost:5173) (handled automatically by the `node` container)

## Docker Services

- **smarthead_php:** PHP 8.4-fpm environment.
- **smarthead_nginx:** Nginx server listening on port 8000.
- **smarthead_node:** Node 20 environment running Vite for frontend assets.

## Stopping the Project
To stop all services:
```bash
docker compose down
```
