/*Hamburger Links*/
function hamburgerLinks() {
    if (document.getElementById('hamburgerlink').style.display === 'none') {
        document.getElementById('hamburgerlink').style.display = 'flex';
    } else {
        document.getElementById('hamburgerlink').style.display = 'none';
    }
}
/*Countdown Part*/
function countdown() {
    let countDate = new Date('December 31, 2021 00:00:00').getTime();
    let now = new Date().getTime();
    let gap = countDate - now;

    let second = 1000;
    let minute = second * 60;
    let hour = minute * 60;
    let day = hour * 24;

    let textday = Math.floor(gap / day);
    let texthour = Math.floor((gap % day) / hour);
    let textminute = Math.floor((gap % hour) / minute);
    let textsecond = Math.floor((gap % minute) / second);

    document.querySelector('.days').innerHTML = textday;
    document.querySelector('.hours').innerHTML = texthour;
    document.querySelector('.minutes').innerHTML = textminute;
    document.querySelector('.seconds').innerHTML = textsecond;
};
setInterval(countdown, 1000);
/*Price Part*/
let anuallyButton = document.getElementById('anually-button')
let monthlyButton = document.getElementById('monthly-button')

function anually() {
    document.getElementById('basicprice').innerHTML = '$199.99';
    document.getElementById('profprice').innerHTML = '$249.99';
    document.getElementById('masterprice').innerHTML = '$399.99';
    anuallyButton.style.backgroundColor = 'hsl(257, 27%, 26%)';
    anuallyButton.style.color = 'white';
    monthlyButton.style.backgroundColor = 'white';
    monthlyButton.style.color = 'hsl(257, 27%, 26%)';
    monthlyButton.style.border = '1px solid hsl(257, 27%, 26%)';
}

function monthly() {
    document.getElementById('basicprice').innerHTML = '$19.99';
    document.getElementById('profprice').innerHTML = '$24.99';
    document.getElementById('masterprice').innerHTML = '$39.99';
    monthlyButton.style.backgroundColor = 'hsl(257, 27%, 26%)';
    monthlyButton.style.color = 'white';
    anuallyButton.style.backgroundColor = 'white';
    anuallyButton.style.color = 'hsl(257, 27%, 26%)';
    anuallyButton.style.border = '1px solid hsl(257, 27%, 26%)';
}
/*FAQ-Part*/
let accordion = document.getElementsByClassName("question-arrow-distance");
let i;

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function(event) {
        /* Toggle between adding and removing the "bold" class*/
        this.classList.toggle("bold");
        /*Rotate arrow*/
        event.currentTarget.querySelector('.arrow-image').classList.toggle("rotatearrow")
            /* Toggle between hiding and showing the active panel */
        let answerfaq = this.nextElementSibling;
        if (answerfaq.style.display === "block") {
            answerfaq.style.display = "none";
        } else {
            answerfaq.style.display = "block";
        }
    });
}
/*Login Part*/
function loginvalidation() {
    if (document.getElementById('username').value === "") {
        document.getElementById('usernameerror').style.display = 'block'
    } else {
        document.getElementById('usernameerror').style.display = 'none'
    }
    if (document.getElementById('password').value === "") {
        document.getElementById('passworderror').style.display = 'block'
    } else {
        document.getElementById('passworderror').style.display = 'none'
    }
}
/*Sign up part*/
function signupvalidation() {
    if (document.getElementById('firstname').value === "") {
        document.getElementById('firstnameerror').style.display = 'block'
    } else {
        document.getElementById('firstnameerror').style.display = 'none'
    }
    if (document.getElementById('lastname').value === "") {
        document.getElementById('lastnameerror').style.display = 'block'
    } else {
        document.getElementById('lastnameerror').style.display = 'none'
    }
    if (document.getElementById('username').value === "") {
        document.getElementById('usernameerror').style.display = 'block'
    } else {
        document.getElementById('usernameerror').style.display = 'none'
    }
    if (document.getElementById('password').value === "") {
        document.getElementById('passworderror').style.display = 'block'
    } else {
        document.getElementById('passworderror').style.display = 'none'
    }
}
// Function to update labels based on selected person type
function updateLabels() {
    var personType = document.getElementById('personType').value;
    var labelContainer = document.getElementById('labelContainer');

    // Clear existing labels
    labelContainer.innerHTML = '';

    // Add new labels based on selected person type
    if (personType === 'Etudiant') {
        labelContainer.innerHTML += '<input type="text" class="input-style" id="lastname" name="niveaux" placeholder="Niveau">';
        labelContainer.innerHTML += '<input type="date" class="input-style" id="lastname" name="dateDN" placeholder="Born day">';
        labelContainer.innerHTML += '<input type="text" class="input-style" id="lastname" name="universite" placeholder="universite">';
        labelContainer.innerHTML += '<input type="text" class="input-style" id="lastname" name="sexe" placeholder="sexe">';


        // Add more labels for Person Type 1 as needed
    } else if (personType === 'enseignant') {
        labelContainer.innerHTML += '<input type="text" class="input-style" name="grade" id="lastname" placeholder="Grade">'
            // Add more labels for Person Type 2 as needed
    }
}

// Attach event listener to the select element
document.getElementById('personType').addEventListener('change', updateLabels);

// Initial update when the page loads
updateLabels();