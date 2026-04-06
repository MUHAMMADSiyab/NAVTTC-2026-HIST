const scores = [34, 66, 77, 15, 89, 96, 45];

// push new item to end/start
scores.push(36);
scores.unshift(55);

// remove item(s) from end/start
scores.pop();
scores.shift();

// accessing via index
// console.log(scores.slice(4, 6));

const users = ["John", "Marry", "Sara", "Smith"];

users.splice(2, 1, "Brad");

// console.log(users.toString());

// Mapping through arrays
users.forEach((user, index) => {
  // console.log(user, index);
});

// console.log();

const mapped = users.map((user, index) => user.toUpperCase());

// console.log(mapped);

const filtered = scores.filter((score) => score < 50);
const foundScore = scores.find((score) => score > 30);

console
  .log
  // scores.every(score => score > 30)
  // scores.some(score => score > 30)
  ();

const numbers = [
  [1, 5, 6, 8, 9],
  [5, 7, 2],
];

// console.log(numbers.flat());

const sum = scores.reduce((prev, curr) => prev + curr, 0);

console.log(sum);

console.log(
    [
        ...["Brad", "John"],
        ...["Sara", "Merry"]
    ]
);


// let totalScore = 0;
// scores.forEach(score => {
//     totalScore += score;
// })
const userInfo = {
  name: "Sara",
  age: 25,
  email: "sarasmith@yahoo.com",
  address: { city: "Karachi", country: "Pakistan" },
};

// Shallow copy
const shallow = { ...userInfo };

// shallow.name = "Brad";
// shallow.address.city = "Islamabad";



const sc = structuredClone(userInfo);

sc.address.city = "Quetta";

// console.log(userInfo.address.city);

// const merged = Object.assign(userInfo, { phone: "021-32873283" })
const merged = {...userInfo, ...{ phone: "021-32873283" }}


console.log(Object.keys(userInfo));
console.log(Object.values(userInfo));
console.log(Object.entries(userInfo));





