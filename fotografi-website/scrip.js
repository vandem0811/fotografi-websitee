let index = 0;
const testimonials = document.querySelectorAll(".testimonial");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");

function showTestimonial(n) {
    testimonials.forEach((t, i) => {
        t.style.display = i === n ? "block" : "none";
    });
}

prevBtn.addEventListener("click", () => {
    index = (index - 1 + testimonials.length) % testimonials.length;
    showTestimonial(index);
});

nextBtn.addEventListener("click", () => {
    index = (index + 1) % testimonials.length;
    showTestimonial(index);
});

showTestimonial(index);
