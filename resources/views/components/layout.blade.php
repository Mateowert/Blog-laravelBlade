<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default' }}</title>
</head>

<body>
    <x-partials.nav />

    {{ $slot }}

    @isset($sidebar)
        <div>
            <h3>Sidebar</h3>
            <div id="sidebar">{{ $sidebar }}</div>
        </div>
    @endisset

</body>

</html>
