
// const age = window.prompt("What's your age?")


// window.alert(age)


// console.log(window.location);


// window.location.reload()

// window.print()


const h1 = document.createElement('h1');

// h1.textContent = "Hello World"
h1.innerHTML = "<em>Hello World</em>";

// h1.className = "myHeading"
h1.classList.add("myHeading");
h1.classList.remove("myHeading");

h1.style.textTransform = "uppercase"

document.body.appendChild(h1);


const feedbackInput = document.getElementById('feedback');

feedbackInput.addEventListener("keyup", function() {
  const len = this.value.length;

  const countText = document.getElementById('count');
  countText.textContent = len;

  if (len > 10) {
    countText.style.color = 'red'
  }
})

window.addEventListener('online', function() {
    window.alert("Internet connection resotored");
})


window.addEventListener('offline', function() {
    window.alert("You have gone offline");
})