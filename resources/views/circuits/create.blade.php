<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
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

.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="#555" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"><path d="M7 10l5 5 5-5z"></path></svg>'); /* Add custom arrow */
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 18px;
}

.form-group select:hover {
    border-color: #999999;
}

.form-group select:focus {
    border-color: #666666;
}
/* Style for select dropdown */
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    outline: none;
    appearance: none; /* Remove default arrow */
    -webkit-appearance: none; /* Remove default arrow for Safari */
    background-image: url('data:image/svg+xml;utf8,<svg fill="#555" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"><path d="M7 10l5 5 5-5z"></path></svg>'); /* Add custom arrow */
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 18px;
}

/* Hover style for select dropdown */
.form-group select:hover {
    border-color: #999999;
}

/* Focus style for select dropdown */
.form-group select:focus {
    border-color: #666666;
}
</style>
</head>
<body>
    <div class="form-container">
        <h1>Create Circuit</h1>
        <form action="{{ route('circuits.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="photos">Photos:</label>
                <input type="file" id="photos" name="photos" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="descreption" name="descreption" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="guide">Guide:</label>
                <select id="guide_id" name="guide_id" required>
                    @foreach($guides as $guide)
                        <option value="{{ $guide->id }}">{{ $guide->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="destination">Destination:</label>
                <select id="distination_id" name="distination_id" required>
                    @foreach($distinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
