{{-- resources/views/emails/contact.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <h1>New Contact Message</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong> {{ $message }}</p>
</body>
</html>
