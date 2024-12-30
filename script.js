//testimonials slide

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
    },
    {
        text: "I had a great time at the hotel. The staff was friendly and the room was clean and comfortable.",
        author: "Kaleab Mulugeta"
    },
    {   text: "This hotel exceeded all expectations with its impeccable service, luxurious amenities, and breathtaking views.",
        author: "Ms. Mariamawit Seifu"
    },
    {
       text: " We were blown away by the exceptional value and quality of our stay at this hotel.",
       author : "Mr. Belay Addisu"
    },
    
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

showTestimonial(currentTestimonialIndex);

//testimonials slide//



// text toggle

const hiddenText = document.getElementById('hiddenText');
const toggleButton = document.getElementById('toggle-Button');

toggleButton.textContent = 'Show More';

toggleButton.addEventListener('click', () => {
  if (hiddenText.style.display === 'none' || hiddenText.style.display === '') {
    hiddenText.style.display = 'block';
    toggleButton.textContent = 'Show Less';
  } else {
    hiddenText.style.display = 'none';
    toggleButton.textContent = 'Show More';
  }

});

// text toggle //







