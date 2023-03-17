var dt = new Date();

function renderDate() {

    var day = dt.getDay();

    var prev_date = new Date(
        dt.getFullYear(),
        dt.getMonth(),
        0).getDate();

    var endDate = new Date(
        dt.getFullYear(),
        dt.getMonth() + 1,
        0).getDate();

    var months = [
        "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
    ];

    var today_date = new Date();

    document.getElementById("date_str").innerHTML = dt.toDateString();

    document.getElementById("month").innerHTML = months[dt.getMonth()];

    var cells = " ";

    for (x = day; x > 0; x--) {
        cells += "<div class='prev_date'>" + (prev_date - x + 1) + "</div>";
    }

    for (i = 1; i <= endDate; i++) {
        if (i == today_date.getDate() && dt.getMonth() == today_date.getMonth) {
            cells += "<div class='today_date'>" + i + "</div>";
        }
        else {
            cells += "<div>" + i + "</div>";
        }
    }

    document.getElementsByClassName("days")[0].innerHTML = cells;
   

}


function moveDate(para) {
    if(para == 'prev')
    {
        dt.setMonth(dt.getMonth() - 1);
    }
    else if(para == 'next')
    {
        dt.setMonth(dt.getMonth() + 1);
    }
    renderDate();
}