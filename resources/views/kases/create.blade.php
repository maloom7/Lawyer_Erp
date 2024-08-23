<!-- resources/views/kases/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create New Case</title>
</head>
<body>
    <h1>Create New Case</h1>
    
    <form action="{{ route('kases.store') }}" method="POST">
        @csrf
        <label for="Kase_number">Case Number:</label>
        <input type="text" id="Kase_number" name="Kase_number"><br>

        <label for="Kase_type">Case Type:</label>
        <input type="text" id="Kase_type" name="Kase_type"><br>

        <!-- باقي الحقول المطلوبة -->

        <button type="submit">Create Case</button>
    </form>
</body>
</html>
