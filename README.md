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

## Utilisation des collections 

=> Utiliser les collections est mieux pour éviter de faire plusieurs requêtes à la bdd quand on le peut !!!
aussi si on récupère toutes les occurences 

```php
$monTableau = Event::all()
```
dans la vue si on utilise php on refait une requête 
```php
count($monTableau)
```
ALORS QUE SI ON UTILISE les collections 
```php
$montableau->count()
```

## Les Helpers

Le Helper nous permet de créer une fonction et de l'utiliser directement dans le template par exemple ! trop cool.

* il faut créer le fichier (ex: helper.php)
* rajouter ce fichier au niveau de l'autoload (composer.json)
* exécuter le composer dump-autoload


