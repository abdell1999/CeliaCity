$(document).ready(function () {


    console.log("Script para gestionar usuarios cargado correctamente!!");
    fetchuser();
    function fetchuser() {
        $.ajax({
            type: "GET",
            url: "/fetch-user",
            dataType: "json",
            success: function (response) {
                console.log("SUCCESS");
                console.log(response);
            },
            error: function (response) {
                console.log("ERROR");
                console.log(response);
            }
        });
    }
});
