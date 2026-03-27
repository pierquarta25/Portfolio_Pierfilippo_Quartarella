<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Nuovo messaggio</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #222;">
    <h2>Nuovo messaggio dal sito</h2>
    <p><strong>Nome:</strong> {{ $contactMessage->name ?? '—' }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $contactMessage->message }}</p>
    <hr>
    <p style="font-size: 12px; color: #666;">
        IP: {{ $contactMessage->ip_address ?? '—' }}<br>
        User Agent: {{ $contactMessage->user_agent ?? '—' }}
    </p>
</body>
</html>
