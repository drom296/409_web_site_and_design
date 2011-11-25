var uNameDivID="uName";
var thoughtsDivID = "SVGThoughts";

function validateForm(){
	// get the two elements from the form
	var uNameElem = document.getElementById(uNameDivID);
	var thoughtsElem = document.getElementById(thoughtsDivID);
	
	var result = false;
	
	// check if we successfully retrieved them
	if (uNameElem && thoughtsElem){
		// Make sure they are not empty
		if (uNameElem.value && thoughtsElem.value){
			result = true;
		}
	}
	
	/**
	if (!result){
		alert("Missing inputs");
	}	
	**/
	
	return result;
}