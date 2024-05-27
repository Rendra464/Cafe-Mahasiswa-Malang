<!DOCTYPE html>
<html>
<head>
    <title>Rate Coffee</title>
</head>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('coffee.rating', $coffee->id) }}" method="POST">
        @csrf
        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
