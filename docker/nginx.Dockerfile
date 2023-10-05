# Use the official Nginx image
FROM nginx:latest

# Remove the default Nginx configuration
RUN rm /etc/nginx/conf.d/default.conf

# Copy your Nginx configuration file
COPY nginx/nginx.conf /etc/nginx/conf.d/

# Set working directory
WORKDIR /var/www/html

# Expose port
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
