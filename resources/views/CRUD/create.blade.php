<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $status === 'update' ? 'Modifier le service' : 'Créer un service' }}</title>
</head>
<body>
    <h1>{{ $status === 'update' ? 'Modifier le service' : 'Créer un nouveau service' }}</h1>

    <form 
        action="{{ $status === 'update' ? route('services.update', $service->id) : route('services.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
    >
        @csrf
        @if($status === 'update')
            @method('PUT')
        @endif

        <input type="text" name="title" placeholder="Titre" 
               value="{{ old('title', $service->title ?? '') }}"><br><br>

        <input type="text" name="description" placeholder="Description" 
               value="{{ old('description', $service->description ?? '') }}"><br><br>

        <input type="text" name="duration" placeholder="Durée" 
               value="{{ old('duration', $service->duration ?? '') }}"><br><br>

        <input type="number" name="price" placeholder="Prix" step="0.01"
               value="{{ old('price', $service->price ?? '') }}"><br><br>

        <input type="file" name="image"><br><br>

        @if($status === 'update' && !empty($service->image))
            <img src="{{ asset('storage/' . $service->image) }}" width="100" alt="Image du service"><br><br>
        @endif

        <button type="submit">
            {{ $status === 'update' ? 'Mettre à jour' : 'Ajouter' }}
        </button>
    </form>
</body>
</html>
