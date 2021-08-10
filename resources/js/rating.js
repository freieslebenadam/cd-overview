// 'use strict'

// const ratingElements = [...document.querySelectorAll('.rating-star')]

// function executeRating(stars) {
//     const starClassActive = "fas fa-star rating-star"
//     const starClassInactive = "far fa-star rating-star"
//     const starsLength = stars.length
//     let i;

//     stars.map(star => {
//         star.addEventListener('click',() => {
//             i = stars.indexOf(star);

//             if (star.className === starClassInactive) {
//                 for (i; i>= 0; --i) { stars[i].className = starClassActive }
//             } else {
//                 for (i; i < starsLength; ++i) { stars[i].className = starClassInactive }
//             }
//         })
//     })
// }

// executeRating(ratingElements)
