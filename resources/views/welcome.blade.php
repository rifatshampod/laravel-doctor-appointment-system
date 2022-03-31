<form method="post" action="">
    @csrf  
  Name: <input type="text" name="name">
  <br><br>
  Phone: <input type="text" name="phone">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  date: <input type="date" name="date">
  <br><br>
  Time: <input type="time" name="time">
  <br><br>
  symptoms: <textarea name="symptoms" rows="5" cols="40"></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>