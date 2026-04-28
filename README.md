# Smart Head Kazakhstan Test Project

This is a Laravel project set up with Docker for development.

## Prerequisites

- Docker and Docker Compose
- Node.js and npm (for running helper scripts)

## Getting Started

Follow these steps to set up the project locally:

### 1. Clone the repository

```bash
git clone <repository-url>
cd Test-project-for-Smart-Head-Kazakhstan
```

### 2. Prepare environment variables

```bash
cp .env.example .env
```

### 3. Start Docker containers

```bash
npm run docker:up
```

This will start the PHP, Nginx, and Node containers.

### 4. Initialize the project

Run the initialization script to install dependencies, generate the application key, and run migrations:

```bash
npm run docker:init
```

### 5. Start Development Server (Vite)

To start the Vite development server with Hot Module Replacement (HMR):

```bash
npm run docker:dev
```

*Note: There is a 5-second delay built into this command to ensure containers are ready.*

## Available Scripts

Defined in `package.json`:

- `npm run docker:up`: Start containers.
- `npm run docker:down`: Stop containers.
- `npm run docker:build`: Build and start containers.
- `npm run docker:init`: Install Composer/NPM dependencies, generate app key, and run migrations.
- `npm run docker:migrate`: Run database migrations.
- `npm run docker:seed`: Run database seeders.
- `npm run docker:dev`: Run Vite dev server inside the container.
- `npm run build_front`: Build assets for production.

## Troubleshooting

- **Permissions:** If you encounter permission issues with the `storage` or `bootstrap/cache` directories, you might need to adjust them:
  ```bash
  docker exec smarthead_php chmod -R 775 storage bootstrap/cache
  docker exec smarthead_php chown -R www-data:www-data storage bootstrap/cache
  ```
- **Port Conflicts:** The project uses port `8000` for Nginx and `5173` for Vite. Ensure these ports are available on your host machine.
