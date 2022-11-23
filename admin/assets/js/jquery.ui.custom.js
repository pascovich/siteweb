/* 
 Jquery UI custom js file
 */
$(function () {
    "use strict";
    $("#simple").selectmenu();
    $("#optgroup").selectmenu();
    $("#disabled").selectmenu();
    $("#accordion").accordion({
        heightStyle: "content"
    });
    // Accordion on hover
    $("#accordion-hover").accordion({
        event: "mouseover",
        heightStyle: "content"
    });

    // Custom widget configuration
    $.widget("custom.iconselectmenu", $.ui.selectmenu, {
        _renderItem: function (ul, item) {
            var li = $("<li>"),
                    wrapper = $("<div>", {text: item.label});

            if (item.disabled) {
                li.addClass("ui-state-disabled");
            }

            $("<span>", {
                style: item.element.attr("data-style"),
                "class": "fa " + item.element.attr("data-icon")
            })
                    .appendTo(wrapper);

            return li.append(wrapper).appendTo(ul);
        }
    });
    // Initialize
    $("#select-icons").iconselectmenu({width: '100%'}).iconselectmenu("menuWidget");

    // Custom widget configuration
    $.widget("custom.iconselectmenu", $.ui.selectmenu, {
        _renderItem: function (ul, item) {
            var li = $("<li>"),
                    wrapper = $("<div>", {text: item.label});

            if (item.disabled) {
                li.addClass("ui-state-disabled");
            }

            $("<span>", {
                style: item.element.attr("data-style"),
                "class": "ui-icon " + item.element.attr("data-class")
            })
                    .appendTo(wrapper);

            return li.append(wrapper).appendTo(ul);
        }
    });
    $("#people")
            .iconselectmenu()
            .iconselectmenu("menuWidget")
            .addClass("ui-menu-icons avatar");
});


/**dialog**/
$(function () {
    "use strict";

    //basic
    $("#dialog-basic").dialog({
        autoOpen: false,
        width: 400
    });
    $("#dialog-overlay").dialog({
        autoOpen: false,
        modal: true,
        width: 400
    });
    $("#dialog-animated").dialog({
        autoOpen: false,
        modal: true,
        width: 400,
        show: {
            effect: "fade",
            duration: 500
        },
        hide: {
            effect: "fade",
            duration: 500
        }
    });

    $('#dialog-buttons').dialog({
        autoOpen: false,
        modal: true,
        width: 400,
        buttons: {
            Save: function () {
                $(this).dialog('close');
            },
            Cancel: function () {
                $(this).dialog('close');
            }
        }
    });
    // Disable drag
    $('#dialog-drag-disabled').dialog({
        autoOpen: false,
        modal: true,
        width: 400,
        draggable: false
    });
    $('#dialog-form').dialog({
        autoOpen: false,
        modal: true,
        width: 500,
        buttons: {
            Submit: function () {
                $(this).dialog('close');
            },
            Cancel: function () {
                $(this).dialog('close');
            }
        }
    });
    // Dialog openers
    $('#dialog-basic-opener').click(function () {
        $('#dialog-basic').dialog('open');
    });
    $('#dialog-overlay-opener').click(function () {
        $('#dialog-overlay').dialog('open');
    });
    $('#dialog-animated-opener').click(function () {
        $('#dialog-animated').dialog('open');
    });
    $('#dialog-buttons-opener').click(function () {
        $('#dialog-buttons').dialog('open');
    });
    $('#dialog-drag-disabled-opener').click(function () {
        $('#dialog-drag-disabled').dialog('open');
    });
    $('#dialog-form-opener').click(function () {
        $('#dialog-form').dialog('open');
    });
});


/**draggables**/
$(function () {
     "use strict";
    $(".draggable-default").draggable({
        containment: "#drag-default"
    });

    //cursor style

    // Move cursor
    $("#draggable-cursor-move").draggable({
        containment: "#drag-cursor",
        cursor: "move"
    });
    // Crosshair cursor
    $("#draggable-cursor-crosshair").draggable({
        containment: "#drag-cursor",
        cursor: "crosshair"
    });
    // Bottom cursor
    $("#draggable-cursor-bottom").draggable({
        containment: "#drag-cursor",
        cursorAt: {
            bottom: 0
        }
    });

    // Constrain movement

    // Both
    $("#draggable-move-both").draggable({
        containment: "#drag-constrain"
    });

    // Vertical
    $("#draggable-move-vertical").draggable({
        containment: "#drag-constrain",
        axis: "y"
    });

    // Horizontal
    $("#draggable-move-horizontal").draggable({
        containment: "#drag-constrain",
        axis: "x"
    });

    // Revert position

    // Element
    $("#draggable-revert-element").draggable({
        containment: "#draggable-revert-container",
        revert: true
    });

    // Clone helper
    $("#draggable-revert-clone").draggable({
        containment: "#draggable-revert-container",
        revert: true,
        helper: "clone"
    });

    // Speed
    $("#draggable-revert-speed").draggable({
        containment: "#draggable-revert-container",
        revert: true,
        revertDuration: 1500
    });



    //    Droppable
    // -------------------------

    //
    // Basic functionality
    //

    // Drag
    $("#droppable-basic-element").draggable({
        containment: "#drop-default"
    });

    // Drop
    $("#droppable-basic-target").droppable({
        drop: function (event, ui) {
            $(this).addClass("bg-success border-success").html("<span>Dropped!</span>");
        }
    });
    

    // Accept drop

    // Drag
    $("#droppable-accept-yes, #droppable-accept-no").draggable({
        containment: "#drop-accept"
    });

    // Drop
    $("#droppable-accept-target").droppable({
        accept: "#droppable-accept-yes",
        drop: function(event, ui) {
            $(this).addClass("bg-success border-success").html("<span>Dropped!</span>");
        }
    });

});


/**selectable & progess bar**/
$( function() {
     "use strict";
    $( "#selectable" ).selectable();
     $( "#progressbar" ).progressbar({
      value: 76
    });
     $( "#progressbar2" ).progressbar({
      value: 34
    });
     $( "#progressbar3" ).progressbar({
      value: 76
    });
     $( "#progressbar4" ).progressbar({
      value: 45
    });
     $( "#progressbar5" ).progressbar({
      value: 89
    });
     $( "#progressbar6" ).progressbar({
      value: 55
    });
  });
