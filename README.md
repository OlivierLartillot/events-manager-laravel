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

## Quelques Mémos et explications dans le modéle

1. Fillable 

Permet de donner les attributs qui sont modifiables !
```php
protected $fillable = ['name', 'description', 'location'];
```

2. Guarded 

Le contraire de fillable ...

3. Dates

Transforme automatiquement la date en un objet Carbon (qui gère les dates)
```php
protected $dates = ['starts_at'];
```

4. Casts
```php
protected $casts = ['starts_at' => 'datetime'];
```

5. Appends

Ajoute un "attribut fictif" à l'objet (par exemple une fonction getFakePriceAttribute).
* Sera disponible en tant qu'attribut lorsqu on attrape "l'objet" ou une collection d'objets 
```php
protected $appends = ['fake_price'];
...
public function getFakePriceAttribute(){
    return $this->attributes['price'] + 100;
}
```

6. Hidden
Le contraire de Appends ... On va cacher un attribut qu'on ne veut pas afficher / recevoir
```php
protected $hidden = ['location'];
```


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

1. Le Helper nous permet de créer une fonction et de l'utiliser directement dans le template par exemple ! trop cool.

* il faut créer le fichier (ex: helper.php)
* rajouter ce fichier au niveau de l'autoload (composer.json)
* exécuter le composer dump-autoload

2. On peut Créer facilement un Helper dans une classe !

* Ranger: créér un dossier (ex: app\Helpers)
* Enregistrer une classe explicite dans ce fichier (EventsHelper.php)
* Enregistrer ce fichier dans le config\app.php
```php
    'aliases' => Facade::defaultAliases()->merge([
        // 'ExampleClass' => App\Example\ExampleClass::class,
        'EventsHelper' => App\Helpers\EventsHelper::class,
    ])->toArray(),
```
* Utiliser dans le template
```php
    {{ EventsHelper::formatDate($event->starts_at) }}
```
## Tinker console 
```bash
php artisan tinker
```
Ouvre une console dans laquelle on peut faire directement des modifs ou rendre une liste etc..
```bash
>>> $evts = App\Event::all()
>>> $e = App\Event::first()
>>> $e->update['price'=>20]
```