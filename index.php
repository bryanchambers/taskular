<!-- Taskular by Bryan Chambers, Copyright 2017 -->


<?php include 'backend/main.php'; ?>

<html>
<head>
	<title>Taskular</title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- JS frameworks -->
	<script type='text/javascript' src='jquery/jquery.min.js'></script>
	<script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>
	
	<!-- App specific JS -->
	<script type='text/javascript' src='js/main.js'></script>
	<script type='text/javascript' src='js/add-event-listeners.js'></script>
	<script type='text/javascript' src='js/new-item-input.js'></script>
	<script type='text/javascript' src='js/create-branch.js'></script>
	<script type='text/javascript' src='js/delete-item.js'></script>
	<script type='text/javascript' src='js/create-status-menu.js'></script>
	<script type='text/javascript' src='js/change-status.js'></script>
	<script type='text/javascript' src='js/create-indent.js'></script>
	<script type='text/javascript' src='js/get-row-info.js'></script>
	<script type='text/javascript' src='js/find-descendants.js'></script>
	<script type='text/javascript' src='js/hide-show.js'></script>
	<script type='text/javascript' src='js/hide.js'></script>
	<script type='text/javascript' src='js/show.js'></script>
</head>

<body>
	<div class='container text-center'>
		<div class='row'><div class='col-md-12'><h1>Taskular</h1></div></div>
		<div class='row spacer'><div class='col-md-12'></div></div>

		<!-- Build task tree -->
		<div class='row'><div class='col-md-8 col-md-offset-2'>
			<table class='table table-hover'><?php buildTaskTree($data, $status_list); ?></table>
		</div></div>

		<!-- HTML snippets -->
		<div class='row spacer'><div id='snippets' class='col-md-12'>
			<?php
			createSnippetStatus('Status', '', $status_list);
			createSnippetAction('add', 'plus', 'add-task', array('Add task after', 'Add subtask'));
			createSnippetAction('delete', 'trash', 'del-task', array('Delete forever')); ?>
			<span class='new-task-snippet'>
				<span class='indent'></span>
				<span class='glyphicon glyphicon-chevron-right'></span>
				<input class='new-task-text' type='text' autofocus>
			</span>
		</div></div>
		
		<div class='row spacer'><div class='col-md-12'></div></div>
	</div>
</body>
</html>