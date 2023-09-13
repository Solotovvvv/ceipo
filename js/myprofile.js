$(document).ready(function(){
  $("#inputSurname").hide();
  $("#inputFirstname").hide();
  $("#inputMiddlename").hide();
  $("#inputAge").hide();
  $("#inputAddress").hide();
  $("#inputContactnumber").hide();

  $("#btnsave").hide();
  $("#btncancel").hide();

  $("#btnupdate").click(function(){
    $("#btnupdate").hide();
    $("#btnsave").show();
    $("#btncancel").show();

    $("#inputSurname").show();
    $("#inputFirstname").show();
    $("#inputMiddlename").show();
    $("#inputAge").show();
    $("#inputAddress").show();
    $("#inputContactnumber").show();

    $("p.dispname").hide();
    $("p.dispage").hide();
    $("p.dispaddress").hide();
    $("p.dispcontactnumber").hide();
  })

  $("#btnsave").click(function(){
    $("#btnupdate").show();
    $("#btnsave").hide();
    $("#btncancel").hide();

    $("#inputSurname").hide();
    $("#inputFirstname").hide();
    $("#inputMiddlename").hide();
    $("#inputAge").hide();
    $("#inputAddress").hide();
    $("#inputContactnumber").hide();

    $("p.dispname").show();
    $("p.dispage").show();
    $("p.dispaddress").show();
    $("p.dispcontactnumber").show();
  })

  $("#btncancel").click(function(){
    $("#btnupdate").show();
    $("#btnsave").hide();
    $("#btncancel").hide();

    $("#inputSurname").hide();
    $("#inputFirstname").hide();
    $("#inputMiddlename").hide();
    $("#inputAge").hide();
    $("#inputAddress").hide();
    $("#inputContactnumber").hide();

    $("p.dispname").show();
    $("p.dispage").show();
    $("p.dispaddress").show();
    $("p.dispcontactnumber").show();
  });

});

function UpdateInfo(){
  var form_data = new FormData();

   var token          =$('#token').val();
   var surname        =$('#inputSurname').val();
   var firstname      =$('#inputFirstname').val();
   var middlename     =$('#inputMiddlename').val();
   var age            =$('#inputAge').val();
   var address        =$('#inputAddress').val();
   var contactnumber  =$('#inputContactnumber').val();


   form_data.append('token',token);
   form_data.append('surname',surname);
   form_data.append('firstname',firstname);
   form_data.append('middlename',middlename);
   form_data.append('age',age);
   form_data.append('address',address);
   form_data.append('contactnumber',contactnumber);

   var PhpFile='updatemyprofile.php';
   $.ajax({
    url: PhpFile, //php file
    method: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend: function (rs) {
      $("#err_msg").html(
        '<center><img src="asset/images/loading.gif"/><br/><small>Loading Information...</small></center>'
      );
    },
    success: function (rs) {
      var res = JSON.parse(rs);
      $("#idName").html(res[0]["Name"]);
      $("#idAge").html(res[0]["Age"]);
      $("#idAddress").html(res[0]["Address"]);
      $("#idContactnumber").html(res[0]["ContactNumber"]);
    },
    async: true,
    error: function (e) {
      console.log(e);
    },
  });
}
