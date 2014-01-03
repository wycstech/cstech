CSTECH.sendRequest = function (partialTamplate, partialData) {
    $.ajax({
      url: "/src/frontend/ajax/getTable.php",
      data: {
        partialTemplate: "form",
        partialData: "defaultForm"
      },
      success: function(data) {
        $("#main").html(data);
      }
    });
}
