## Database Connection

I used my homestead local environment. Please, check your database connection on app\config\parameters.yaml


## Instructions
Please, after git clone, do the following at console:

php bin/console doctrine:schema:update --force

composer require symfony/dom-crawler   
composer require symfony/serializer
composer require symfony/property-access

I created some methods to access data imported, on DefaultController, like:

/people/all

/phones/{personid}

/orders/{personid}


