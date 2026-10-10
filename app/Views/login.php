<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Tasks for Today</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { margin-bottom: 20px; color: #333; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #666; font-weight: bold; }
        input[type="email"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #007bff; border: none; border-radius: 4px; color: white; font-size: 16px; cursor: pointer; margin-top: 10px; }
        button:hover { background-color: #0056b3; }
        .error-msg { color: #dc3545; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 10px; border-radius: 4px; margin-bottom: 15px; text-align: center; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Task Manager Login</h2>
        <?php if(session()->getFlashdata('msg')):?>
            <div class="error-msg"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <form action="/login" method="post">
            <div class="form-group">
                <label>Email Address:</label>
                <input type="email" name="email" required placeholder="tyronehernandez@gmail.com">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>