/**
 * @author drom296
 */

// global variable to store max length of the comment field
var maxCommentLength = 300;
// Error Message for empty name
var emptyNameError = "Please enter your name";
// Error Message for empty Comment
var emptyCommentError = "Please enter a comment";
// id of the Comment form
var commentFormId = "enterCommentForm";


function validateCommentForm(){
	var cForm = document.getElementById(commentFormId);
	
	var result = false;
	
	// validate the name
	result = validateName(cForm.uName, true);
	
	if (result){
		// validate the comment
		result = validateComment(cForm.comment, true);
	}
	
	return result;
}

// validate the user's name, and alert if desired
function validateName(elem, lalert){
	var result = isNotEmpty(elem, emptyNameError, lalert); 
	
	if (!result){
		elem.style.backgroundColor = '#635A57';
		elem.style.color = '#FCECD1';
	} else{
		elem.style.backgroundColor = '';
		elem.style.color = '';
	}
	
	//check if empty and return the result
	return result;
}

// validate the user's comment, and alert if desired
function validateComment(elem, lalert){
	var result = false;
	
	// check if empy
	result = isNotEmpty(elem, emptyCommentError, lalert);
	
	if (result){
		// check if comment is past the length
		result = validateCommentLength();
	}
	
	if (!result){
		elem.style.backgroundColor = '#635A57';
		elem.style.color = '#FCECD1';
	} else{
		elem.style.backgroundColor = '';
		elem.style.color = '';
	}
	
	return result;
}

function validateCommentLength(elem, lalert){
	return pastLength(elem, "comment", maxCommentLength, lalert);
}

// Checks if the Element is empty, displays the desired message, and sets the focus
function isNotEmpty(elem, helperMsg, lalert){
	// store the result
	var result = true;
	
	// Use Regex to make sure they entered a value
	if((/^\s*$/).test(elem.value)){
		if (lalert){
			// Alert the user
			alert(helperMsg);
		}
		// set the focus to this input
		elem.focus();
		// change result to false 
		result = false;
	}
	return result;
}

// Checks to make sure a desired length was not exceeded
function pastLength(elem, itemName, maxLength, lalert){
	var uInput = elem.value;
	if(uInput.length <= max){
		return true;
	}else{
		if (lalert){
			alert("Your " + itemName +" must be less than" +max+ " characters");
		}
		elem.focus();
		return false;
	}
}
