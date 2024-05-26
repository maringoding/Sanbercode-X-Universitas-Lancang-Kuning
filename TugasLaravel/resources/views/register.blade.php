<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2> Sign Up Form</h2>
</body>
<form action="/welcome" method="GET">
    @csrf
    <label>First name:</label><br>
    <input type="text"  name="fname"><br>
    <label>Last name:</label><br>
    <input type="text"  name="lname"> <br>
    <label for="other">Gender :</label> <br><br>
    <input type="radio" id="man" name="fav_language" value="man">
    <label for="man">Man</label><br>
    <input type="radio" id="woman" name="fav_language" value="Woman">
    <label for="woman">Woman</label><br>
    <input type="radio" id="other" name="fav_language" value="other">
    <label for="other">Other</label>

    <p>Nationality:</p>

    <select>
      <option> Indonesia </option>
      <option> Jepang</option>
      <option> Qatar</option>
  </select>

  <p>Languenge Spoken:</p>

      <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">
      <label for="vehicle1"> Bahasa Indonesia </label><br>
      <input type="checkbox" name="English" value="English">
      <label for="vehicle2"> English </label><br>
      <input type="checkbox"  name="Japanese" value="Japanese">
      <label for="vehicle2"> Japanese </label><br>
      <input type="checkbox"  name="Arabic" value="Arabic">
      <label for="vehicle3"> Arabic </label> 

      <p>Bio:</p>
      <textarea name="message" rows="10" cols="50"></textarea> <br>
    <input type="submit" value="Sign Up">
  </form>
</html>