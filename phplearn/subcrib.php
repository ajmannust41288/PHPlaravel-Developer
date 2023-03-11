<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="demo/htmlcodes/style.css">
    <title>PHP Form Demo</title>
</head>
<body>
    <main>
        <form action="form.php" method="post">
            <div>
                <label for="name" id="name">Name:</label>
                <input type="text" name="name" id="name" required="required" placeholder="Enter your name" />
            </div>
            <div>
                <label for="password" id="password">Password</label>
                <input type="password" name="password" id="password" required="Required"
                 placeholder="Enter your password"/>
            </div>

            <div>
                <label for="email" id="email">Email:</label>
                <input type="email" name="email" id="email" required="required" placeholder="Enter your email" />
            </div>

            <button type="submit">Subscribe</button>
        </form>
    </main>
</body>
</html>