fetchData()
setInterval('fetchData()', 30000);


function fetchData(){
    $.ajax(
        //https://status.xnorm.cloud/data/
        'http://localhost/xnorm-cloud-status/client/data/', {
            success: function(data) {
                getCurrentDate()
                var statusStr = data.slice(0, -1);
                var status = statusStr.split(":");
                for (let i = 0; i < status.length; i++) {
                    if (status[i] == "online") {
                        $(`#sv${i + 1}div`).removeClass("chck non-chck non");
                        $(`#sv${i + 1}div`).addClass('chck');
                        $(`#sv${i + 1}txt`).text('Online');
                        $(`#status-info`).html("IDENTIFIED <i class=\"fas fa-check\"></i>");
                        $(`#status-info`).css("background", "#00BCD4");
                        $(`.tt-time-status:after`).css("background", "#00BCD4");
                        conecting();
                    } else {
                        $(`#sv${i + 1}div`).removeClass("chck non-chck non");
                        $(`#sv${i + 1}div`).addClass('non-chck');
                        $(`#sv${i + 1}txt`).text('Offline');
                        $(`#status-info`).html("IDENTIFIED <i class=\"fas fa-check\"></i>");
                        $(`#status-info`).css("background", "#00BCD4");
                        $(`.tt-time-status:after`).css("background", "#00BCD4");
                        conecting();
                    }
                }
            },
            error: function() {
                $(`#sv1div,#sv2div,#sv3div,#sv4div`).each(function(){
                    $(this).removeClass("chck non-chck non");
                    $(this).addClass('non-chck');
                });
                $(`#sv1txt,#sv2txt,#sv3txt,#sv4txt`).each(function(){
                    $(this).text('Can\' get status');
                });
                conecting();
            }
        }
    );
}

function conecting(){
    setTimeout(function () {
        $(`#status-info`).text("Identifying...");
        $(`#status-info`).css("background", "#f59b42");
        $(`.tt-time-status:after`).css("background", "#f59b42");
    }, 24000);
    
}

function getCurrentDate(){
    Date.prototype.current = function() {
        var yyyy = this.getFullYear().toString();
        var mm = (this.getMonth()+1).toString();
        var dd  = this.getDate().toString();
        var currentHours = this.getHours();
        var varcurrentMinutes = this.getMinutes();
        var currentSeconds = this.getSeconds();
        return (dd[1]?dd:"0"+dd[0]) + "/" + (mm[1]?mm:"0"+mm[0]) + "/" +  yyyy + " " + ("0" + currentHours).slice(-2) + ":" + ("0" + varcurrentMinutes).slice(-2) + ":" + ("0" + currentSeconds).slice(-2);
    };
       
    var date = new Date();
    $(`#current-time`).text(`Last check: ${date.current()}`);
}
