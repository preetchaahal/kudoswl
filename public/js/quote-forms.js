function showModal() {

	/*
	* "form1, form2...." values are declared globally in quote.php
	* and also the  "form1, form2...." values are coming from quote-form.php
	* done to be able to edit htmlforms separately, thus, employing kind of MVC paradigm-.
	* HaHaHa! Just kiddin! No MVC! Just Trickery ;)
	*
	*/

	$('#myModal').modal('show');
	//clear form contents initially

	$('.modal-body').empty();

	var mainCatSelected = $('.main-cat :selected').text();
	var subCatSelected = $('.sub-cat').val();

	$('.modal-dialog h4 span').text($('.sub-cat :selected').text());
	//console.log("main cat ="+mainCatSelected+" sub cat ="+subCatSelected);
	var formContent;

	if( subCatSelected == "1")
		formContent = form1;
	else if( subCatSelected == "5")
		formContent = form5;
	else if( subCatSelected == "2")
		formContent = form2;
	else if( subCatSelected == "3")
		formContent = form3;
	else if( subCatSelected == "4")
		formContent = form4;
	else if( subCatSelected == "15")
		formContent = form15;
	else
		formContent = "<div>Thanks for your interest. Will be back here soon!</div>";

	$('.modal-body').append(formContent);
	//$('.modal-body').append("");

	// $('form').find('.subCatId').val(subCatSelected);
	//form submit

	var msg;//msg to display user about form submit
	
	/*-----older submit without form validation library----*/
	/*$('form').on('submit', function(e) {
		e.preventDefault();
		var form = $(this).serialize();
		//console.log("serialized form="+form);
		$.ajax({
			method:     "POST",
			url:        "<?php echo SITE_URL; ?>handlers/quote_form_handler.php",
			data:       form
		}).done(function(data) {
			window.location.href = "<?php echo SITE_URL; ?>quote.php?msg="+data+"";
		}).error(function(data) {
			window.location.href = "<?php echo SITE_URL; ?>quote.php?msg="+data+"";
		});
	});*/
	/*-----older submit without form validation library----*/
    
    /*Save se*/
    saveCatSelected(subCatSelected);
	/*-----newer submit with formValidation library----*/
}