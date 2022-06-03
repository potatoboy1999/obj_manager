$(function() {
    $.datepicker.setDefaults($.datepicker.regional['es']);
});
$("#act_date_start").datepicker({
    minDate: new Date(),
    onSelect: function(date){
        $("#act_date_end").datepicker('option', 'minDate', new Date(date));
    }
});
$("#act_date_end").datepicker({
    minDate: new Date(),
});

$("#item_save").on("click", function(ev){
    ev.preventDefault();
    var data = {
        new_role: $("#newRoleSwitch").prop("checked"),
        role_sel: $("#role_sel").val(),
        role_name: $("#role_name").val(),
        new_theme: $("#newThemeSwitch").prop("checked"),
        theme_sel: $("#theme_sel").val(),
        theme_name: $("#theme_name").val(),
        new_objective: $("#newObjSwitch").prop("checked"),
        obj_sel: $("#obj_sel").val(),
        obj_name: $("#obj_name").val(),
        activity_desc: $("#activity_desc").val(),
        date_start: $("#act_date_start").val(),
        date_end: $("#act_date_end").val(),
    };
    console.log("Save New Item", data);
    $("#role_form").submit();
});

$(".new_item_switch").on("change",function(ev){
    var object = $(this).data("object");
    var n = $(this).prop("checked");
    if(n){
        if(["obj","theme","role"].includes(object)){
            $("#obj_sel").hide();
            $("#obj_name").show();
            $("#newObjSwitch").prop("checked", true);
        }
        
        if(["theme","role"].includes(object)){
            $("#theme_sel").hide();
            $("#theme_name").show();
            $("#newThemeSwitch").prop("checked", true);
        }
        
        if(["role"].includes(object)){
            $("#role_sel").hide();
            $("#role_name").show();
            $("#newRoleSwitch").prop("checked", true);
        }
    }else{
        if(["obj","theme","role"].includes(object)){
            $("#role_sel").show();
            $("#role_name").hide();
            $("#newRoleSwitch").prop("checked", false);
        }
        if(["obj","theme"].includes(object)){
            $("#theme_sel").show();
            $("#theme_name").hide();
            $("#newThemeSwitch").prop("checked", false);
        }
        if(["obj"].includes(object)){
            $("#obj_sel").show();
            $("#obj_name").hide();
            $("#newObjSwitch").prop("checked", false);
        }
    }
});

var toast = new coreui.Toast($('#liveToast'));