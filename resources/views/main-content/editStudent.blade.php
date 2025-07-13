<form id="editForm">
    @csrf()
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$student->name}}">
    <span id="update_name_error"></span>
    
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$student->email}}">
    <span id="update_email_error"></span>

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$student->phone}}">
    <span id="update_phone_error"></span>

    <input type="submit" value="Update">
</form>


<script>
    
</script>