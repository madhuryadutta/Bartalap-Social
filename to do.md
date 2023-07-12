php artisan make:migration create_relations_table
php artisan make:controller HomeController
php artisan make:controller PostController
php artisan make:controller ConnectionRequestController
php artisan make:controller ViewPeopleController
php artisan make:controller HomePageController 
php artisan make:controller MessageController 
php artisan make:controller PostReactionAndCommentController 
php artisan make:migration create_comments_table
php artisan make:model PublicProfile


filesyetm in config

public_path('AlphaStorage') => storage_path('app/uploads'),

php artisan storage:link

https://medium.com/@akbartukhtamurotov/how-to-deploy-a-laravel-application-with-gitlab-ci-cd-b6de8aa6a611




mcmztsfdltfsidyo


MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=i.madhuryadutta@gmail.com
MAIL_PASSWORD=mcmztsfdltfsidyo
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="i.madhuryadutta@gmail.com"
MAIL_FROM_NAME="Bartalap"
