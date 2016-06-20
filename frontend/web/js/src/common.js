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

    $(".search").keydown(function(e){
        if(e.keyCode==13){
            window.location.href=document.getElementsByTagName("base")[0].getAttribute("href")+"search/"+$(this).val();
        }
    });
});