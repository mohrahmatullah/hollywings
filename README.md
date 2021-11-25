Please make sure it is connected to the internet

### Project install
		
		git clone https://gitlab.com/mohrahmatullah/hollywings
		composer install
### Cache clear
		
		php artisan config:cache
		
### If Use Docker
		
		docker exec -it container_id bash


### If use linux

		php artisan route:clear
		php artisan config:clear
		php artisan cache:clear
		chmod -R 777 storage
		chmod -R 777 bootstrap/cache

### Run project
		
		php artisan serve
		  
