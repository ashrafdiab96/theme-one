<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Message</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }
        html,
        body {
            width: 100%;
            height: 100%;
        }
        .custom-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 90%;
            margin: auto;
        }
        .custom-row {
            width: 100%;
        }
        .custom-card {
            border: 1px solid #e0e0e0;
            width: 100%;
        }
        .custom-card-header {
            background-color: #444;
            color: #fff;
            padding: 10px;
        }
        .custom-card-body {
            padding: 10px;
        }
    </style>

</head>
<body>
    <div class="custom-container">
        <div class="custom-row">
            <div class="custom-card">
                <div class="custom-card-header">
                    <h3>{{ $message->name }}</h3>
                </div>
                <div class="custom-card-body">
                    <p>Phone: {{ $message->phone }}</p>
                    <p>Email: {{ $message->email }}</p>
                    <br>
                    <p>{{ $message->message }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
