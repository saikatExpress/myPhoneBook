<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Contact | Phoonebook</title>

    <style>
        .phonebook {
            padding: 10px 12px 10px;
            background-color: #fff;
            width: 50%;
            margin: 0 auto;
        }

        .myForm label {
            padding: 6px 8px 6px;
            margin: 5px 5px 5px;
            font-size: 18px;
        }

        .myForm input[type="text"] {
            width: 90%;
            padding: 10px 12px 10px;
            margin: 5px 5px 5px;
        }

        .myForm input[type="submit"] {
            width: 120px;
            margin: 5px 5px 5px;
            padding: 10px 12px 10px;
            background-color: darkblue;
            border: none;
            cursor: pointer;
            color: #fff;
            border-radius: 4px;
        }
    </style>

</head>

<body>
    <div class="phonebook">
        <div class="contact_list">
            <h2>Add Contact</h2>
        </div>
        <div class="myForm">
            <form action="{{ route('create-contact') }}" method="post" style="width:100%">
                @csrf
                <label for="name">Add name </label> <br>
                <input type="text" name="name"> <br>
                <label for="email">Add Email</label> <br>
                <input type="text" name="email" id=""> <br>
                <label for="number">Add Number</label> <br>
                <input type="text" name="phone_number"> <br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <a href="{{ URL('') }}">Back home</a>
    </div>
</body>

</html>
