$( document ).ready(function() {
    
    // Change title font depending on width
    var titleLength = $('.entry-title').text().length;
    var maxLength = 28;
    var headerFontRatio = titleLength / maxLength;
    var blockWidth = $('.entry-header').innerWidth();
    var currentFontSize = $('.entry-title').css('font-size').slice(0,-2);
    parseInt(currentFontSize);
    if (titleLength > 28) {
        newFontSize = currentFontSize / headerFontRatio;
        $('.single-post h1').css('font-size', newFontSize + "px");
    }
});