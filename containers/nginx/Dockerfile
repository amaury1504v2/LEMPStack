FROM nginx:1.23.1

# Copy the public directory
COPY ./src/ /app/public/

# Copy the nginx config file
COPY ./containers/nginx/nginx.conf /etc/nginx/conf.d/default.conf