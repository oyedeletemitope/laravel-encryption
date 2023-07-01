<!DOCTYPE html>
<html>
<head>
    <title>Message Encryption</title>
    <style>
label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.message-container p {
    background-color: #f9f9f9;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    word-wrap: break-word;
}

.form-container {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 4px;
}

    </style>
</head>
<body>
<div class="form-container">
    <h2>Message Encryption</h2>

    @if (session('encryptedMessage'))
        <div class="message-container">
            <h3>Encrypted Message:</h3>
            <p>{{ session('encryptedMessage') }}</p>
        </div>
    @endif

    @if (session('decryptedMessage'))
        <div class="message-container">
            <h3>Decrypted Message:</h3>
            <p>{{ session('decryptedMessage') }}</p>
        </div>
    @endif

    <form action="/encrypt" method="POST">
        @csrf
        <label for="message">Enter Message:</label>
        <input type="text" id="message" name="message">
        <button type="submit">Encrypt</button>
    </form>

    <form action="/decrypt" method="POST">
        @csrf
        <label for="encrypted_message">Enter Encrypted Message:</label>
        <input type="text" id="encrypted_message" name="encrypted_message">
        <button type="submit">Decrypt</button>
    </form>
    </div>
</body>
</html>
