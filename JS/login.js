$(document).ready( function()
{
   
         $("#loginForm").validate({
             // in 'rules' user have to specify all the constraints for respective fields
             rules: {
                 uname: {
                     required: true,
                  },
                 pword: {
                     required: true,
                    
                 },
                 
             },
             // in 'messages' user have to specify message as per rules
             messages: {
                  uname: {
                     required:"Please enter a username",
                   
                 },
                 pword: {
                     required: " Please enter a password",
                  
                 },
                 
                 }
         });









           });
