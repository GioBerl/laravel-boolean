require("./bootstrap");

var $ = require("jquery");

$(document).ready(function() {
    // $("i.fa-plus").click(function() {
    //     var currentAnswer = $(this)
    //         .closest(".questions")
    //         .next(".answers");

    //     if (currentAnswer.is(":visible")) {
    //         currentAnswer.slideUp();
    //     } else {
    //         $(".answers").slideUp();
    //         currentAnswer.slideDown();
    //     }
    // });
    $(".questions").click(function() {
        var currentAnswer = $(this).next(".answers");
        var currentIcon = $(this).find("i");
        var otherIcons = $(".questions i").not(currentIcon);

        if (currentAnswer.is(":visible")) {
            currentAnswer.slideUp();
            if (otherIcons.hasClass("fa-minus")) {
                otherIcons.removeClass("fa-minus");
                otherIcons.addClass("fa-plus");
            }
            currentIcon.toggleClass("fa-minus fa-plus");
        } else {
            $(".answers").slideUp();
            currentAnswer.slideDown();
            if (otherIcons.hasClass("fa-minus")) {
                otherIcons.removeClass("fa-minus");
                otherIcons.addClass("fa-plus");
            }
            currentIcon.toggleClass("fa-plus fa-minus");
        }
    });
});
