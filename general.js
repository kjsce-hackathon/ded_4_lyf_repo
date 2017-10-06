/////////////////////////////////////////////////////////////////////////////
//forgot password
$(document).ready(function(){
    $(".signupForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'signuph.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert("ikde ala re!");
                //alert(response);                               
                if(response.trim()=="signup email error")     
                {
                    document.getElementById("signInError").innerHTML="This email already exists!";  
                }
                else if(response.trim()=="not all filled")     
                {
                    document.getElementById("signInError").innerHTML="Please fill all the required fields.";  
                }
                else
                {
                    document.getElementById("signInError").innerHTML="Success";
                }
                alert(response);
                
                
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////