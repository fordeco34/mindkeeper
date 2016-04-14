/** CONSTANTS */
const TEXT_TYPE = 0;
const LIST_TYPE = 1;

	/** 
	When the type input be changed, the system will display text or type section
	*/
	function displaySelectedType(){

		if($('#inputType').val() == TEXT_TYPE){
			$('#textSection').show();
			$('#listSection').hide();
		} else if($('#inputType').val() == LIST_TYPE) {
			$('#listSection').show();
			$('#textSection').hide();		
		}
	}

	function addTaskList(){
		if($('#taskName').val() == ""){
			alert('Eh preciso informar o nome deste item');
		} else {
			//new Option (value, text);
			var item = new Option($('#taskName').val(), $('#taskName').val());
			/// jquerify the DOM object 'o' so we can use the html method

			//$(item).html("option text");
			$("#listTasks").append(item);			
		}
	}

	function removeTaskList(){
		$("#listTasks option:selected").remove();
	}

	function upTaskList(){
		var $selectedItem = $("#listTasks option:selected");
		var $list = $("#listTasks");

		if($selectedItem.length){
			$selectedItem.first().prev().before($selectedItem);
		}		
	}

	function downTaskList(){
		var $selectedItem = $("#listTasks option:selected");
		var $list = $("#listTasks");

		if($selectedItem.length){
			$selectedItem.last().next().after($selectedItem);
		}
	}





function submitRegisterUserForm(){
	console.log("Submit");

	var user = {
		"teste": {
			name: "Isan",
			email: "ei",
			password:"das"
		}
	};

	$.post("service/API.php?func=registerUser", user, function(result){

		console.log(result.status);
		console.log(result.message);
		console.log(result);
	});

}

