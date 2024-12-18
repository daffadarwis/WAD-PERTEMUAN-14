<html>
    <head>
        <title>Register</title>
        <meta name="csrf-token" content="{{ csrf_token()  }}">
    
    </head>

    <body>

    <form action="{{ route('auth.store') }}" method="POST">
        @csrf

        <div action="{{ route('auth.store') }}" method="POST">
            <h1 class="h3">Register</h1>
        </div>

        <div class="col-sm-8 mt-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>

        
