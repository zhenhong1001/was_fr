// JavaScript Document

//radio button
$(function () {
        $("input[name='inlineRadioOptions']").click(function () {
            if ($("#student").is(":checked")) {
                $("#nameInput").removeAttr("disabled");
				$("#emailInput").removeAttr("disabled");
				$("#passwordInput").removeAttr("disabled");
				$("#re_enter_passwordInput").removeAttr("disabled");
				$("#mobileNumberInput").removeAttr("disabled");
				$("#address_line_1Input").removeAttr("disabled");
				$("#address_line_2Input").removeAttr("disabled");
				$("#postcodeInput").removeAttr("disabled");
				$("#stateInput").removeAttr("disabled");
				$("#countryInput").removeAttr("disabled");
				$("#inputGroupFile").removeAttr("disabled");
            } else {
				$("#nameInput").removeAttr("disabled");
				$("#emailInput").removeAttr("disabled");
				$("#passwordInput").removeAttr("disabled");
				$("#re_enter_passwordInput").removeAttr("disabled");
				$("#mobileNumberInput").removeAttr("disabled");
                $("#address_line_1Input").attr("disabled", "disabled");
				$("#address_line_2Input").attr("disabled", "disabled");
				$("#postcodeInput").attr("disabled", "disabled");
				$("#stateInput").attr("disabled", "disabled");
				$("#countryInput").attr("disabled", "disabled");
				$("#inputGroupFile").attr("disabled", "disabled");				
            }
        });
    });
