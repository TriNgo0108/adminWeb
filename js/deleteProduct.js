$(document).ready(()=>{
    var node = $(".col");
    for (var i = 0 ;i < node.length;i++){
        var that = $(node[i]);
        const index = i ;
        that.on('click',()=>{
            let pid = $("#"+index).val();
            $(".pop_up").addClass("active");
            $(".pop_up").show();
            $("#yes").on('click',()=>{
                $.post("http://localhost/adminWE/apis/deleteProduct.php",{"pid":pid},(data,status)=>{
                    var obj = JSON.parse(data);
                    if (status == 'success' && obj == 'OK'){
                        $(".pop_up").removeClass("active");
                        $("#"+index).parent().remove();
                    }
                });
            });
        });


    }
    $("#no").on("click",()=>{
        $(".pop_up").removeClass("active");
    });
})