
$.validator.addMethod(
	"dateBangladesh",
	function(value, element) {
		return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
	},
	"Please enter a date in the format dd/mm/yyyy."
);

jQuery.validator.addMethod("phone", function (phone_number, element) {
	phone_number = phone_number.replace(/\s+/g, "");
	return this.optional(element) || phone_number.length > 9 &&
		  phone_number.match(/^(?:\+?8801|008801)?[15-9]\d{8}$/);
}, "Invalid mobile number. eg: +8801XXXXXXXXX or 008801XXXXXXXXX");

var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
				},
				
                rules: {
                    "name-bn": {
                        required: !0,
                        minlength: 3
                    },
                    "name-en": {
                        required: !0,
                        minlength: 3
                    },
                    "fname": {
                        required: !0,
                        minlength: 3
                    },
                    "mname": {
                        required: !0,
                        minlength: 3
                    },
                    "mobile": {
						required: !0,
						phone:!0
                    },
                    "fbid": {
                        required: !0,
                        minlength: 3
                    },
                    "email": {
                        required: !0,
                        email: !0
                    },
                    "bgroup": {
                        required: !0,
                    },
                    "dob":{
						required: !0,
						dateBangladesh:!0
					},
                    "gender":{
						required: !0,
					},
                    "religion":{
						required: !0,
					},
                    "occupation":{
						required: !0,
                        minlength: 3
					},
                    "institute":{
						required: !0,
                        minlength: 3
					},
                    "eduquali":{
						required: !0,
						minlength: 3
					},
                    "nidno":{
						minlength: 13
					},
                    "per-village":{
						required: !0,
						minlength: 3
					},
                    "per-poffice":{
						required: !0,
						minlength: 3
					},
                    "per-thana":{
						required: !0,
						minlength: 3
					},
                    "per-upzilla":{
						required: !0,
						minlength: 3
					},
                    "per-zilla":{
						required: !0,
						minlength: 3
					},
                    "per-division":{
						required: !0,
						minlength: 3
					},
                    "pre-village":{
						required: !0,
						minlength: 3
					},
                    "pre-poffice":{
						required: !0,
						minlength: 3
					},
                    "pre-thana":{
						required: !0,
						minlength: 3
					},
                    "pre-upzilla":{
						required: !0,
						minlength: 3
					},
                    "pre-zilla":{
						required: !0,
						minlength: 3
					},
                    "pre-division":{
						required: !0,
						minlength: 3
					},
                    "password":{
						required: !0,
						minlength: 6
					},
                    "confirm-password":{
						required: !0,
						equalTo:"#password"
					},
                },
                messages: {
					"bgroup": "Please select a blood group from dropdown list",
                    "gender": "Please select a gender",
                    "religion": "Please select a religin from dropdown list",
					"password": {
                        required: "Please enter password",
                        minlength: "Your password must consist of at least 6 characters"
                    },

                    "confirm-password": "Please enter same password!",
                }
            });
        }
    return {
        init: function() {
            e(), a(), on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});
