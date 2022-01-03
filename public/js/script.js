$(document).ready(function() {
    $('#btn-mobile').click(function() {
        $('#menu-mobile').slideToggle('slow')
        $(this).slideToggle('slow')
    })

    $('#btn-close').click(function() {
        $('#btn-mobile').slideToggle('slow')
        $('#menu-mobile').slideToggle('slow')
    })

    $('#click-dropdown').click(function () {
        $('#dropdown-logout').slideToggle()
    }) 

})