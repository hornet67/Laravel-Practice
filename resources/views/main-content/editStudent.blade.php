<form action="/students/update" method="POST" id="editForm">
    @csrf()
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$student->name}}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$student->email}}">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$student->phone}}">
    <input type="submit" value="Update">
</form>