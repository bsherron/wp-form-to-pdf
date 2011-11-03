<?php if ($_GET['msg'] == 1) { ?>
<p><?php echo get_option("wpftpdf_thankyou"); ?></p>
<?php
} 
else {
?>

<h4>Application Form</h4>
<form action="/wp-content/plugins/wp-form-to-pdf/create-pdf.php" method="post" target="_blank" id="dekoboko_form">
<input type="hidden" name="template_name" id="template_name" value="<?php echo $form; ?>" />
<input type="hidden" name="return_url" id="return_url" value="http://<?php echo htmlentities($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ); ?>" />
<fieldset>
	<legend>Personal Details</legend>
	<ol>
		<li>
		    <label for="uk_name">Name<span class="dekoboko_required">*</span></label>
		    <input type="text" name="uk_name" id="uk_name"  size="30" />
		</li>
		<li>
		    <label for="uk_address">Address<span class="dekoboko_required">*</span></label>
		    <textarea name="uk_address" id="uk_address"  size="30"></textarea>
		</li>
		<li>
		    <label for="uk_telephone_daytime">Telephone (daytime)<span class="dekoboko_required">*</span></label>
		    <input type="text" name="uk_telephone_daytime" id="uk_telephone_daytime"  size="30" />
		</li>
		<li>
		    <label for="uk_telephone_mobile">Telephone (mobile)</label>
		    <input type="text" name="uk_telephone_mobile" id="uk_telephone_mobile"  size="30" />
		</li>
		<li>
		    <label for="uk_email">Email<span class="dekoboko_required">*</span></label>
		    <input type="text" name="uk_email" id="uk_email"  size="30" />
		</li>
	</ol>
</fieldset>
<fieldset>
	<legend>Education</legend>
	<p class="explain">Only enter details of secondary or further/higher education.</p>
	<ol>
		<li>
		    <label for="uk_education_from_1">From (mm/yy)</label>
		    <input type="text" name="uk_education_from_1" id="uk_education_from_1"  size="30" />
		</li>
		<li>
		    <label for="uk_education_to_1">To (mm/yy)</label>
		    <input type="text" name="uk_education_to_1" id="uk_education_to_1"  size="30" />
		</li>
		<li>
		    <label for="uk_education_institution_1">Name of Institution</label>
		    <input type="text" name="uk_education_institution_1" id="uk_education_institution_1"  size="30" />
		</li>
		<li>
		    <label for="uk_education_subject_1">Subject &amp; Grade</label>
		    <input type="text" name="uk_education_subject_1" id="uk_education_subject_1"  size="30" />
		</li>
	</ol>
		<ol>
		<li>
		    <label for="uk_education_from_2">From (mm/yy)</label>
		    <input type="text" name="uk_education_from_2" id="uk_education_from_2"  size="30" />
		</li>
		<li>
		    <label for="uk_education_to_2">To (mm/yy)</label>
		    <input type="text" name="uk_education_to_2" id="uk_education_to_2"  size="30" />
		</li>
		<li>
		    <label for="uk_education_institution_2">Name of Institution</label>
		    <input type="text" name="uk_education_institution_2" id="uk_education_institution_2"  size="30" />
		</li>
		<li>
		    <label for="uk_education_subject_2">Subject &amp; Grade</label>
		    <input type="text" name="uk_education_subject_2" id="uk_education_subject_2"  size="30" />
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_education_from_3">From (mm/yy)</label>
		    <input type="text" name="uk_education_from_3" id="uk_education_from_3"  size="30" />
		</li>
		<li>
		    <label for="uk_education_to_3">To (mm/yy)</label>
		    <input type="text" name="uk_education_to_3" id="uk_education_to_3"  size="30" />
		</li>
		<li>
		    <label for="uk_education_institution_3">Name of Institution</label>
		    <input type="text" name="uk_education_institution_3" id="uk_education_institution_3"  size="30" />
		</li>
		<li>
		    <label for="uk_education_subject_3">Subject &amp; Grade</label>
		    <input type="text" name="uk_education_subject_3" id="uk_education_subject_3"  size="30" />
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_education_from_4">From (mm/yy)</label>
		    <input type="text" name="uk_education_from_4" id="uk_education_from_4"  size="30" />
		</li>
		<li>
		    <label for="uk_education_to_4">To (mm/yy)</label>
		    <input type="text" name="uk_education_to_4" id="uk_education_to_4"  size="30" />
		</li>
		<li>
		    <label for="uk_education_institution_4">Name of Institution</label>
		    <input type="text" name="uk_education_institution_4" id="uk_education_institution_4"  size="30" />
		</li>
		<li>
		    <label for="uk_education_subject_4">Subject &amp; Grade</label>
		    <input type="text" name="uk_education_subject_4" id="uk_education_subject_4"  size="30" />
		</li>
	</ol>
</fieldset>
<fieldset>
	<legend>Relevant Work Experience</legend>
	<p class="explain">To support your application further please summarise any work experience that you believe is relevant to your application for a career in PR or Public Affairs.</p>
	<ol>
		<li>
		    <label for="uk_work_from_1">From (mm/yy)</label>
		    <input type="text" name="uk_work_from_1" id="uk_work_from_1"  size="30" />
		</li>
		<li>
		    <label for="uk_work_to_1">To (mm/yy)</label>
		    <input type="text" name="uk_work_to_1" id="uk_work_to_1"  size="30" />
		</li>
		<li>
		    <label for="uk_work_employer_1">Employer's Name &amp; Address</label>
		    <textarea name="uk_work_employer_1" id="uk_work_employer_1"></textarea>
		</li>
		<li>
		    <label for="uk_work_nature_1">Nature of Employment</label>
		    <textarea name="uk_work_nature_1" id="uk_work_nature_1"></textarea>
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_work_from_2">From (mm/yy)</label>
		    <input type="text" name="uk_work_from_2" id="uk_work_from_2"  size="30" />
		</li>
		<li>
		    <label for="uk_work_to_2">To (mm/yy)</label>
		    <input type="text" name="uk_work_to_2" id="uk_work_to_2"  size="30" />
		</li>
		<li>
		    <label for="uk_work_employer_2">Employer's Name &amp; Address</label>
		    <textarea name="uk_work_employer_2" id="uk_work_employer_2"></textarea>
		</li>
		<li>
		    <label for="uk_work_nature_2">Nature of Employment</label>
		    <textarea name="uk_work_nature_2" id="uk_work_nature_2"></textarea>
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_work_from_3">From (mm/yy)</label>
		    <input type="text" name="uk_work_from_3" id="uk_work_from_3"  size="30" />
		</li>
		<li>
		    <label for="uk_work_to_3">To (mm/yy)</label>
		    <input type="text" name="uk_work_to_3" id="uk_work_to_3"  size="30" />
		</li>
		<li>
		    <label for="uk_work_employer_3">Employer's Name &amp; Address</label>
		    <textarea name="uk_work_employer_3" id="uk_work_employer_3"></textarea>
		</li>
		<li>
		    <label for="uk_work_nature_3">Nature of Employment</label>
		    <textarea name="uk_work_nature_3" id="uk_work_nature_3"></textarea>
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_work_from_4">From (mm/yy)</label>
		    <input type="text" name="uk_work_from_4" id="uk_work_from_4"  size="30" />
		</li>
		<li>
		    <label for="uk_work_to_4">To (mm/yy)</label>
		    <input type="text" name="uk_work_to_4" id="uk_work_to_4"  size="30" />
		</li>
		<li>
		    <label for="uk_work_employer_4">Employer's Name &amp; Address</label>
		    <textarea name="uk_work_employer_4" id="uk_work_employer_4"></textarea>
		</li>
		<li>
		    <label for="uk_work_nature_4">Nature of Employment</label>
		    <textarea name="uk_work_nature_4" id="uk_work_nature_4"></textarea>
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_work_from_5">From (mm/yy)</label>
		    <input type="text" name="uk_work_from_5" id="uk_work_from_5"  size="30" />
		</li>
		<li>
		    <label for="uk_work_to_5">To (mm/yy)</label>
		    <input type="text" name="uk_work_to_5" id="uk_work_to_5"  size="30" />
		</li>
		<li>
		    <label for="uk_work_employer_5">Employer's Name &amp; Address</label>
		    <textarea name="uk_work_employer_5" id="uk_work_employer_5"></textarea>
		</li>
		<li>
		    <label for="uk_work_nature_5">Nature of Employment</label>
		    <textarea name="uk_work_nature_5" id="uk_work_nature_5"></textarea>
		</li>
	</ol>
	<ol>
		<li>
		    <label for="uk_work_from_6">From (mm/yy)</label>
		    <input type="text" name="uk_work_from_6" id="uk_work_from_6"  size="30" />
		</li>
		<li>
		    <label for="uk_work_to_6">To (mm/yy)</label>
		    <input type="text" name="uk_work_to_6" id="uk_work_to_6"  size="30" />
		</li>
		<li>
		    <label for="uk_work_employer_6">Employer's Name &amp; Address</label>
		    <textarea name="uk_work_employer_6" id="uk_work_employer_6"></textarea>
		</li>
		<li>
		    <label for="uk_work_nature_6">Nature of Employment</label>
		    <textarea name="uk_work_nature_6" id="uk_work_nature_6"></textarea>
		</li>
	</ol>	
</fieldset>
<fieldset>
	<legend>Please answer the following questions to support your application</legend>
	<ol>
		<li>
		    <label for="uk_essay_1">Please provide an example of an activity or event that required you to work as part of a team to achieve a particular objective.  What was this activity, your role and the key learnings?</label>
		    <textarea name="uk_essay_1" id="uk_essay_1"></textarea>
		</li>
		<li>
		    <label for="uk_essay_2">In terms of leadership skills, who has personally inspired you and why.  This could be either someone you know or a public figure.</label>
		    <textarea name="uk_essay_2" id="uk_essay_2"></textarea>
		</li>
		<li>
		    <label for="uk_essay_3">If you were successful in your application, what would you like to achieve by the end of the 9 months?</label>
		    <textarea name="uk_essay_3" id="uk_essay_3"></textarea>
		</li>
	</ol>
</fieldset>
<fieldset>
	<legend>Please indicate your practice area preferences</legend>
	<p class="explain">Please list in order of preference, 1 being your 1st choice.</p>
	<ol>
		<li><label for="uk_pref_consumer"><input type="text" name="uk_pref_consumer" id="uk_pref_consumer" size="2"> Consumer</label></li>
		<li><label for="uk_pref_digital"><input type="text" name="uk_pref_digital" id="uk_pref_digital" size="2"> Digital</label></li>
		<li><label for="uk_pref_healthcare"><input type="text" name="uk_pref_healthcare" id="uk_pref_healthcare" size="2"> Ethical Healthcare &amp; Medical Education</label></li>
		<li><label for="uk_pref_public_affairs"><input type="text" name="uk_pref_public_affairs" id="uk_pref_public_affairs" size="2"> Public Affairs &amp; Corporate</label></li>
		<li><label for="uk_pref_technology"><input type="text" name="uk_pref_technology" id="uk_pref_technology" size="2"> Technology</label></li>
		<li><label for="uk_pref_financial_services"><input type="text" name="uk_pref_financial_services" id="uk_pref_financial_services" size="2"> Financial Services</label></li>
	</ol>
</fieldset>
<fieldset>
	<legend>Referrals</legend>
	<p class="explain">Referrals will only be contacted if you are offered a position.</p>
<ol>
	<li>
		<label for="uk_referral_title_1">Title</label>
		<input type="text" name="uk_referral_title_1" id="uk_referral_title_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_surname_1">Surname</label>
		<input type="text" name="uk_referral_surname_1" id="uk_referral_surname_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_first_name_1">First Name</label>
		<input type="text" name="uk_referral_first_name_1" id="uk_referral_first_name_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_occupation_1">Occupation</label>
		<input type="text" name="uk_referral_occupation_1" id="uk_referral_occupation_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_relationship_1">Relationship to applicant</label>
		<input type="text" name="uk_referral_relationship_1" id="uk_referral_relationship_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_address_1">Address</label>
		<textarea name="uk_referral_address_1" id="uk_referral_address_1"></textarea>
	</li>
	<li>
		<label for="uk_referral_telephone_1">Telephone</label>
		<input type="text" name="uk_referral_telephone_1" id="uk_referral_telephone_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_fax_1">Fax</label>
		<input type="text" name="uk_referral_fax_1" id="uk_referral_fax_1"  size="30" />
	</li>
	<li>
		<label for="uk_referral_email_1">Email</label>
		<input type="text" name="uk_referral_email_1" id="uk_referral_email_1"  size="30" />
	</li>
</ol>	

<ol>
	<li>
		<label for="uk_referral_title_2">Title</label>
		<input type="text" name="uk_referral_title_2" id="uk_referral_title_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_surname_2">Surname</label>
		<input type="text" name="uk_referral_surname_2" id="uk_referral_surname_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_first_name_2">First Name</label>
		<input type="text" name="uk_referral_first_name_2" id="uk_referral_first_name_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_occupation_2">Occupation</label>
		<input type="text" name="uk_referral_occupation_2" id="uk_referral_occupation_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_relationship_2">Relationship to applicant</label>
		<input type="text" name="uk_referral_relationship_2" id="uk_referral_relationship_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_address_2">Address</label>
		<textarea name="uk_referral_address_2" id="uk_referral_address_2"></textarea>
	</li>
	<li>
		<label for="uk_referral_telephone_2">Telephone</label>
		<input type="text" name="uk_referral_telephone_2" id="uk_referral_telephone_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_fax_2">Fax</label>
		<input type="text" name="uk_referral_fax_2" id="uk_referral_fax_2"  size="30" />
	</li>
	<li>
		<label for="uk_referral_email_2">Email</label>
		<input type="text" name="uk_referral_email_2" id="uk_referral_email_2"  size="30" />
	</li>
</ol>
<ol>
	<li><input type="submit" name="submit" id="submit" value="Submit Application" /></li>
</ol>
 
</fieldset>
</form>

<?php 
} //end else
?>