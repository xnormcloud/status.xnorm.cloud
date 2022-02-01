fetchData()
setInterval('fetchData()', 10000);

function fetchData(){
    $.ajax(
        'https://status.xnorm.cloud/data/', {
            success: function(data) {
                getCurrentDate()
                var statusStr = data.slice(0, -1);
                var status = statusStr.split(":");
                for (let i = 0; i < status.length; i++) {
                    if (status[i] == "online") {
                        $(`#sv${i + 1}div`).removeClass("chck");
                        $(`#sv${i + 1}div`).removeClass("non-chck");
                        $(`#sv${i + 1}div`).removeClass("non");
                        $(`#sv${i + 1}div`).addClass('chck');
                        $(`#sv${i + 1}txt`).text('Online');
                    } else {
                        $(`#sv${i + 1}div`).removeClass("chck");
                        $(`#sv${i + 1}div`).removeClass("non-chck");
                        $(`#sv${i + 1}div`).removeClass("non");
                        $(`#sv${i + 1}div`).addClass('non-chck');
                        $(`#sv${i + 1}txt`).text('Offline');
                    }
                }
            },
            error: function() {
                $(`#sv${i + 1}div`).removeClass("chck");
                $(`#sv${i + 1}div`).removeClass("non-chck");
                $(`#sv${i + 1}div`).removeClass("non");
                $(`#sv${i + 1}div`).addClass('non-chck');
                $(`#sv${i + 1}txt`).text('Can\' get status');
            }
        }
    );
}

function getCurrentDate(){
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    $(`#current-time`).text(`${date} ${time}`);
}
