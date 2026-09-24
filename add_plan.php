<!DOCTYPE html>
<html>
<head>
    <title>Add Study Plan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h3>Add Study Plan</h3>

        <form action="save_plan.php" method="POST">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>

            <label class="mt-2">Subject</label>
            <input type="text" name="subject" class="form-control" required>

            <label class="mt-2">Time Slot</label>
            <input type="text" name="time" class="form-control" placeholder="e.g. 6pm - 8pm" required>

            <label class="mt-2">Notes</label>
            <textarea name="notes" class="form-control"></textarea>

            <button class="btn btn-primary mt-3">Save Plan</button>
        </form>
    </div>
</div>

</body>
</html>