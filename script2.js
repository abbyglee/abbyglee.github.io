/*For the Scroll thing on the home page of index 5*/

document.addEventListener("DOMContentLoaded", function () {
    const scrollIndicator = document.getElementById("scroll-indicator");
    const targetSection = document.getElementById("course-section");

    scrollIndicator.addEventListener("click", function (e) {
        e.preventDefault();

        // Calculate the target offset
        const offset = targetSection.getBoundingClientRect().top;

        // Define the duration of the scroll animation in milliseconds
        const duration = 1000;

        // Calculate the starting timestamp
        const startTime = performance.now();

        // Define the scrolling function
        function scroll(timestamp) {
            const currentTime = timestamp - startTime;

            // Calculate the new position using ease-in-out easing function
            const easeInOut = (t) => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;

            const scrollTo = easeInOut(Math.min(1, currentTime / duration)) * offset;

            // Scroll the window
            window.scrollTo({
                top: scrollTo,
                behavior: "smooth"
            });

            if (currentTime < duration) {
                // Continue scrolling
                requestAnimationFrame(scroll);
            }
        }

        // Start the scrolling animation
        requestAnimationFrame(scroll);
    });
});
