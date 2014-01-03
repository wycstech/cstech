$( "#d1-1" ).on( "click", function( event ) {
    event.preventDefault();
    CSTECH.sendRequest('form', 'defaultForm');
    //CSTECH.sendRequest('table', 'defaultTable');
});
