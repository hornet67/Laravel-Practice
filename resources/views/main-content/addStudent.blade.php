<form action="{{route('addStudent')}}" method="POST">
    @csrf()
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <input type="submit" value="Submit">
</form>