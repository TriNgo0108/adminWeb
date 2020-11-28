function checkPasswordMatch() {
    var password = $("#newPassword").val();
    var confirmPassword = $("#renewPassword").val();
    if (password != confirmPassword) {
        $("#button").prop('disabled', true);
        $("#error").slideDown(250);
    }
    else {
        $("#button").prop('disabled', false);
        $("#error").slideUp(250);
    }


}

$("#renewPassword").on("keyup", () => {
    checkPasswordMatch();

});
$(document).ready(()=>{
    $("#button").on('click', () => {
        let oldPass = $("#oldPassword").val();
        let newPass = $("#newPassword").val();
        let id = $("#id").val();
        $.post("http://localhost/adminWE/apis/changePass.php", { "oldPassword": oldPass, "newPassword": newPass, "id": id, "submit": "submit" }, ((data, status) => {
            var obj = JSON.parse(data);
            if (status == 'success' && obj.isChange == 'yes') {
                $(".popup").addClass("active");
             //    $(".popup").show();
             $(".popup__content").show();
                setTimeout(()=>{    
                  $(".popup").removeClass("active");
                    
                },2000);
             }
        }));
})

});