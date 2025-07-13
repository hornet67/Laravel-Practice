<form id="addForm">
    @csrf()
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <span id="name_error"></span>

    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <span id="email_error"></span>

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <span id="phone_error"></span>

    <input type="submit" value="Submit" id="add">
</form>