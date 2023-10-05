# Use the official Apache image
FROM ubuntu/apache2

# Set the maintainer label
LABEL maintainer="Ikrar Bagaskara <ikrarb95@gmail.com>"

# Remove the default Apache configuration
RUN rm /etc/apache2/sites-enabled/000-default.conf

# Copy your Apache configuration file
COPY docker/apache2/default.conf /etc/apache2/sites-enabled/default.conf

# Set working directory
WORKDIR /var/www/

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
