// Add this JavaScript code to toggle the dropdown
$(document).ready(function() {
    $('.profile-dropdown').hover(function() {
        $(this).find('.dropdown').toggle();
    });
});
