$(document).ready(function(){
    $(".moreEllipsis").each(function(index,el){
        var row=$(this).data("row");
        $(this).ellipsis({
            row:row
        })
    });
    $("#menuIcon").click(function(){
        $("#menuM").toggle();
    });
    $("#menuM").on("click",".subMenuIcon",function(){
        $("#menuM .subMenu").hide();
        $("#menuM .active").removeClass("active");
        if($(this).hasClass("plus")){
            $("#menuM .subtract").removeClass("subtract").addClass("plus");
            $(this).parent().addClass("active").find(".subMenu").show();
            $(this).removeClass("plus").addClass("subtract");
        }else{
            $(this).removeClass("subtract").addClass("plus");
        }

    });
});