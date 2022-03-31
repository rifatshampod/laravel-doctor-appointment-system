<form method="post" action="addAppointment">
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

 @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{Session::get('status')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif