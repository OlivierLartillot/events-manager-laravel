<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Events</h1>
    <p> 
        @if ($events->count()) > 1)  
         Il y a {{ $events->count() }} événements programmés 
        @else
         Il y a {{ $events->count() }} événement programmé
        @endif 
    </p>

    @foreach($events as $event) 
        <article>
            <h1>{{ $event->name }}</h1>
            <p>{{ $event->description }}</p>
            <p> {!! format_price($event) !!}
                </p>
            <p>Lieu: {{ $event->location }}</p>
            <p>Date avec l'objet DateTime: {{ (new DateTime ($event->starts_at))->format('j/m/Y H:i') }}</p>
            <p>Date avec Carbon, et propriétés $dates dans le modèle: {{ $event->starts_at->format('d/m/Y H:i') }}</p>
            <p>Date avec Helpers.php: {{ format_date($event->starts_at) }}</p>
            <p>Date avec Helpers CLASS: {{ EventsHelper::formatDate($event->starts_at) }}</p>
        </article>
        @if (! $loop->last)
        <hr>
        @endif
    @endforeach


</body>
</html>