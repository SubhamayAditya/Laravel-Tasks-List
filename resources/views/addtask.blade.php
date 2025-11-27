<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Add New Task</h5>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('task.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Task Name</label>
                        <input type="text" class="form-control" placeholder="Enter task name" name="task_name">
                        @error('task_name')
                            <div class="error" style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="taskStatus" name="status">
                        <label class="form-check-label" for="taskStatus">Completed?</label>
                        
                    </div>

                    <button class="btn btn-primary text-white">Save Task</button>
                </form>

                <a href="/" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

</body>

</html>
