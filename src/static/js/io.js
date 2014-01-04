CSTECH.sendRequest = function (id) {
    $.ajax({
      url: "/src/frontend/ajax/getTable.php",
      data: {
        id: id,
      },
      success: function(data) {
        $("#main").html(data);
      }
    });
}
