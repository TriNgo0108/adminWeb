$(document).ready(() => {
    var btn = $("#button");
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#repassword").val();
        if (password != confirmPassword){
            console.log("aa");
            $("#button").prop('disabled',true);
            $("#error").slideDown(250);
        }
        else{
            $("#button").prop('disabled',false);
            $("#error").slideUp(250);
        }
    
            
    }
    
    $("#repassword").on("keyup",()=>{
        checkPasswordMatch();
        
    });
    btn.on("click", () => {
        let submit = btn.val();
        let username = $("#newuser").val();
        let email = $("#email").val();
        let password = $("#password").val();

        $.post("http://localhost/adminWE/apis/addAccount.php", { "username": username, "email": email, "password": password, "submit":submit }, ((data, status) => {
            console.log(data);
            console.log(status);
            if (status == 'success') {
               $(".popup").addClass("active");
            //    $(".popup").show();
            $(".popup__content").show();
               setTimeout(()=>{    
                 $(".popup").removeClass("active");
                   
               },2000);
            }
        }))
    });
})