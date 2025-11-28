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
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Edit Task</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('task.update',$task->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Task Name</label>
                        <input type="text" class="form-control" value="{{ $task->task_name }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" value="{{ $task->task_date }}">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="status" id="taskStatusEdit"
                            {{ $task->status ? 'checked' : '' }}>
                        <label class="form-check-label" for="taskStatusEdit">Completed?</label>
                    </div>

                    <button class="btn btn-warning">Update Task</button>
                    <a href="/" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
