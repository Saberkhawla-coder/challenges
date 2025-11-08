<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $status === 'create' ? 'Create Booking' : 'Edit Booking' }}</title>
</head>
<body>
    <h1>{{ $status === 'create' ? 'Create Booking' : 'Edit Booking' }}</h1>

    <form 
        action="{{ $status === 'create' ? route('bookings.store') : route('bookings.update', $booking->id) }}" 
        method="POST"
    >
        @csrf
        @if($status === 'update')
            @method('PUT')
        @endif

        {{-- Service selection --}}
        <label for="service_id">Service</label>
        <select name="service_id" id="service_id" required>
            <option value="">-- Select Service --</option>
            @foreach($services as $service)
                <option value="{{ $service->id }}" 
                    {{ (old('service_id') ?? $booking->service_id) == $service->id ? 'selected' : '' }}>
                    {{ $service->title }}
                </option>
            @endforeach
        </select>

        {{-- Date --}}
        <label for="date">Date</label>
        <input type="date" name="date" id="date" 
               value="{{ old('date') ?? $booking->date }}" 
               required>

        {{-- Time --}}
        <label for="time">Time</label>
        <input type="time" name="time" id="time" 
               value="{{ old('time') ?? $booking->time }}" 
               required>

        {{-- Status --}}
        <label for="status">Status</label>
        <input type="text" name="status" id="status" 
               value="{{ old('status') ?? $booking->status }}" 
               required>

        <button type="submit">
            {{ $status === 'create' ? 'Add Booking' : 'Update Booking' }}
        </button>
    </form>
</body>
</html>
