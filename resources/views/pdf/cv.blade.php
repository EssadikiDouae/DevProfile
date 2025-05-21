<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CV de {{ $user->name }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 30px;
            line-height: 1.6;
            color: #333;
        }
        h1, h2, h3 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
        p {
            margin-bottom: 15px;
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }
        li {
            margin-bottom: 5px;
        }
        .section {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->title }}</h2>
    <p>{{ $user->bio }}</p>

    <div class="section">
        <h3>📁 Projets</h3>
        <ul>
            @forelse ($user->projects as $project)
                <li>
                    <strong>{{ $project->title }}</strong><br>
                    {{ $project->description }}<br>
                    @if ($project->link)
                        🔗 <a href="{{ $project->link }}">{{ $project->link }}</a>
                    @endif
                </li>
            @empty
                <li>Aucun projet disponible.</li>
            @endforelse
        </ul>
    </div>

    <div class="section">
        <h3>🛠 Compétences</h3>
        <ul>
            @forelse ($user->skills as $skill)
                <li>{{ $skill->name }}</li>
            @empty
                <li>Aucune compétence ajoutée.</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
