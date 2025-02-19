// Comment form 
jQuery(document).ready(function() {
	"use strict";
	
	// ----------------------- Comment form submit ----------------
	jQuery("form#commentform .sc_form_button .sc_button").click(function(e) {
		"use strict";
		jQuery(this).parents('form#commentform').find('#send_comment').trigger('click');
		e.preventDefault();
		return false;
	});
	jQuery("form#commentform").submit(function(e) {
		"use strict";
		var rez = themerex_comments_validate(jQuery(this));
		if (!rez) { e.preventDefault(); }
		return rez;
	});
	
	jQuery("form#commentform .sc_result + .sc_columns_3").each(function() {
		"use strict";
		var fields = jQuery(this);
		jQuery(this).parents('form#commentform').prepend(fields);
		return false;
	 });
});

function themerex_comments_validate(form) {
	"use strict";
	var error = formValidate(form, {
		error_message_text: THEMEREX_GLOBAL_ERROR_TEXT,	// Global error message text (if don't write in checked field)
		error_message_show: true,				// Display or not error message
		error_message_time: 5000,				// Error message display time
		error_message_class: 'sc_infobox sc_infobox_style_error',	// Class appended to error message block
		error_fields_class: 'error_fields_class',					// Class appended to error fields
		exit_after_first_error: false,								// Cancel validation and exit after first error
		rules: [
			{
				field: 'author',
				min_length: { value: 1, message: THEMEREX_NAME_EMPTY},
				max_length: { value: 60, message: THEMEREX_NAME_LONG}
			},
			{
				field: 'email',
				min_length: { value: 7, message: THEMEREX_EMAIL_EMPTY},
				max_length: { value: 60, message: THEMEREX_EMAIL_LONG},
				mask: { value: THEMEREX_EMAIL_MASK, message: THEMEREX_EMAIL_NOT_VALID }
			},
			{
				field: 'comment',
				min_length: { value: 1, message: THEMEREX_MESSAGE_EMPTY },
				max_length: { value: 1000, message: THEMEREX_MESSAGE_LONG}
			}
		]
	});
	return !error;
}
