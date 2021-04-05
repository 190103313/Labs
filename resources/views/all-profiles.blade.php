<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
    <style>
        table, th, td {
            border: 1px solid black;
            /*border-collapse: collapse;*/
        }
        img {
            width: 130px;
        }
        .profile {
            display: flex;
            border: 1px solid black;
            width: 500px;
            padding: 30px;
            margin: 20px;
        }
        .info {
            margin-right: 60px;
        }
    </style>
</head>
<body>
    @foreach($profiles as $profile)
        <div class="profile">
            <div class="info">
                <table >
                    <tr>
                        <th>Name: </th>
                        <td>{{ $profile->name }}</td>
                    </tr>
                    <tr>
                        <th>Surname: </th>
                        <td>{{ $profile->surname }}</td>                 
                    </tr> 
                    <tr>
                        <th>Email: </th>
                        <td>{{ $profile->email }}</td>
                    </tr>
                </table>
            </div>
            <div class="image">
                <img src="{{ url('uploads/'.$profile->photo) }}" alt="Profile Photo">
            </div>
        </div>
    @endforeach;
</body>
</html>