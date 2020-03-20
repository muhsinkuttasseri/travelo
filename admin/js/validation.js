var textRegx = new RegExp("^[a-zA-Z]{3,}$");
var unameRegx = new RegExp("^[a-zA-Z0-9]{3,}$");
var formSubmit = false;
var label = document.getElementsByClassName("input-label");

$("input[name=fname]").on("keyup", function() {
  if (!textRegx.test(this.value)) {
    $(label[0]).css("border-color", "red");
    return (formSubmit = false);
  } else {
    $(label[0]).css("border-color", "grey");
    return (formSubmit = true);
  }
});
$("input[name=lname]").on("keyup", function() {
  if (!textRegx.test(this.value)) {
    $(label[1]).css("border-color", "red");
    return (formSubmit = false);
  } else {
    $(label[1]).css("border-color", "grey");
    return (formSubmit = true);
  }
});
$("input[name=uname]").on("keyup", function() {
  if (!unameRegx.test(this.value)) {
    $(label[3]).css("border-color", "red");
    return (formSubmit = false);
  } else {
    $(label[3]).css("border-color", "grey");
    return (formSubmit = true);
  }
});

$("input[type=password]").on("keyup", function() {
  if (
    $("input[name=pwd]").val() != $("input[name=repwd]").val() ||
    $.trim($("input[name=repwd]").val()) == ""
  ) {
    $(label[6]).css("border-color", "red");
    return (formSubmit = false);
  } else {
    $(label[6]).css("border-color", "grey");
    return (formSubmit = true);
  }
});

$("form").submit(function(e) {
  if (formSubmit == false) {
    e.preventDefault();
  }
});
