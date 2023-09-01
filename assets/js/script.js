openSummary()

function openSummary() {
    document.querySelectorAll(".content-courses__item").forEach(currentSummary => {
        const currentContent = currentSummary.querySelector(".content-courses__text")
        currentSummary.addEventListener("click", evt => {
            currentContent.style.height = currentContent.scrollHeight + 'px'
            if (currentSummary.classList.contains("active")) currentContent.style.height = null
            currentSummary.classList.toggle("active");
        })
    })
}



mySort('data-price');
document.querySelector('.filter__btn-list').addEventListener('change', evt => {

    const selectedValue = event.target.value;

    if(+selectedValue === 1) {
        mySort('level');

    }
    if(+selectedValue === 2){
        mySortDesc('level');

    }
    if(+selectedValue === 3) {
        mySort('data-price');

    }
    if(+selectedValue === 4){
        mySortDesc('data-price');

    }
    if(+selectedValue === 5) {
        mySortDesc('rating');

    }
    if(+selectedValue === 6){
        mySortDesc('reviews');

    }

})


function mySort(sortType) {
    let nav = document.querySelector('.filter');
    for (let i = 0; i < nav.children.length; i++) {
        for (let j = i; j < nav.children.length; j++) {
            if (+nav.children[i].getAttribute(sortType) > +nav.children[j].getAttribute(sortType)) {
                replacedNode = nav.replaceChild(nav.children[j], nav.children[i]);
                insertAfter(replacedNode, nav.children[i]);
            }
        }
    }

}

function mySortDesc(sortType) {
    let nav = document.querySelector('.filter');
    for (let i = 0; i < nav.children.length; i++) {
        for (let j = i; j < nav.children.length; j++) {
            if (+nav.children[i].getAttribute(sortType) < +nav.children[j].getAttribute(sortType)) {
                replacedNode = nav.replaceChild(nav.children[j], nav.children[i]);
                insertAfter(replacedNode, nav.children[i]);
            }
        }
    }
}

function insertAfter(elem, refElem) {
    return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
}

