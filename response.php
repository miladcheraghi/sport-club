<?php
/*$timing_table_form=" <form name="/timing-table-form/">
    <label>اطلاعات مورد نیاز را انتخاب کنید.</label>
    <input type="/checkbox/">
</form>
";*/
$sidebar_var=$_REQUEST["sidebar_var"];
if(isset($sidebar_var)){
    //echo "مشخصات زیر را انتخاب نمایید.";
    if($sidebar_var == "timing-table"){

    }
    if($sidebar_var == "show-member"){
        echo "<form style='padding: 15px;' class='animated fadeIn pure-form pure-form-stacked'>
                  <div style='float: right;'>
                  <label>اطلاعات مورد نیاز را انتخاب نمایید.</label><br>
                  &nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Bike\" checked=\"checked\">&nbspکد ملی&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
                  &nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspنام&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
                  &nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspتاریخ تولد&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
                  &nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspشماره تلفن&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
                  &nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspتاریخ عضویت&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
                  &nbsp&nbsp&nbsp<input type=\"checkbox\" name=\"vehicle\" value=\"Car\" checked=\"checked\">&nbspآدرس&nbsp&nbsp&nbsp&nbsp&nbsp<br><br><br>
                  </div>
                  <div style='float: right; clear: left; padding-right: 40px; padding-left: 20px;'>
                  <label>سن اعضا را انتخاب نمایید.</label><br>
                  &nbsp&nbspاز
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select id=\"state\" class=\"pure-input-1-1\">
                    <option></option>
                    <option>۱۰ سال</option>
                    <option>۱۵ سال</option>
                    <option>۲۰ سال</option>
                    <option>۲۵ سال</option>
                    <option>۳۰ سال</option>
                  </select>
                  &nbsp&nbspتا
                  <select id=\"state\" class=\"pure-input-1-1\">
                    <option></option>
                    <option>۱۰ سال</option>
                    <option>۱۵ سال</option>
                    <option>۲۰ سال</option>
                    <option>۲۵ سال</option>
                    <option>۳۰ سال</option>
                  </select>
                  </div>
                  <div style='float: right; clear: left; padding-right: 60px;'>
                  <label>مدت تاریخ عضویت  را انتخاب نمایید.</label><br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select id=\"state\" class=\"pure-input-1-1\">
                    <option></option>
                    <option>۱ سال</option>
                    <option>۲ سال</option>
                    <option>۳ سال</option>
                    <option>بیش از ۳ سال</option>
                  </select>
                  </div>
                  <div style='clear: both; float: left; margin-top: -50px; margin-left: 10px;'>
                    <button type=\"submit\" class=\"pure-button pure-input-1-1 pure-button-primary\" style='background-color:#05a3e8'>نمایش</button>
                  </div>
              </form> ";
    }
    if($sidebar_var == "search-member"){
    }
    if($sidebar_var == "modify-member"){
    }
    if($sidebar_var == "show-trainer"){
    }
    if($sidebar_var == "search-trainer"){
    }
    if($sidebar_var == "modify-trainer"){
    }
    if($sidebar_var == "training-class"){
    }
    if($sidebar_var == "modify-training-class"){
    }
}

