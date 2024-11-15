<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Attendance Report</h1>

        <form method="GET" action="{{ route('attendance-report') }}">
            <div class="row mb-4">
                <div class="col-md-6">
                    <input type="text" name="student_name" class="form-control" placeholder="Search by student name" value="{{ request('student_name') }}">
                </div>
                <div class="col-md-6">
                    <input type="text" name="course_name" class="form-control" placeholder="Search by course name" value="{{ request('course_name') }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="mt-5">
            <h2>Attendance Report</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Course Name</th>
                        <th>Date</th>
                        <th>Attendance Type</th>
                        <th>Attitude</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studentAttendances as $attendance)
                        <tr>
                            <td>{{ $attendance->student->first_name ?? 'N/A' }} {{ $attendance->student->last_name ?? 'N/A' }}</td>
                            <td>{{ $attendance->attendance->teachingUnitAssignment->teachingUnit->name ?? 'N/A' }}</td>
                            <td>{{ $attendance->attendance->fecha ?? 'N/A' }}</td>
                            <td>{{ $attendance->attendanceType->name ?? 'N/A' }}</td>
                            <td>{{ $attendance->attitude->name ?? 'N/A' }}</td>
                            <td>{{ $attendance->comment ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-5">
            <h2>Attendance Statistics</h2>
            <canvas id="attendanceChart"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Present', 'Absent'],
                datasets: [{
                    data: [
                        {{ $studentAttendances->where('attendance_type_id', 1)->count() }},
                        {{ $studentAttendances->where('attendance_type_id', 2)->count() }}
                    ],
                    backgroundColor: ['#4CAF50', '#F44336'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.raw + ' (' + Math.round(context.raw / context.chart.data.datasets[0].data.reduce((a, b) => a + b) * 100) + '%)';
                                return label;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
