<form action="{{url('user/store')}}" method="post" >
    @csrf


    <div>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="">
     </div>
     <div>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="">
     </div>
     <div>
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="">
     </div>

      <div>
        <button type="submit">submit</button>
      </div>




</form>
