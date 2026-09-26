<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - Tasks for Today</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 800px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        nav { margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #eee; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .card { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 6px; }
        .card p { margin: 8px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tasks for Today Management System</h2>
        <nav>
            <a href="/">Today's Tasks</a>
            <a href="/tasks">All Tasks</a>
            <a href="/profile">Profile</a>
            <a href="/about">About Developer</a>
        </nav>

        <h3>Demo User Profile</h3>
        <?php if (!empty($user)): ?>
            <div class="card">
                <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
                <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
                <p><strong>Created At:</strong> <?= esc($user['created_at']) ?></p>
            </div>
        <?php else: ?>
            <p>No user record found.</p>
        <?php endif; ?>
    </div>
</body>
</html>