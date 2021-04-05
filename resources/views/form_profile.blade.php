<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form_profile.css" type="text/css">
    <title>Profile Form</title>
</head>
<body>
    <form action="{{ route('addprofile') }}" method="POST" enctype="multipart/form-data"> 
        {{ csrf_field() }}
        <div class="segment">
            <h1>Profile</h1>
        </div>
        <label>
            <input type="text" name="name" placeholder="Name"/>
        </label>
        <label>
            <input type="text" name="surname" placeholder="Surname"/>
        </label>
        <label>
            <input type="text" name="email" placeholder="Email"/>
        </label>
        <label>
            <input type="file" name="photo" class="file-input">
        </label>
        <button class="red" type="submit"><i class="icon ion-md-lock"></i>Submit</button>
    </form>
</body>
</html>