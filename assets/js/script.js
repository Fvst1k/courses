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

