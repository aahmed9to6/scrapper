function handleExec(response, dataset){
    var item = response[1]+1;
    if(response[0] != 'null'){
        $('#captcha').attr('src', response[0]);
        $( "#captcha-container" ).dialog({
            modal: true,
            minHeight: 600,
            minWidth: 600,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "blind",
                duration: 1000
            }
        });
    }
    if(dataset.length >= item) {
        setTimeout(processURLs(dataset, item), 10000);
    }
}
function processURLs(dataset, pointer) {
    $.ajax({
        method: "POST",
        url: 'http://scrapper.dev/fetch.php',
        data: {url: dataset[pointer]},
        success: function (data) {
            var response = [];
            response.push(data);
            response.push(pointer);
            handleExec(response, dataset);
        }
    });
}
$( "#scrapperFormButton" ).click(function() {
    var arrLines = [];
    var lines = $('#inputLinks').val();
    $.each(lines.split('\n'), function (i, value) {
        if (value != "") {
            arrLines.push(value);
        }
    });
    processURLs(arrLines, 0);
});