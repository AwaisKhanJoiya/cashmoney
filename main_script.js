let contact = document.getElementById('contact');
let faq = document.getElementById('faq');
let contact_section = document.getElementById('contact-section');
let faq_section = document.getElementById('faq-section');
let questions = document.querySelectorAll('.question');
let answers = document.querySelectorAll('.answer');


questions.forEach((ques) => {
    ques.addEventListener('click', function() {
        answers.forEach(ans=>{
            ans.style.display = "none";
        })
        ques.nextElementSibling.style.display = "block";
    })
})
console.log('yes');
contact.addEventListener('click', function() {
    faq.classList.remove("active");
    this.classList.add('active');
    contact_section.style.display = "block";
    faq_section.style.display = "none";
});
faq.addEventListener('click', function() {
    contact.classList.remove('active');
    this.classList.add('active');
    contact_section.style.display = "none";
    faq_section.style.display = "block";
});
