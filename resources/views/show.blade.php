<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-dark">
                <h5 class="mb-0">Show Task</h5>
            </div>

            <div class="card-body">
                <div class="mb-3">
                     <label class="form-label"><strong>Task Title :</strong> </label>
                    <span>{{ $task->task_name }}</span>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Task Date :</strong> </label>
                    <span>{{ $task->task_date }}</span>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Task Status : </strong></label>
                    @if ($task->status == 0)
                        <span>Pending</span>
                    @else
                        <span>Completed</span>
                    @endif
                </div>
                <a href="/" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
