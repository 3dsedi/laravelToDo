document.addEventListener("DOMContentLoaded", function () {
    const todoForm = document.getElementById("todo-form");
    const todoInput = document.getElementById("todo-input");
    const todoList = document.getElementById("todo-list");

    todoForm.addEventListener("submit", function (event) {
        event.preventDefault();
        handleTodoCreation();
    });

    function handleTodoCreation() {
        const todoText = todoInput.value;

        const todoItem = document.createElement("li");
        todoItem.textContent = todoText;

        todoList.appendChild(todoItem);

        todoInput.value = "";
    }
});
