<!DOCTYPE html>
<html>
<head>
    <title>View Study Plans</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">📅 My Study Plans</h2>
    <a href="index.php" class="btn btn-secondary mb-3">Back</a>

    <?php
    $plans = json_decode(file_get_contents("data/plans.json"), true);

    if (empty($plans)) {
        echo "<p>No study plans added yet.</p>";
    }

    foreach ($plans as $p) {
        echo "
        <div class='card mb-3 shadow'>
            <div class='card-body'>
                <h5>{$p['subject']}</h5>
                <p><b>Date:</b> {$p['date']}</p>
                <p><b>Time:</b> {$p['time']}</p>
                <p><b>Notes:</b> {$p['notes']}</p>
            </div>
        </div>";
    }
    ?>
</div>

</body>
</html>