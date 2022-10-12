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
        @if (count($events) > 1)  
         Il y a {{ count($events) }} événements programmés 
        @else
         Il y a {{ count($events) }} événement programmé
        @endif 
    </p>

    @foreach($events as $event) 
        <article>
            <h1>{{ $event->name }}</h1>
            <p>{{ $event->description }}</p>
            <p>{{ $event->price }}</p>
            <p>Lieu: {{ $event->location }}</p>
        </article>
        @if (! $loop->last)
        <hr>
        @endif
    @endforeach


</body>
</html>