function V_signup(argument) {
  
  
  var name = document.getElementById('name').value;
  var pass1 = document.getElementById('pass1').value;
  var pass2 = document.getElementById('pass2').value;
  var type = document.getElementById('type').value;



}

function valid_uname()
{
  var uid = document.getElementById('id').value;
  if (uid=="") {
    alert('Empty field in ID');
  }


function valid_email()
{
  



}


function valid_email()
{
  var email = document.getElementById('email').value;
    function valid(email)
    {
      if (email.indexOf("@") == -1) {
            return false;
        }
        var parts = email.split("@");
        var dot = parts[1].indexOf(".");

        var len = parts[1].length;
        var dotSplits = parts[1].split(".");
        var dotCount = dotSplits.length - 1;


        if (dot == -1 || dot < 2 || dotCount > 2) {
            return false;
        }

        for (var i = 0; i < dotSplits.length; i++) {
            if (dotSplits[i].length == 0) {
                return false;
            }
        }

        return true;

             }