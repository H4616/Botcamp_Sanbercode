<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register</title>
</head>
<body>
    <h1>Membuat Account Baru</h1>
    <br>
    <h2> Sign Up Form</h2>
    <br>
    <form action="/wellcome" method="post">
    @csrf
        <label>First Name</label><br>
        <input type="text" name="fname"><br><br>

        <label>Last Name</label><br>
        <input type="text" name="lname"><br><br>

        Gender :
        <br>
            <input type="radio" name="gender" value="Male">
            <label for="Male">Male</label><br>
            <input type="radio" name="gender" value="Female">
            <label for="Female">Female</label><br>
            <input type="radio" name="gender" value="LGBT">
            <label for="LGBT">LGBT</label>
        <br>

        Nstionality :
        <br>
            <select name="negara">
                <option value="Indonesia">Indonesia</option>
                <option value="Singapura">Singapura</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Jepang">Jepang</option>
            </select>
        <br>

        Bio :
        <br>
        <textarea name="bio" rows="10" cols="30" placeholder="Isikan Bio Anda"></textarea>
        <br>

        Foto Profile Anda :
        <br>
        <input type="file" name="foto">
        <br>
        <br>

        <button type="submit">Submit</button>
    </form>
    
</body>
</html>