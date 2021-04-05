<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->name }}</title>
 
</head>
<body>
    <div class="profile-container">
        <div class="info">
           <p>{{ $profile->name }}</p>
            <p>{{ $profile->surname }}</p>
            <p>{{ $profile->email }}</p> 
        </div>
        <div class="image">
            <img src="{{ url('uploads/'.$profile->photo) }}" alt="Profile Photo">
        </div>
    </div>
</body>
</html>