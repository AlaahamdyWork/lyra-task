
function getInfo() {

    var url =  document.getElementById("lyra-task-url").value;
    console.log(url);
    $.get(url+"/public/employees/getEmployees", function(data, status){
        if (status == 'success'){
            var element = createTable(data);
            const container = document.getElementById("root");
            render(element, container);

        }else {
            console.log('error');
        }

    });

}


function createTable(jsonArray) {

    var elem =[];

    var count =1;
    jQuery.each(jsonArray, function(i, val) {
        var td =  createElement("td",{},count);
        var td2 =  createElement("td",{},val.name);
        var td3 =  createElement("td",{},val.address);
        count = count+1;

        elem.push (createElement("tr",{},td, td2, td3)) ;

    });

    var th =  createElement("th",{},'#');
    var th2 =  createElement("th",{},'Name');
    var th3 =  createElement("th",{},'Address');

    var tr1 =  createElement("tr",{},th, th2, th3);


    var element = createElement(
        "table",
        null,
        tr1,
        ...elem
);
    return element;

}

$(document).ready(function () {
    getInfo();
});