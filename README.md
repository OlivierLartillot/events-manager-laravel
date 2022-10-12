# events-manager-laravel
A simple app to handle events with laravel


## commandes intéressantes :
* <u>création / modification de tables :</u>

Cela crée égalementt le fichier de migration.
```shell
php artisan make:migration create_events_table --create=events
php artisan make:migration create_events_table --table=events
```
* <u>migration :</u>
```shell
php artisan migrate 
```

* <u>Créer le modèle + migration en 1 seule commande !:</u>
```shell
php artisan make:model Event -m  
```
=> -m va créer la migration events associé a Event pour la db !


