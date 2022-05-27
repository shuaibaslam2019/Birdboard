<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        
        <h1>Birdboard</h1>
        <ul>

            @foreach ( $projects as $item )
                <li>
                    {{$item->title}}
                    {{$item->description}}
                </li>
            @endforeach

        </ul>
       
    </body>
</html>
