'use strict'

const ratingElements = [...document.querySelectorAll('.rating-star')]

function executeRating(stars) {
    let rateValue

    stars.map(star => {
        star.addEventListener('click',() => {
            rateValue = stars.indexOf(star) + 1
            $.post("/actions/rate.php", {rate: rateValue});
        })
    })
}

executeRating(ratingElements)