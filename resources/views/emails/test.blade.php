<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 2rem;
            border-radius: 4px 4px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .content {
            background-color: #fff;
            border-radius: 0 0 4px 4px;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            margin: 0;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .content p {
            color: #333;
            font-size: 1.1rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Welcome, User!</h1>
    </div>
    <div class="content">
        <h2>{{ $data['title'] }}</h2>
        <p>{{ $data['content'] }}</p>
    </div>
</div>
</body>
</html>