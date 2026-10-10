<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Task</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="date"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #28a745; border: none; border-radius: 4px; color: white; font-size: 16px; cursor: pointer; }
        .cancel-btn { display: block; text-align: center; margin-top: 10px; color: #6c757d; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Add New Task</h2>
        <form action="/tasks/create" method="post">
            <div class="form-group">
                <label>Task Title:</label>
                <input type="text" name="title" required placeholder="Enter task title">
            </div>
            <div class="form-group">
                <label>Task Date:</label>
                <input type="date" name="task_date" required value="<?= date('Y-m-d') ?>">
            </div>
            <button type="submit">Save Task</button>
            <a href="/tasks" class="cancel-btn">Cancel</a>
        </form>
    </div>
</body>
</html>