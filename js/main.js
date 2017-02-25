$(document).ready(function() {
	$('.add-task').click(function(event) {
		var info = parseRowInfo(event.currentTarget.id);
		newItemInput(info);
	});

	$('.del-task').click(function(event) {
		var info = parseRowInfo(event.currentTarget.id);
		deleteItem(info);
	});
});