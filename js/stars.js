jQuery(function(){
    jQuery(document).ready(function(){
        // ADD RATING WIDGET
        var currentRating = jQuery('input[name="stars"]').val();
        var ratingElement = jQuery('.c-rating').get(0);
        var callback = function(rating) { jQuery('input[name="stars"]').val(rating); };
        var r = rating(ratingElement, currentRating, 5, callback);

    });
});
