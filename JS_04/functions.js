/**
 * JavaScript Functions
 */

// DRY = DO NOT REPEAT YOURSELF

(() => {
    console.log("IEFE called!");
})(); // IEFE


function sum(num1, num2 = 10) {
  // console.log(num1 + num2);
}

sum(45, 56);
sum(22, 66);
sum(77, 100);

function getRandomNames(...names) {
  // console.log(names);
}

getRandomNames("James", "John", "Sara", "Kyle");

// console.log(calculateSalary(4232323));

// Hoisting

// Function declaration
function calculateSalary(employeeId) {
  const netPay = Math.random() * employeeId;

  // console.log(netPay);
  return netPay;
}

const netSalary = calculateSalary(2321);

// console.log(netSalary);
// console.log(netSalary);
// console.log(netSalary);
// console.log(netSalary);
// console.log(netSalary);
// console.log(netSalary);

var getEmployeeInfo = function () {
  // console.log("Employee details here.");
};
getEmployeeInfo();

// Arrow Functions

const getUserData = (name) => `User data here: ${name}`;

// console.log(getUserData("John"));
// console.log(getUserData("James"));

const btn = document.getElementById("myBtn");
const input = document.getElementById("input");

btn.addEventListener("click", () => {
  console.log(this);
});

// Arrow functions do not have their own `this`

input.addEventListener("keyup", function (e) {
  // console.log(e.target);

  if (e.key === "Enter") {
    alert("You pressed enter key");
  }
});

//IEFE (Immedietly Invoked Function Expression)
