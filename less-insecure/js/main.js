let password, password1,code;
function validate(input)
{
    password = input.value;
    if(input.value)
    {
        if(password == password1)
        {
            document.getElementById("password").innerText = "MATCH!";
            passwordField.className = "match";
            verifyField.className = "match";
            document.getElementById("submitbutton").disabled = false;
        }
        else
        {
            passwordField.className = "nonMatch";
            verifyField.className = "nonMatch";
            document.getElementById("password").innerText = "Your Passwords are unmatch!";
            document.getElementById("submitbutton").disabled = true;
            
        }
    }
    else
    {
        passwordField.className = "";
        verifyField.className = "";
        document.getElementById("password").innerText = " ";
    }
}
function validatePassword(input)
{
    password1 = input.value;
    if(input.value)
    {
        if(password1 == password)
        {
            document.getElementById("password").innerText = "MATCH!";
            passwordField.className = "match";
            verifyField.className = "match";
            document.getElementById("submitbutton").disabled = false;
        }
        else
        {
            passwordField.className = "nonMatch";
            verifyField.className = "nonMatch";
            document.getElementById("password").innerText = "Your Passwords are unmatch!";
            document.getElementById("submitbutton").disabled = true;

        }
    }
    else
    {
        passwordField.className = "";
        verifyField.className = "";
        document.getElementById("password").innerText = " ";
    }
    
}

function hide()
{
    document.getElementById("show").className = "hide";
}