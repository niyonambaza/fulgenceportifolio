FROM wordpress:php8.2-apache

# Render requires listening on port 10000
ENV PORT 10000
EXPOSE 10000

# Change Apache port to 10000
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf