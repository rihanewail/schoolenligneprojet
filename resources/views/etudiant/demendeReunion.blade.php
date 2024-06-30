<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enhanced Registration Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="time"],
        .form-group input[type="date"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="time"]:focus,
        .form-group input[type="date"]:focus,
        .form-group input[type="number"]:focus
{
            border-color: #007bff;
            outline: none;
        }

        .form-group input[type="checkbox"] {
            margin-right: 10px;
        }

        .form-group label.checkbox-label {
            display: flex;
            align-items: center;
        }

        button[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form>
            <div>
                <h1>Demende Plan for Reunion</h1>
            </div>
            <div class="form-group">
                <label for="eventname">Event Name</label>
                <input type="text" id="eventname" name="reunion" required>
            </div>
            <div class="form-group">
                <label for="eventname"> specialiter</label>
                <input type="text" id="eventname" name="specialite" required>
            </div>
            
            <div class="form-group">
                <label for="dateE">Date</label>
                <input type="date" id="dateE" name="dateE" required>
            </div>
            <div class="form-group">
                <label for="duree">Duree</label>
                <input type="time" id="duree" name="duree" required>
            </div>
            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" id="agree" name="agree" required>
                    I agree to the Terms and Conditions
                </label>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
