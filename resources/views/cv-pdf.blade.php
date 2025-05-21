<!DOCTYPE html>
<html>
<head>
    <title>CV de {{ $user->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        h2 { color: #555; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->title }}</h2>
    <p>{{ $user->bio }}</p>

    <h3>Projets</h3>
    <ul>
        @foreach ($user->projects as $project)
            <li><strong>{{ $project->title }}</strong>: {{ $project->description }}</li>
        @endforeach
    </ul>

    <h3>Compétences</h3>
    <ul>
        @foreach ($user->skills as $skill)
            <li>{{ $skill->name }}</li>
        @endforeach
    </ul>
</body>
</html>
