<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today - Home</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f8f9fa; color: #333; line-height: 1.6; }
        header { background-color: #007bff; color: #fff; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        header h1 { font-size: 1.5rem; }
        nav a { color: #fff; text-decoration: none; margin-left: 1.5rem; font-weight: 500; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 900px; margin: 3rem auto; padding: 0 1.5rem; text-align: center; }
        .hero { background: #ffffff; padding: 3rem 2rem; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .hero h2 { font-size: 2rem; margin-bottom: 1rem; color: #007bff; }
        .hero p { font-size: 1.1rem; color: #666; margin-bottom: 2rem; }
        .btn { display: inline-block; background-color: #007bff; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .btn-secondary { background-color: #6c757d; margin-left: 0.5rem; }
    </style>
</head>
<body>
    <header>
        <h1>Tasks for Today</h1>
        <nav>
            <a href="/tasks">Today's Tasks</a>
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
        <div class="hero">
            <h2>Organize Your Daily Schedule Efficiently</h2>
            <p>Keep track of your pending and upcoming tasks easily with our Task Management System.</p>
            <div>
                <a href="/tasks" class="btn">View Today's Tasks</a>
                <?php if(!session()->get('logged_in')): ?>
                    <a href="/login" class="btn btn-secondary">User Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>