$(document).ready(function(){

	$(".datatable").DataTable();
	$('#summernote').summernote({
		height : 200,
		toolbar : [
			['style', ['bold', 'italic', 'underline', 'clear']],
		    ['font', ['strikethrough', 'superscript', 'subscript']],
		    ['fontsize', ['fontsize']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']]
		]
	});

	$(".chosen-select").chosen();
});