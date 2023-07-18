<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach ($navItems as $item)
                <li>
                    <a href="{{ route($item) }}">{{ $item }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>

</body>
</html>