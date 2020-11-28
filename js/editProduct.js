$(document).ready(() => {
    var btn = $("#button");
    btn.on("click", () => {
        let submit = btn.val();
        let id = $("#id").val();
        let name = $("#name").val();
        let price = $("#price").val();
        let description = $("#description").val();
        let type = $("#type").val();

        $.post("http://localhost/adminWE/apis/updateProduct.php", { "id": id, "name": name, "price": price, "description": description, "type": type,"submit":submit }, ((data, status) => {
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