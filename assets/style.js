document.addEventListener("DOMContentLoaded", function () {
    const animatedCards = document.querySelectorAll(".animate__animated");

    function handleIntersection(entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("animate__fadeOut"); // Remove this line if not using fadeOut
                entry.target.classList.add("animate__fadeIn");
                observer.unobserve(entry.target);
            } else {
                // Optional: If you want the elements to disappear initially, you can add a fadeOut animation class.
                entry.target.classList.add("animate__fadeOut");
            }
        });
    }

    const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });

    animatedCards.forEach((card) => {
        observer.observe(card);
    });
});