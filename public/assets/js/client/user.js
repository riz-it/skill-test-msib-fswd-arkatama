$(document).ready(function () {
  $("#biodata").submit(function (e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      dataType: "json",
      beforeSend: function () {
        toastr["info"]("Loading..");
      },
      complete: function () {
        
      },
      success: function (response) {
        if (response.error) {
            toastr["error"]("Data gagal disimpan.");
            if (response.error.userData) {
                toastr["warning"]("Pastikan biodata valid.");
            } else {
              
            }
            
          } else {
            toastr["success"]("Data berhasil disimpan.");
           
            $("#biodata")[0].reset();
          }
      },
    });
    return false;
  });
});

function validasiKoma(input) {
   
   $("#userData").val(input.replace(/,/g, ""));
}
