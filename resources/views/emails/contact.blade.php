<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>

<h3>Nuevo mensaje de contacto</h3>

<p><strong>Nombre:</strong> {{ $request->get('name') }}</p>
<p><strong>Fecha:</strong> {{ date('d-m-Y H:i:s') }}</p>
<p><strong>Correo electrónico:</strong> {{ $request->get('email') }}</p>
<p><strong>Asunto:</strong> {{ $request->get('subject') }}</p>
<p><strong>Mensaje:</strong></p> 
<p>{{ $request->get('message') }}</p>
    
</body>
</html>