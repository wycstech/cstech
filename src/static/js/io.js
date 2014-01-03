CSTECH.sendRequest = function (partialTemplate, partialData) {
    $.ajax({
      url: "/src/frontend/ajax/getTable.php",
      data: {
        partialTemplate: partialTemplate,
        partialData: partialData
      },
      success: function(data) {
        $("#main").html(data);
      }
    });
}
