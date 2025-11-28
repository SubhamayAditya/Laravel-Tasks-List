<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        .table thead {
            background: #0d6efd;
            color: #fff;
        }

        .status-box {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .pending {
            background: #ffc1072e;
            color: #b58100;
        }

        .completed {
            background: #28a7452e;
            color: #1d7c32;
        }
    </style>
</head>

<body>
    @session('success')
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endsession

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold">Task List</h2>
            <a href="{{ route('addtask') }}" class="btn btn-primary text-white">+ Add Task</a>
        </div>

        <table class="table table-bordered table-hover shadow-sm">
            <thead>
                <tr>
                    <th width="60">ID</th>
                    <th>Task Name</th>
                    <th>Date</th>
                    <th width="200">Status</th>
                    <th width="150">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->task_date }}</td>
                        <td>
                            @if ($task->status == 1)
                                <span class="status-box completed">Completed</span>
                            @else
                                <span class="status-box pending">Pending</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning"><a href="{{ route('task.edit',$task->id) }}">Edit</a></button>
                            <form action="{{ route('task.edit', $task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>



    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
