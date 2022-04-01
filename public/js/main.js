    $(".appointTime").click(function(event){
        $(".appointTime").removeClass("appointActive");
        $(this).addClass("appointActive");
        var time = $(".appointActive p").text();
        $("#time").val(time);
    });

var a = document.querySelector(".dycalendar-target-date");
var c = a.time();
console.log(c);