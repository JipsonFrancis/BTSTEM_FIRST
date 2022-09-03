//uiController

let uiController = (function () {
    const Domstrings = {
        AddUser = {
            name : document.forms[AddUser][AddUser_Firstname],
            email: document.forms[AddUser][AddUser_Email]
        }
    };
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }


    return{
        getDom () {
            return Domstrings;
        },
    }
} )();

//dataController

let dataController = (function(){
    // Defining a function to validate form 
function validateForm(name, email) {
    // Retrieving the values of form elements 
    var name = name.value;
    var email = email.value;

    
	// Defining error variables with a default value
    var nameErr = emailErr = mobileErr = countryErr = genderErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" ;
                          
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
    return{}
})();

//Controller

let Controller = (function () {
    uiController.getDom().AddUser.name;
    return{}
})(uiController, dataController);


