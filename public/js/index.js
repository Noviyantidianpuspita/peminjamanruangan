$(document).ready(function () {
    let now = new Date();

    let day = ("0" + now.getDate()).slice(-2);
    let month = ("0" + (now.getMonth() + 1)).slice(-2);
    let today = now.getFullYear() + "-" + month + "-" + day;

    $("#datePicker").val(today);

    $("#datereset").click(function () {
        const tr = document.querySelectorAll(".rent-detail");
        for (let i = 0; i < tr.length; i++) {
            tr[i].style.display = "table-row";
        }
    });

    $("#datebtn").click(function () {
        let value = $("#datePicker").val();
        const tr = document.querySelectorAll(".rent-detail");
        for (let i = 0; i < tr.length; i++) {
            const start_detail_time = document
                .querySelectorAll(".detail-rent-room_start-time")
                [i].innerText.split(" ")[0];
            start_detail_time != value
                ? (tr[i].style.display = "none")
                : (tr[i].style.display = "table-row");
        }
    });
});
