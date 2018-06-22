
//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> timing table.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_timing_table() {


    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("timing-table").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> timing table.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_show_member() {

    // nemayeshe form zir dar ghesmate operation-box
    document.getElementById("operation-box").innerHTML= "<form style='padding: 15px;' class='animated fadeIn pure-form pure-form-stacked'>" +
        "<div style='float: right;'> " +
        "<label>اطلاعات مورد نیاز را انتخاب نمایید.</label><br> " +
        "&nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Bike\" checked=\"checked\">&nbspکد ملی&nbsp&nbsp&nbsp&nbsp&nbsp<br><br> " +
        "&nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspنام&nbsp&nbsp&nbsp&nbsp&nbsp<br><br> " +
        "&nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspتاریخ تولد&nbsp&nbsp&nbsp&nbsp&nbsp<br><br> " +
        "&nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspشماره تلفن&nbsp&nbsp&nbsp&nbsp&nbsp<br><br> " +
        "&nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspتاریخ عضویت&nbsp&nbsp&nbsp&nbsp&nbsp<br><br> " +
        "&nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspآدرس&nbsp&nbsp&nbsp&nbsp&nbsp<br><br><br> " +
        "</div> " +
        "<div style='float: right; clear: left; padding-right: 40px; padding-left: 20px;'> " +
        "    <label>سن اعضا را انتخاب نمایید.</label><br> " +
        "&nbsp&nbspاز " +
        "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select id=\"state\" class=\"pure-input-1-1\"> " +
        "<option></option> " +
        "<option>۱۰ سال</option> " +
        "<option>۱۵ سال</option> " +
        "<option>۲۰ سال</option> " +
        "<option>۲۵ سال</option> " +
        "<option>۳۰ سال</option> " +
        "</select> " +
        "&nbsp&nbspتا " +
        "<select id=\"state\" class=\"pure-input-1-1\">  " +
        "<option></option> " +
        "<option>۱۰ سال</option> " +
        "<option>۱۵ سال</option> " +
        "<option>۲۰ سال</option> " +
        "<option>۲۵ سال</option> " +
        "<option>۳۰ سال</option> " +
        "</select> " +
        "</div> " +
        "<div style='float: right; clear: left; padding-right: 60px;'> " +
        "    <label>مدت تاریخ عضویت  را انتخاب نمایید.</label><br> " +
        "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select id=\"state\" class=\"pure-input-1-1\"> " +
        "<option></option> " +
        "<option>۱ سال</option> " +
        "<option>۲ سال</option> " +
        "<option>۳ سال</option> " +
        "<option>بیش از ۳ سال</option> " +
        "</select> " +
        "</div> " +
        "<div style='clear: both; float: left; margin-top: -50px; margin-left: 10px;'> " +
        "    <button type=\"submit\" class=\"pure-button pure-input-1-1 pure-button-primary\" style='background-color:#ea1d5d'>نمایش</button> " +
        "</div> " +
        "</form> ";
    // taghire range sidebar be range asli
    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("show-member").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> search member.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_search_member() {


    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("search-member").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> modify_member.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_modify_member() {


    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("modify-member").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> nemayeshe morabi hs.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_show_trainer() {


    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("show-trainer").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> search-trainer.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_search_trainer() {


    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("search-trainer").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye safheye bodybuilding ghesmate sidbare -> modify-trainer.
// in tabe mohtavaye operation-box ra taghir midahad.
function sidebar_bodybuilding_modify_trainer() {


    default_color_sidebar();
    // taghire background-color dar sidebar
    document.getElementById("modify-trainer").style.backgroundColor = "#dadada";
}

//==================================================================================================
// tabe baraye bazgardandane range aslie sidebar
function default_color_sidebar() {
    document.getElementById("timing-table").style.backgroundColor="inherit";
    document.getElementById("show-member").style.backgroundColor="inherit";
    document.getElementById("search-member").style.backgroundColor="inherit";
    document.getElementById("modify-member").style.backgroundColor="inherit";
    document.getElementById("show-trainer").style.backgroundColor="inherit";
    document.getElementById("search-trainer").style.backgroundColor="inherit";
    document.getElementById("modify-trainer").style.backgroundColor="inherit";
    document.getElementById("training-class").style.backgroundColor="inherit";
    document.getElementById("modify-trainer").style.backgroundColor="inherit";
    document.getElementById("modify-training-class").style.backgroundColor="inherit";
}





