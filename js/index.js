var employee_number = document.getElementById("employee_number").value;
submitOK = "true";

if (employee_number.length > 10) {
  alert("The name may have no more than 10 characters");
  submitOK = "false";
}