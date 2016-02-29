$(document).ready(function () {

    // Datatables function
    $('.test').DataTable({
        "jQueryUI": true,
        "fnDrawCallback": function (oSettings) {
            //alert('DataTables has redrawn the table');
            // Drag 'n Drop fuction
            console.log(this)
            $(".move").draggable({
                revert: true,
                helper: "clone"
            });
        }
    });


    $('#todrop').droppable({
        hover: function () {
            console.log("tata");
        },
        drop: function (event, ui) {
            console.log("toto");
            var draggableId = ui.draggable.attr("id");
            alert(draggableId);
        }
    });
});



//$(document).ready(function () {
//    $("#to").droppable({
//        drop: function (event, ui) {
//            var draggableId = ui.draggable.attr(".move");
//            var droppableId = $(this).attr(".move");
//            alert("test");
//            //If the item is dropped in the bin, it will stay otherwise it get back to it original place
//            ui.draggable.draggable('option', 'revert', false);
//            //Allow to block the item in is block
//            $(this).draggable('disable');
//        }
//    });
//});