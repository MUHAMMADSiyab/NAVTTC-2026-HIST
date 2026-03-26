// Variables
// Data Types

// 1.   ->    var      (Globally available in script) (Avoid using it)
// 2.   ->    let      (Available in only a block of code) (changeable)
// 3.   ->    const    (Available in only a block of code) (non-changeable)

// 1. String
let studentName = "AMMAR Sheikh";

studentName = "Ammara Irfan";

// 2. Number
let age = 25;

// 3. Boolean
let married = false;

// 4. Null
let interests = null;

// 5. Undefined
let score;

// 6. Array/Object
let students = [
  "Ammar Sheikh",
  "Ammara Irfan",
  "Warisha",
  "Shahwaiz",
  "Mehroz",
]; // array

students[0] = "Umar"

// console.log(students[3]);

let studentInfo = {
    name: "Ammar Sheikh",
    age: 20,
    email: "ammarsheikh@gmail.com",
    address: "Ayesha manzil block 4, karachi"
}
studentInfo.email = "ammarsheikh123@yahoo.com"

console.log(studentInfo);

