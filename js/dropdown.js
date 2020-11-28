try {
    $('#username').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass("show");
        $(this).parent().find('.dropdown-content').slideToggle("slow");
    });
} catch (error) {
    console.log(error);
}
