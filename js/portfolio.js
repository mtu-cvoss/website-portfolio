$(function(){
	$("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar").toggleClass("active");
    });
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar").toggleClass("active");
    });
});
