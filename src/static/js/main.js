$("#navbar>li .dropdown-menu").each(function() {
    $(this).delegate("a", "click", getContent);
});
function getContent (event) {
    event.preventDefault();
    console.log(this);
    console.log($(this));
    CSTECH.sendRequest($(this).attr('id'));
    console.log($(this).attr('id'));
};
