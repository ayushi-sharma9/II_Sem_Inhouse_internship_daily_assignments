// ===============================
// Dark Mode Toggle
// ===============================

const darkModeBtn = document.getElementById("darkModeBtn");

darkModeBtn.addEventListener("click", function () {

    document.body.classList.toggle("bg-dark");
    document.body.classList.toggle("text-white");

    // Hero Section
    const hero = document.querySelector(".hero");
    hero.classList.toggle("bg-dark");
    hero.classList.toggle("text-white");

    // All Cards
    const cards = document.querySelectorAll(".card");

    cards.forEach(function(card) {
        card.classList.toggle("bg-dark");
        card.classList.toggle("text-white");
    });

    // Navbar
    const navbar = document.querySelector(".navbar");
    navbar.classList.toggle("navbar-dark");
    navbar.classList.toggle("bg-dark");
    navbar.classList.toggle("text-white");

    // Button Text
    if (darkModeBtn.innerText === "Dark Mode") {
        darkModeBtn.innerText = "Light Mode";
    } else {
        darkModeBtn.innerText = "Dark Mode";
    }

});


// ===============================
// Contact Form Validation
// ===============================

const form = document.getElementById("contactForm");

form.addEventListener("submit", function(e){

    e.preventDefault();

    let valid = true;

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    document.getElementById("nameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";

    // Name Validation
    if(name === "")
    {
        document.getElementById("nameError").innerHTML = "Name is required";
        valid = false;
    }

    // Email Validation
    const emailPattern =
    /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email === "")
    {
        document.getElementById("emailError").innerHTML = "Email is required";
        valid = false;
    }
    else if(!email.match(emailPattern))
    {
        document.getElementById("emailError").innerHTML = "Enter a valid email";
        valid = false;
    }

    // Message Validation
    if(message === "")
    {
        alert("Please enter your message.");
        valid = false;
    }

    if(valid)
    {
        alert("Message Sent Successfully!");

        form.reset();
    }

});


// ===============================
// Smooth Scrolling
// ===============================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e){

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if(target){
            target.scrollIntoView({
                behavior: "smooth"
            });
        }

    });

});


// ===============================
// Search Button
// ===============================

const searchForm = document.querySelector("form[role='search']");

searchForm.addEventListener("submit", function(e){

    e.preventDefault();

    const value = searchForm.querySelector("input").value.trim();

    if(value === "")
    {
        alert("Please enter something to search.");
    }
    else
    {
        alert("You searched for: " + value);
    }

});


// ===============================
// Get Started Button
// ===============================

const getStartedBtn = document.querySelector(".btn-primary.btn-lg");

getStartedBtn.addEventListener("click", function(){

    document.getElementById("services").scrollIntoView({
        behavior: "smooth"
    });

});


// ===============================
// Learn More Button
// ===============================

const learnMoreBtn = document.querySelector(".btn-outline-light");

learnMoreBtn.addEventListener("click", function(){

    document.getElementById("about").scrollIntoView({
        behavior: "smooth"
    });

});



// ===============================
// nav bar working
// ===============================

const homebtn = document.getElementById("homebtn");
homebtn.addEventListener("click", function(){
    document.getElementById("home").scrollIntoView({
        behavior: "smooth"
    });
})




// ===============================
// about us Button
// ===============================

const aboutUsBtn = document.querySelector(".btn-outline-light");

aboutUsBtn.addEventListener("click", function(){

    document.getElementById("services").scrollIntoView({
        behavior: "smooth"
    });

});


// ===============================
// services Button
// ===============================

const servicesBtn = document.querySelector(".btn-outline-light");

servicesBtn.addEventListener("click", function(){

    document.getElementById("about").scrollIntoView({
        behavior: "smooth"
    });

});
