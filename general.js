/////////////////////////////////////////////////////////////////////////////
//sign-in
$(document).ready(function(){
    $(".signupForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
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
                    window.location.href="userprofile.php?id="+response.trim();
                }
                //alert(response);
                
                
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//sign-in
$(document).ready(function(){
    $(".loginForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'loginh.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert("ikde ala re!");
                //alert(response);                               
                if(response.trim()=="wrong input")     
                {
                    document.getElementById("logInError").innerHTML="Your email or password is wrong";  
                }
                else if(response.trim()=="not all filled")     
                {
                    document.getElementById("logInError").innerHTML="Please fill all the required fields.";  
                }
                else
                {
                    window.location.href="userprofile.php?id="+response.trim();
                }
                //alert(response);
                
                
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//SOS system
$(document).ready(function(){
    $(".sos_form").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'sos_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert(response);
                if(response.trim()=="success")
                {
                    document.getElementById("sos_error").innerHTML="ALL EMERGENCY MESSAGES HAVE BEEN SUCCESSFULLY SENT..PLEASE DON'T GIVE UP HOPE";
                }
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//breakfast system
$(document).ready(function(){
    $(".breakfastForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'bf_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert(response);
                if(response.trim()=="success")
                {
                    $(".breakfastForm").toggle();
                    $("#bf").toggle();
                }
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//lunch system
$(document).ready(function(){
    $(".lunchForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'lu_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert(response);
                if(response.trim()=="success")
                {
                    $(".lunchForm").toggle();
                    $("#lu").toggle();
                }
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//snacks system
$(document).ready(function(){
    $(".snacksForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'sn_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert(response);
                if(response.trim()=="success")
                {
                    $(".snacksForm").toggle();
                    $("#sn").toggle();
                }
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//snacks system
$(document).ready(function(){
    $(".dinnerForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'dn_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert(response);
                if(response.trim()=="success")
                {
                    $(".dinnerForm").toggle();
                    $("#dn").toggle();
                }
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//snacks system
$(document).ready(function(){
    $(".medicationForm").submit(function(e){ 
        e.preventDefault();
        //alert("undau");
        var formData = new FormData(this);  
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        //alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'med_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                //alert(response);
                if(response.trim()=="success")
                {
                    $(".medicationForm").toggle();
                    $("#med").toggle();
                }
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});
/////////////////////////////////////////////////////////////////////////////