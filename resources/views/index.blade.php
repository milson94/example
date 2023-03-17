<!DOCTYPE html>
<html>
<head>
	<title>Tarefas</title>
	
</head>
<body>

	<style>

	body {
		font-family: Arial, sans-serif;
		margin: 0 auto;
		padding: 0;
		background-color: rgb(253, 255, 229);
	}

	h1 {
		text-align: center;
	}



	#add-task-btn {
		display: block;
		margin: 0 auto;
		font-size: 3em;
		background-color: rgba(19, 255, 251, 0.621);
		width: 100px;
		color: rgb(30, 29, 29);
		border: none;
		border-radius: 10%;
		cursor: pointer;
		position: fixed;
		bottom: 50px;
		right: 50px;
	}

	.tasks-container {
		box-shadow: 0px 0px 1rem  rgb(167, 167, 167);
		width: 1000px;
		margin: 0 auto;
		height: 100vh;
		/* background-color: #8ca58d; */
	}

	.center {
		color: white;
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: center;
	}

	.tasks-container-mod {
		display: flex;
		align-items: start;
		justify-content: start;

		color:rgb(134, 130, 130);
		min-height: 50rem;
	}

	.item{
		background-color: #45a049;
		min-width: 200px;
		border: 1px solid white;
		flex-wrap: no-wrap;
		/* flex: 14 15 4rem;  */
		height: 100px;
	}

	.tasks-container .tasks{
		display: flex;
		align-items: center;
		justify-content: center;
		color:rgb(134, 130, 130);
		min-height: 50rem;
	}

	.tasks-container .tasks h1 .active{
		display: none;
	}

	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		padding-top: 100px;
		left: 22rem;
		top: 0;
		width: 1200px;
		/* margin: 0 auto; */
		height: 100%;
		overflow: auto;
		background-color: rgba(0,0,0,0.4);
	}

	.modal.active{
		display: block;
	}

	.modal:inactive{
		display: none;
	}

	.modal-content {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
	}

	.close {
		color: #aaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
	}

	form {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	#task-form #description{
		min-height: 200px;
	}

	label {
		font-weight: bold;
		margin-top: 10px;
	}

	input[type=text], textarea {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		resize: vertical;
	}

	button[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		margin-top: 10px;
	}

	button[type=submit]:hover {
		background-color: #45a049;
	}

	.task {
		border: 1px solid #ccc;
		padding: 10px;
		margin-top: 10px;
	}

	</style>
	<h1>Tarefas</h1>
	<button id="add-task-btn"  data-toggle="modal" data-target="#exampleModal">+</button>
	<div class="tasks-container">
		<div class="tasks">
			<h2 class="active">
				Nenhuma tarefa disponivel!
			</h2>


		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
		<div class="modal-content">
			<span class="close">&times;</span>
	  <form method="POST" action="/inserirTarefa" >
			   @csrf
				<label for="title">Title:</label>
				<input type="text" id="title" name="title">
				<label for="description">Description:</label>
				<textarea id="description" name="description"></textarea>
				<label for="author">Author:</label>
				<input type="text" id="author" name="author">
				<button type="submit" id="submitBtn">Add Task</button>
			</form>
		</div>
	</div>
	<button id="tasks"></div>
	<script>

	const modal = document.getElementById("modal");
	const addTaskBtn = document.getElementById("add-task-btn");
	const closeBtn = document.getElementsByClassName("close")[0];
	const taskForm = document.getElementById("task-form");
	const tasksContainer = document.querySelector(".tasks");

	const title = document.getElementById('title');
	const description = document.getElementById('description');
	const author = document.getElementById('author');

	let paragraph = document.querySelector('h2');
	const submitBtn  = document.querySelector('#submitBtn');

	// submitBtn.addEventListener('click', function(e) {
	// 		e.preventDefault();
	// 		console.log('this is the title, ', title.value);
	// 		console.log('this is the description: ', description.value);
	// 		console.log('this is the author: ', author.value);
	//
	// 		let newDiv = document.createElement("div");
	// 		newDiv.classList.add('item');
	// 		tasksContainer.appendChild(newDiv);
	// 		tasksContainer.appendChild(newDiv);
	//
	// 		const par = document.createElement('p');
	//
	// 		par.style.color = "white";
	//
	// 		tasksContainer.classList.add('center');
	// 		par.innerHTML = title.value;
	//
	//
	//
	//
	// 		newDiv.appendChild(par);
	//
	// 		tasksContainer.classList.remove('tasks');
	// 		tasksContainer.classList.add('tasks-container-mod');
	// 		paragraph.remove();
	//
	// 		modal.classList.remove('active');
	// });
	//
	// title.getAttribute('')
	//
	//
	// let tasks = [];
	//
	// closeBtn.addEventListener('click', show());
	//
	// addTaskBtn.onclick =() =>{
	// 		modal.classList.add('active');
	// }
	//
	// closeBtn.onclick = () => {
	// 		modal.classList.remove('active');
	// }
	//
	// function show() {
	//
	// }
	</script>
</body>
</html>
