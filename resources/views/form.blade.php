
<!-- ملف resources/views/form.blade.php -->

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إرسال النموذج</title>
</head>
<body>
    <form action="/submit" method="POST">
        @csrf
        <label for="name">الاسم:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">إرسال</button>
    </form>
</body>
</html>
