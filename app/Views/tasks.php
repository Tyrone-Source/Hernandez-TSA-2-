<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Today's Tasks</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f8f9fa; color: #333; }
        header { background-color: #007bff; color: #fff; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        header h1 { font-size: 1.5rem; }
        nav a { color: #fff; text-decoration: none; margin-left: 1.5rem; font-weight: 500; }
        .container { max-width: 900px; margin: 2rem auto; padding: 0 1rem; }
        .action-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
        .btn { background-color: #28a745; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .btn-edit { background-color: #ffc107; color: #212529; padding: 0.3rem 0.6rem; text-decoration: none; border-radius: 4px; margin-right: 5px; }
        .btn-delete { background-color: #dc3545; color: white; padding: 0.3rem 0.6rem; text-decoration: none; border-radius: 4px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f1f1f1; }
    </style>
</head>
<body>
    <header>
        <h1>Tasks for Today</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/profile">Profile</a>
            <a href="/about">About</a>
            <?php if(session()->get('logged_in')): ?>
                <a href="/logout">Logout</a>
            <?php else: ?>
                <a href="/login">Login</a>
            <?php endif; ?>
        </nav>
    </header>
    <div class="container">
        <div class="action-bar">
            <h2>Task List</h2>
            <?php if(session()->get('logged_in')): ?>
                <a href="/tasks/new" class="btn">+ Add New Task</a>
            <?php endif; ?>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Task Date</th>
                    <?php if(session()->get('logged_in')): ?>
                        <th>Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($tasks) && is_array($tasks)): ?>
                    <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?= $task['id'] ?></td>
                            <td><?= esc($task['title']) ?></td>
                            <td><?= esc($task['task_date']) ?></td>
                            <?php if(session()->get('logged_in')): ?>
                                <td>
                                    <a href="/tasks/edit/<?= $task['id'] ?>" class="btn-edit">Edit</a>
                                    <a href="/tasks/delete/<?= $task['id'] ?>" class="btn-delete" onclick="return confirm('Archive this task?')">Delete</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">No active tasks found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>