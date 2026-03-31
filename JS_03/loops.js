// Execute a block of code number of times


// 1. FOR (iteration known)
for (let i = 0; i < 10; i++) {

    if (i === 5) {
        // break;

        continue;
    }


    // console.log(i);
    
}



// 2. WHILE (a condition remains true)
let a = 0;

while (a < 10) {
    a++;
    // console.log(a);
}


// 3. DO-WHILE (same as WHILE but runs atleast once even the condition is false)
let k = 11;

do {
    k++;

    // console.log("K is: ", k);
    
} while(k < 10);




const users = ["John", "Sara", "Jane", "Smith", "Brad", "Mike"];



for (let ui = 0; ui < users.length; ui++) {
    // console.log(users[ui]);
}

for (const user of users) {
    // console.log(user);
}

const userDetails = {
    name: "Brad Traversy",
    email: "traversymedia@gmail.com",
    age: 43,
    marital_status: "Married",
    address: "Bostan, MA"
}


for (const key in userDetails) {
    // console.log(key);
}

const usersData = [
    { id: 1, userName: "Sara", emailAddress: "sara@gmail.com" },
    { id: 2, userName: "John", emailAddress: "john@gmail.com" },
    { id: 3, userName: "Brad", emailAddress: "brad@gmail.com" },
    { id: 4, userName: "Mike", emailAddress: "mike@gmail.com" },
];

// console.table(usersData);


for (const userInfo of usersData) {
    
    for (const key in userInfo) {

        console.log(
            key, 
            userInfo[key]
        );
        

    }
    
}




