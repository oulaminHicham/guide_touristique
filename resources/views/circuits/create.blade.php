<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Circuit</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 90px;
            width: 800px;
            max-width: 100%;
        }

        .form-container h1 {
            text-align: center;
            color: #333333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #555555;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            outline: none;
        }

        .form-group textarea {
            height: 100px;
            resize: none;
        }

        .form-group button[type="submit"] {
            background-color: #bc8643;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        .form-group button[type="submit"]:hover {
            background-color: #6a4224;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create Circuit</h1>
        <form action="{{ route('circuits.store') }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="photos">Photos:</label>
                <input type="file" id="photos" name="photos" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="descreption" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">prix:</label>
                <input type="number" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="guide_id">Guide ID:</label>
                <input type="number" id="guide_id" name="guide_id" required>
            </div>
            <div class="form-group">
                <label for="destination_id">Destination ID:</label>
                <input type="number" id="distination_id" name="distination_id" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
