<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/form">ajouter</a>
    <table>
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announces as $announce )
            
            <tr>
                <td>{{ $announce->title }}</td>
                <td>{{ $announce->description }}</td>
                <td>
                    <a href="">modifier</a>    
                    <a href="">delete</a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>