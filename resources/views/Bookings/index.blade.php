<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Bookings</title>
</head>
<body>
    <a href="{{ route('bookings.create') }}">Add</a>
    <h1>All Bookings</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $item)
                <tr>
                    <td>{{ $item->service->title ?? 'N/A' }}</td>x
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->time }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $item->id) }}">Show</a> |
                        <a href="{{ route('bookings.edit', $item->id) }}">Edit</a> |
                        <form action="{{ route('bookings.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
