// Arithmetic Operators
console.log("SUM", 2 + 5);
console.log("ABS", 2 - 5);
console.log("MULT", 2 * 5);
console.log("DIV", 2 / 5);
console.log("MOD", 16 % 3);
console.log("EXP", 4 ** 3);

// Assignment Operators
let score = 45;

// score++;
// score--;

score += 5; // Assignment increment;

console.log("SCORE", score);

// Comparison Operators
const a = 4;
const b = 6;

console.log(a == b); // Equal
console.log(a != b); // Not Equal
console.log(8 === "8"); // Equal & Identical
console.log(8 !== "8"); // Not Equal & Identical
console.log(a > b);
console.log(a >= b);
console.log(a < b);
console.log(a <= b);

// Logical Operators
console.log(a < b && a == b); // AND
console.log(a < b || a == b); // OR

const isRegistered = true;

console.log("Is the user registered: ", !isRegistered);

// Conditionals
const percentage = 78;

if (percentage > 90) {
  console.log("Grade A+");
} else if (percentage > 80) {
  console.log("Grade A");
} else if (percentage > 70) {
  console.log("Grade B");
} else {
  console.log("Fail");
}


const day = "Monday";

switch(day) {
    case "Saturday":
        console.log("Weekend");
    break;

    case "Monday":
        console.log("Back to Work");
    break;

    case "Friday":
        console.log("Almost there !");
    break;

    default:
        console.log("Midweek");
        
        

}
