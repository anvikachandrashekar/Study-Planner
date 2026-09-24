<!DOCTYPE html>
<html>
<head>
    <title>Study Planner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef1f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }

        .card h3 {
            margin-top: 0;
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #2980b9;
        }

        footer {
            text-align: center;
            padding: 10px;
            color: #777;
        }
    </style>
</head>

<body>

<header>
    <h1>📘 Study Planner</h1>
    <p>Plan your study time effectively</p>
</header>

<div class="container">

    <div class="card">
        <h3>Add New Study Plan</h3>
        <p>Create a new plan for your daily study schedule.</p>
        <a href="add_plan.php">Add Plan</a>
    </div>

    <div class="card">
        <h3>View Study Plans</h3>
        <p>Check all your saved study plans.</p>
        <a href="view_plan.php">View Plans</a>
    </div>

</div>

<footer>
    <p>Study Planner Project</p>
</footer>

</body>
</html>