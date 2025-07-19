FROM laravelsail/php83-composer:latest

# Install system packages and PHP extensions
RUN apt update && apt install -y \
    gnupg2 \
    lsb-release \
    curl \
    libicu-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    ca-certificates \
    && docker-php-ext-install intl pdo_mysql

# Install Node.js (LTS) and npm from NodeSource
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt install -y nodejs

# Optional: install developer tools
RUN apt install -y fish tree

# Optional: set fish as default shell for www-data
RUN chsh -s /usr/bin/fish www-data

# Install Vite CLI globally
RUN npm install -g vite

# Working directory
WORKDIR /var/www/html

# Copy Laravel source
COPY ./src /var/www/html

# Copy and prepare custom entrypoint script
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set file permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose Laravel (8000) and optional mail (465)
EXPOSE 8000

# Boot the app
ENTRYPOINT ["/entrypoint.sh"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
