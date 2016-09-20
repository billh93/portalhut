<?php
	require_once('../../inc/route.php'); 
	include_once(ROOT_PATH . 'inc/var.php');
	include(ROOT_PATH . 'inc/head.php'); 
?>
  <section class="mainForm">
  	<h2>Resume Information</h2>
  	<form method="post" action="">
    <table>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="jobHistory" class="label_setting_style">Job History</label>
        </td>
        <td class="tdInput">
        	<input type="text" name="business_name" placeholder="Business Name" class="Inputbars" value="<?php if(isset($business_name)) {echo $business_name; } ?>">
        </td>
        <td class="tdInput">
        	<input type="text" name="job_position" placeholder="Position" class="Inputbars" value="<?php if(isset($job_position)) {echo $job_position; } ?>">
        </td>
		<td class="tdInput">
          	<label for="start_month_job">Start:</label>
		  	<select name="start_month_job" id="start_month_job">
            	<option>Month</option>
            	<option value="N/A">N/A</option>
	            <?php
					list_months();
				?>
          	</select>
		  	<select name="start_day_job" id="start_day_job">
	            <option>Day</option>
	            <option value="N/A">N/A</option>
	            <?php
					list_days();
				?>
	          </select>
	          <select name="start_year_job" id="start_year_job">
	            <option>Year</option>
	            <option value="N/A">N/A</option>
	            <?php
		            list_years();
		        ?>
	          </select>
	      </td>
	      <td class="tdInput"><span>to</span></td>
	      <td class="tdInput">
	          <label for="end_month_job">End:</label>
	          <select name="end_month_job" id="end_month_job">
	            <option>Month</option>
	            <option value="N/A">N/A</option>
	            <?php
					list_months();
				?>
	          </select>
	          <select name="end_day_job" id="end_day_job">
	          	<option>Day</option>
	          	<option value="N/A">N/A</option>
	          	<?php
					list_days();
				?>
	          </select>
	          <select name="end_year_job" id="end_year_job">
	            <option>Year</option>
	            <option value="N/A">N/A</option>
	            <?php
					list_years();
				?>
	          </select>
	      </td> 
	      <td class="tdInput"><textarea class="taInput" name="job_description" placeholder="Job Description"><?php if(isset($job_description)) {echo $job_description; } ?></textarea></td> 
      </tr>
	  <tr class="trLength">
	      <td class="tdLength">
	      	<label for="Education" class="label_setting_style">Education</label>
	      </td>
	      <td class="tdInput">
	        <input type="text" name="school_name" placeholder="School Name" class="Inputbars" value="<?php if(isset($school_name)) {echo $school_name; } ?>">
	      </td>
	      <td class="tdInput">
	        <input type="text" name="major_field_study" placeholder="Major/Field Study" class="Inputbars" value="<?php if(isset($major_field_study)) {echo $major_field_study; } ?>">
	        </td>
	      <td class="tdInput">
	          <label for="start_month_school">Start:</label>
	          <select name="start_month_school" id="start_month_school">
	          	<option value>Month</option>
	          	<?php
					list_months();
				?>
	          </select>
	          </select>
			  <select name="start_day_school" id="start_day_school">
			  	<option value>Day</option>
			  	<?php
					list_days();
				?>
			  </select>
	          <select name="start_year_school" id="start_year_school">
	            <option value>Year</option>
	            <?php
					list_years();
				?>
	          </select>
	      </td>
          <td class="tdInput"><span>to</span></td>
		  <td class="tdInput">
          	<label for="end_month_school">End:</label>
		  	<select name="end_month_school" id="end_month_school">
            	<option value>Month</option>
            	<?php
					list_months();
				?>
		  	</select>
		  	</select>
		  	<select name="end_day_school" id="end_day_school">
            	<option value>Day</option>
            	<?php
					list_days();
				?>
		  	</select>
		  	<select name="end_year_school" id="end_year_school">
            	<option value>Year</option>
            	<?php
					list_years();
				?>
            </select>
          </td>
          <td class="tdInput">
         	<textarea class="taInput" name="school_activities" placeholder="Enter Clubs, Sports or Extracurricular activities"><?php if(isset($school_activities)) {echo $school_activities; } ?></textarea>
         </td> 
      </tr>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="user_skills" class="label_setting_style">Skills</label>
        </td>
        <td class="tdInput">
        	<textarea class="taInput" name="user_skills" placeholder="Cook, Clean, Retail Service"><?php if(isset($user_skills)) {echo $user_skills; } ?></textarea>
        </td> 
      </tr>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="availability" class="label_setting_style">Availability</label>
        </td>
        <td class="tdInput">
           <span class="darkFont">Sunday:</span>
        </td>
        <td class="tdInput">
           <select name="start_hour_sunday" id="start_hour_sunday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="start_minute_sunday" id="start_minute_sunday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_sunday" id="start_period_sunday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_sunday" id="end_hour_sunday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_sunday" id="end_minute_sunday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_sunday" id="end_period_sunday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput">
           <span class="darkFont">Monday:</span>
        </td>
        <td class="tdInput">
           <select name="start_hour_monday" id="start_hour_monday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="start_minute_monday" id="start_minute_monday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_monday" id="start_hour_monday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_monday" id="end_hour_monday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_monday" id="end_minute_monday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_monday" id="end_period_monday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput">
           <span class="darkFont">Tuesday:</span>
        </td>
        <td class="tdInput">
           <select name="start_hour_tuesday" id="start_hour_tuesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
		   </select>
           <span>:</span>
           <select name="start_minute_tuesday" id="start_minute_tuesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_tuesday" id="start_period_tuesday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_tuesday" id="end_hour_tuesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_tuesday" id="end_minute_tuesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_tuesday" id="end_period_tuesday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput">
           <span class="darkFont">Wednesday:</span>
        </td>
        <td class="tdInput">
           <select name="start_hour_wednesday" id="start_hour_wednesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="start_minute_wednesday" id="start_minute_wednesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_wednesday" id="start_period_wednesday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_wednesday" id="end_hour_wednesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_wednesday" id="end_minute_wednesday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_wednesday" id="end_period_wednesday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput">
           <span class="darkFont">Thursday:</span>
        </td>
        <td class="tdInput">
           <select name="start_hour_thursday" id="start_hour_thursday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="start_minute_thursday" id="start_minute_thursday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_thursday" id="start_period_thursday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_thursday" id="end_hour_thursday">
           <option value="N/A">N/A</option>
           <?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_thursday" id="end_minute_thursday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_thursday" id="end_period_thursday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput">
           <span class="darkFont">Friday:</span>
        </td>
        <td class="tdInput">
	       <select name="start_hour_friday" id="start_hour_friday">
		   	<option value="N/A">N/A</option>
		   	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="start_minute_friday" id="start_minute_friday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_friday" id="start_period_friday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_friday" id="end_hour_friday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_friday" id="end_minute_friday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_friday" id="end_period_friday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput">
           <span class="darkFont">Saturday:</span>
        </td>
        <td class="tdInput">
           <select name="start_hour_saturday" id="start_hour_saturday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="start_minute_saturday" id="start_minute_saturday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="start_period_saturday" id="start_period_saturday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
        <td class="tdInput"><span>to</span></td>
        <td class="tdInput">
           <select name="end_hour_saturday" id="end_hour_saturday">
           	<option value="N/A">N/A</option>
           	<?php
				list_hours();
			?>
           </select>
           <span>:</span>
           <select name="end_minute_saturday" id="end_minute_saturday">
           	<option value="N/A">N/A</option>
           	<?php
				list_minutes();
			?>
           </select>
           <select name="end_period_saturday" id="end_period_saturday">
           	<option value="N/A">N/A</option>
           	<option value="am" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'am') { echo 'selected = "selected"'; }?>>am</option>
            <option value="pm" <?php if (!empty($start_period_sunday) && $start_period_sunday == 'pm') { echo 'selected = "selected"'; }?>>pm</option>
           </select>
        </td>
      </tr>
      <tr class="trLength">
      	<td class="tdLength">
      		<label for="able_to_perform" class="label_setting_style">Are you able to perform the essential functions of the job for which you are applying, either with / without reasonable accommodation?</label>
      	</td>
	  	<td class="tdInput">
	  	    <select name="able_to_perform" id="able_to_perform">
	  	    <option>--</option>
            <option value="Yes" <?php if (!empty($able_to_perform) && $able_to_perform == 'Yes') { echo 'selected = "selected"'; }?>>Yes</option>
            <option value="No" <?php if (!empty($able_to_perform) && $able_to_perform == 'No') { echo 'selected = "selected"'; }?>>No</option>
           </select>
  	    </td>
      </tr>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="ever_convicted" class="label_setting_style">Have you ever been convicted of a felony offense?</label>
        </td>
	  	<td class="tdInput">
	  	  <select name="ever_convicted" id="ever_convicted">
	  	  	<option>--</option>
            <option value="Yes" <?php if (!empty($ever_convicted) && $ever_convicted == 'Yes') { echo 'selected = "selected"'; }?>>Yes</option>
            <option value="No" <?php if (!empty($ever_convicted) && $ever_convicted == 'No') { echo 'selected = "selected"'; }?>>No</option>
           </select>
  	    </td>
      </tr>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="veteran_question" class="label_setting_style">Are you a veteran?</label>
        </td>
	  	<td class="tdInput">
	  	  <select name="veteran_question" id="veteran_question">
	  	  	<option>--</option>
            <option value="Yes" <?php if (!empty($veteran_question) && $veteran_question == 'Yes') { echo 'selected = "selected"'; }?>>Yes</option>
            <option value="No" <?php if (!empty($veteran_question) && $veteran_question == 'No') { echo 'selected = "selected"'; }?>>No</option>
           </select>
  	    </td>
      </tr>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="drug_test" class="label_setting_style">If hired, are you willing to submit to and pass a controlled substance test?</label>
        </td>
	  	<td class="tdInput">
	  	  <select name="drug_test" id="drug_test">
	  	  	<option>--</option>
            <option value="Yes" <?php if (!empty($drug_test) && $drug_test == 'Yes') { echo 'selected = "selected"'; }?>>Yes</option>
            <option value="No" <?php if (!empty($drug_test) && $drug_test == 'No') { echo 'selected = "selected"'; }?>>No</option>
           </select>
  	    </td>
      </tr>
      <tr class="trLength">
        <td class="tdLength">
        	<label for="racial_background" class="label_setting_style">Racial Background</label>
        </td>
        <td class="tdInput">
          <select name="racial_background" id="racial_background">
            <option>Select One:</option>
            <option value="White" <?php if (!empty($racial_background) && $racial_background == 'White') { echo 'selected = "selected"'; }?>>White/Caucasian</option>
            <option value="Black" <?php if (!empty($racial_background) && $racial_background == 'Black') { echo 'selected = "selected"'; }?>>Black/African American</option>
            <option value="Hispanic" <?php if (!empty($racial_background) && $racial_background == 'Hispanic') { echo 'selected = "selected"'; }?>>Hispanic/Latino</option>
            <option value="Asian" <?php if (!empty($racial_background) && $racial_background == 'Asian') { echo 'selected = "selected"'; }?>>Asian</option>
            <option value="Multiracial" <?php if (!empty($racial_background) && $racial_background == 'Multiracial') { echo 'selected = "selected"'; }?>>Multiracial</option>
            <option value="Other" <?php if (!empty($racial_background) && $racial_background == 'Other') { echo 'selected = "selected"'; }?>>Other</option>         
          </select>
        </td>
      </tr>
      <tr class="trLength">
        <td class="tdInput">
        	<input type="submit" name="submit" value="Submit">
        </td>
      </tr>
    </table>
    </form>
  </section>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>