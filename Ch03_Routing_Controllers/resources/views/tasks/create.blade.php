<!DOCTYPE html>
<html>
<body>

<h2>Create Task</h2>

<form action="/task" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br>
    <input type="submit" value="Submit">
</form> 

</body>
</html>
