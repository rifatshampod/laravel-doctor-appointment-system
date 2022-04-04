$(document).ready(function () {
    $(".appointTime").click(function (event) {
        $(".appointTime").removeClass("appointActive");
        $(this).addClass("appointActive");
        var time = $(".appointActive p").text();
        $("#time").val(timeConversionSlicker(time));
    });


    $(".tabButtonText1").click(function (event) {
    var chamber = $(".tabButtonText1").text();
    $("#chamber").val(timeConversionSlicker(chamber));
    });
    $(".tabButtonText2").click(function (event) {

        var chamber = $(".tabButtonText2").text();
        $("#chamber").val(timeConversionSlicker(chamber));
    });

    
    $(".day").click(function (e) {
        $date = e.target.id;
        e.target.classList.add("selectedDay")
        $formatedDate = dateFormat($date,'yyyy-MM-dd');
        $("#date").val($formatedDate);
    });
    var a = document.querySelector(".dycalendar-target-date");
    //var c = a.time();
    //console.log(c);
    //a simple date formatting function
    function dateFormat(inputDate, format) {
        //parse the input date
        const date = new Date(inputDate);

        //extract the parts of the date
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();

        //replace the month
        format = format.replace("MM", month.toString().padStart(2, "0"));

        //replace the year
        if (format.indexOf("yyyy") > -1) {
            format = format.replace("yyyy", year.toString());
        } else if (format.indexOf("yy") > -1) {
            format = format.replace("yy", year.toString().substr(2, 2));
        }

        //replace the day
        format = format.replace("dd", day.toString().padStart(2, "0"));

        return format;
    }

    function timeConversionSlicker(s) {
    let AMPM = s.slice(-2);
    let timeArr = s.slice(0, -2).split(":");
    if (AMPM === "AM" && timeArr[0] === "12") {
        // catching edge-case of 12AM
        timeArr[0] = "00";
    } else if (AMPM === "PM") {
        // everything with PM can just be mod'd and added with 12 - the max will be 23
        timeArr[0] = (timeArr[0] % 12) + 12
    }
    return timeArr.join(":");
}

});

//display on tab
element.addEventListener("click", tabFunction);

function tabFunction() {
    document.querySelector(".hideTabPane").style.display = "block";
}

