const testimonials = [
    {
        text: "Amazing stay! Friendly staff, comfortable room, and delicious food.",
        author: "Dr. Amanuel Tadesse"
    },
    {
        text: "Perfect location, clean and modern. Highly recommended!",
        author: "Mr. Yonas Ayele"
    },
    {
        text: "Exceptional service, exceeded expectations. Will definitely stay again.",
        author: "Mr. Eyuel Melese"
    },
    {
        text: "Great value for the price. Comfortable and convenient.",
        author: "Mr. Natnael Mola"
    }

];

let currentTestimonialIndex = 0;

const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');
const testimonialText = document.getElementById('testimonial-text');
const testimonialAuthor = document.getElementById('testimonial-author');

function showTestimonial(index) {
    testimonialText.textContent = testimonials[index].text;
    testimonialAuthor.textContent = testimonials[index].author;
}

prevButton.addEventListener('click', () => {
    currentTestimonialIndex--;
    if (currentTestimonialIndex < 0) {
        currentTestimonialIndex = testimonials.length -1;
    }
    showTestimonial(currentTestimonialIndex);
});

nextButton.addEventListener('click', () => {
    currentTestimonialIndex++;
    if (currentTestimonialIndex >= testimonials.length) {
        currentTestimonialIndex = 0;
    }
    showTestimonial(currentTestimonialIndex);
});

// Show the initial testimonial
showTestimonial(currentTestimonialIndex);










