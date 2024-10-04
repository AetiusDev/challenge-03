<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <body>
        @foreach ($mains as $main)
            <article>
                <div>Main: {{ $main->name }}</div>
                <div>One: {{ $main->one->name }}</div>
                <div>Manies: </div>
                <ul>
                    @foreach ($main->manies as $many)
                        <li>{{ $many->name }}</li>
                    @endforeach
                </ul>
                
            </article>
        @endforeach
    </body>
</html>
