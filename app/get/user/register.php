<div class="container">
    <h1>Create New Account</h1>
    
    <form action="user/register" method="post">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="fist_name">First Name</label>
            <input type="text" name="fist_name" class="form-control" id="fist_name" placeholder="First Name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="test@mail.ru">
        </div>
        
        <div class="form-group">
            <label for="prof">Profession</label>
            <input type="text" name="prof" class="form-control" id="prof" placeholder="Web Developer">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="phone" value="+374">
        </div>

       <input type="submit" value="Register" class="btn btn-danger">
</div>
