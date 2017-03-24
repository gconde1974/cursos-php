var $ = function (id) {
	return document.getElementById(id);
}

var joinList = function () {
	var emailAddress1 = $("email-address1").value;
	var emailAddress2 = $("email-address2").value;
	var isValid = true;

	if (emailAddress1 == "") {
		$("email-address1-error").firstChild.nodeValue = "this field is required";
		isValid = false;
	} else {
		$("email-address1-error").firstChild.nodeValue = "";
	}

	if (emailAddress2 == "") {
		$("email-address2-error").firstChild.nodeValue = "this field is required";
		isValid = false;
	} else {
		$("email-address2-error").firstChild.nodeValue = "";
	}

	if ($("first-name").value == "") {
		$("first-name-error").firstChild.nodeValue = "this field is required";
		isValid = false;
	} else {
		$("first-name-error").firstChild.nodeValue = "";
	}

	if (isValid) {
		//submit the form if all entries are valid
		$("email-form").submit();
	}
}

window.onload = function () {
	$("join-list").onclick = joinList;
	$("email-address").focus();
}