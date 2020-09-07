
$(document).ready(function () {
    // console.log('hello');
    // var choice = new Choices('#category', {
    //     removeItemButton: true,
    //     maxItemCount: 6,
    //     searchResultLimit: 6,
    //     renderChoiceLimit: 6,
    //     noResultsText: 'Не беа пронајдени резултати',
    //     itemSelectText: 'Избери',
    // });


    $("#storeUser").validate({
        // Specify validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
            category: {
                required: true,
            }
        },
        messages: {
            email: "Please enter your email",
            category: "Please izberi bar 1 kategorija"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

});


