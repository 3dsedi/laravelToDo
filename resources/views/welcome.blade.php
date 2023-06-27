<!DOCTYPE html>
<html>
<head>
  <title>Todo List</title>
</head>
<body>
  <div style="text-align: center; padding: 20px;">
    <h1 style="color: #333;">Todo List</h1>

    <form id="todo-form" style="margin-bottom: 10px;">
      <input type="text" id="todo-input" placeholder="Add a todo" style="padding: 5px;">
      <button type="submit" style="padding: 5px 10px; background-color: #333; color: #fff; border: none; cursor: pointer;">Add</button>
    </form>

    <ul id="todo-list" style="list-style-type: none; padding: 0;">
    </ul>
  </div>

  <script src="app.js"></script>
</body>
</html>
