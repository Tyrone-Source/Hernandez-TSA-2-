<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f7f6; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        .card { 
            background: #ffffff; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
            width: 100%; 
            max-width: 400px; 
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group { 
            margin-bottom: 15px; 
        }
        label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
        }
        input[type="text"], input[type="date"] { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            box-sizing: border-box; 
        }
        button { 
            width: 100%; 
            padding: 10px; 
            background-color: #ffc107; 
            border: none; 
            border-radius: 4px; 
            color: #212529; 
            font-size: 16px; 
            font-weight: bold;
            cursor: pointer; 
        }
        button:hover {
            background-color: #e0a800;
        }
        .cancel-btn { 
            display: block; 
            text-align: center; 
            margin-top: 10px; 
            color: #6c757d; 
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Task #<?= esc($task['id']) ?></h2>
        <form action="/tasks/update/<?= esc($task['id']) ?>" method="post">
            <div class="form-group">
                <label>Task Title:</label>
                <input type="text" name="title" required value="<?= esc($task['title']) ?>">
            </div>
            <div class="form-group">
                <label>Task Date:</label>
                <input type="date" name="task_date" required value="<?= esc($task['task_date']) ?>">
            </div>
            <button type="submit">Update Task</button>
            <a href="/tasks" class="cancel-btn">Cancel</a>
        </form>
    </div>
</body>
</html>