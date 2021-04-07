<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="first">First Name</label><br>
        <input type="text" id="first" name="first"><br><br>
        <label for="last">Last Name</label><br>
        <input type="text" id="last" name="last"><br><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender">
        <label for="other">Other</label><br><br>
        <label for="">Nationality:</label><br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="American">American</option>
            <option value="British">British</option>
        </select><br><br>
        <label for="langauge">Language Spoken</label><br>
        <input type="checkbox" name="language" id="indo">
        <label for="indo">Indonesia</label><br>
        <input type="checkbox" name="language" id="eng">
        <label for="eng">English</label><br>
        <input type="checkbox" name="language" id="otherlang">
        <label for="otherlang">Other</label><br><br>
        <label for="bio">Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>