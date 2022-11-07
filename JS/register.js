  $(document).ready( function()
   {
      
      $("#username").blur( 
          function() {
           console.log("Reached");
            var username = $("#username").val();
            console.log(username)
            var url = "http://localhost/MA/php/usercheck.php?username=" + username;
             $.get(url, function(data, status)
              {
                $("#result").html(data);
              });
              });
 
 
            $("#signupForm").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                    username: {
                        required: true,
                        minlength: 2 //for length of lastname
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo:"#password" //for checking both passwords are same or not
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    
                },
                // in 'messages' user have to specify message as per rules
                messages: {
                     username: {
                        required:"Please enter a username",
                        minlength:"Must contain at least 2 characters"
                    },
                    password: {
                        required: " Please enter a password",
                        minlength: " At least 5 characters"
                    },
                    confirmPassword: {
                        required: " Please enter a password",
                        minlength: " At least 5 characters",
                        equalTo: " Please enter the same password as above"
                    },
                    email:{
                        required:"Must enter a E-Mail",

                    }
                    }
            });
              });
