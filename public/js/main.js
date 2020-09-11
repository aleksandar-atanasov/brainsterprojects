
$(document).ready(function () {
    var choice = new Choices('#category', {
        removeItemButton: true,
        maxItemCount: 6,
        searchResultLimit: 6,
        renderChoiceLimit: 6,
        noResultsText: 'Не беа пронајдени резултати',
        itemSelectText: 'Избери',
    });
});


