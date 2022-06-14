
//  Window scroll sticky class add
function windowScroll() {
    const navbar = document.getElementById("navbar");
    if (navbar) {
        if (
            document.body.scrollTop >= 50 ||
            document.documentElement.scrollTop >= 50
        ) {
            navbar.classList.add("nav-sticky");
        } else {
            navbar.classList.remove("nav-sticky");
        }
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})



// feather icon
feather.replace()



// number counter
const counter = document.querySelectorAll('.counter_value');
const speed = 250; // The lower the slower

counter.forEach(counter_value => {
	const updateCount = () => {
		const target = +counter_value.getAttribute('data-target');
		const count = +counter_value.innerText;

		const inc = target / speed;

		// Check if target is reached
		if (count < target) {
            // Add inc to count and output in counter_value
			counter_value.innerText = (count + inc).toFixed(0);
			// Call function every ms
			setTimeout(updateCount, 1);
		} else {
			counter_value.innerText = target;
		}
	};

	updateCount();
});



// Contact Form
function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
	var subject = document.forms["myForm"]["subject"].value;
    var number = document.forms["myForm"]["number"].value;	
    var comments = document.forms["myForm"]["comments"].value;
    document.getElementById("error-msg").style.opacity = 0;
    document.getElementById('error-msg').innerHTML = "";
    if (name == "" || name == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'>*Please enter a Name*</div>";
        fadeIn();
        return false;
    }
    if (email == "" || email == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'>*Please enter a Email*</div>";
        fadeIn();
        return false;
    }
    if (subject == "" || subject == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'>*Please enter a Subject*</div>";
        fadeIn();
        return false;
	}
	if (number == "" || number == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'>*Please enter a number*</div>";
        fadeIn();
        return false;
    }
    if (comments == "" || comments == null) {
        document.getElementById('error-msg').innerHTML = "<div class='alert alert-danger error_message'>*Please enter a Comments*</div>";
        fadeIn();
        return false;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("simple-msg").innerHTML = this.responseText;
            document.forms["myForm"]["name"].value = "";
            document.forms["myForm"]["email"].value = "";
			document.forms["myForm"]["subject"].value = "";
            document.forms["myForm"]["number"].value = "";			
            document.forms["myForm"]["comments"].value = "";
        }
    };
    xhttp.open("POST", "php/contact.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name + "&email=" + email + "&subject=" + subject + "&number=" + number + "&comments=" + comments);
    return false;
}
function fadeIn() {
    var fade = document.getElementById("error-msg");
    var opacity = 0;
    var intervalID = setInterval(function () {
        if (opacity < 1) {
            opacity = opacity + 0.5
            fade.style.opacity = opacity;
        } else {
            clearInterval(intervalID);
        }
    }, 200);
}


// Swicher
function toggleSwitcher() {
    var i = document.getElementById('style-switcher');
    if (i.style.left === "-189px") {
        i.style.left = "-0px";
    } else {
        i.style.left = "-189px";
    }
};

function setColor(theme) {
    document.getElementById('color-opt').href = './css/colors/' + theme + '.css';
    toggleSwitcher(false);
};





  




















