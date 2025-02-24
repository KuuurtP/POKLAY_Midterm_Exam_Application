<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f0f2f5;
        color: #333;
        margin: 2em;
        text-align: center;
        }
        
        .Title{
            font-weight: bold;
        }
        
        .movie-title {
            font-weight: bold;
        }
        h1 {
        margin-bottom: 20px;
        }
        
        .table-container {
        display: inline-block;
        text-align: left;
        width: 80%;
        max-width: 800px;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        }

        th, td {
        padding: 12px 15px;
        text-align: left;
        }
        th {
        background-color:rgb(71, 93, 221);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        }

    </style>
</head>
<body>
    <h1>Movie List</h1>
    <div class="table-container">
        <table>
        <thead>
            <tr>
            <th class="Title">Title</th>
            <th>Year</th>
            <th>Director</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
            <td class="movie-title">{{ $movie['title'] }}</td>
            <td>{{ $movie['year'] }}</td>
            <td>{{ $movie['director'] }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>
