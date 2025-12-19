//VARIABLE DECLARATIONS
//When using 'var', variable declarations are hoisted to the top of their scope.
console.log(name);
var name="Juan";

let height=180;
console.log(height); // This will work fine since 'height' is declared before use
let age=30; // 'let' declarations are not hoisted in the same way as 'var', so this will throw a ReferenceError if accessed before declaration.

const pi=3.14;
console.log(pi); // This will work fine since 'pi' is declared before use
const gravity=9.8; // 'const' declarations are also not hoisted, so this will throw a ReferenceError if accessed before declaration.

//OBJECTS AND ARRAYS
const subject=["Math","Science","History"];
console.log(subject[1]); // Accessing the second element of the array, which is "Science"

const student={
    name:"Alice",
    age:22,
    major:"Computer Science"
};
console.log(student.major); // Accessing the 'major' property of the student object, which is "Computer Science"
console.log(student["name"]); // Accessing the 'name' property of the student object using bracket notation, which is "Alice"


let old_age=24;
console.log(old_age); // This will work fine since 'old_age' is declared before use
let new_age=25; // Reassigning the value of 'old_age'
console.log(old_age); // This will still print 24 since 'old_age' was not changed

const info={
    city:"New York",
    country:"USA"
};
console.log(info.city); // Accessing the 'city' property of the info object, which is "New York"
//info.city="Los Angeles"; // This will throw an error because we cannot reassign properties of a const object

const info1=info;

info.city="Los Angeles"; // This is allowed, as we are modifying a property of the object, not reassigning the object itself
console.log(info1.city); // This will print "Los Angeles" since info1 references the same object as info

//FUNCTIONS

//basic function declaration
function addtwonum(num1, num2)
{
   console.log(addtwonum(5, 10));
}

//function expression
const minustwonum=function()
{

}

//arrow function
const multiplytwonum=()=>
{

}

//LOOPS

//for loop
for(let i=0;i<5;i++)
{
    console.log(i);
}

//CONDITIONALS

//IF-ELSE
let num=4;
if (num>5)
{
    console.log("Number is greater than 5");
}
else
{
    console.log("Number is not greater than 5");
}

//SWITCH
let fruit="apple";
switch(fruit)
{
    case "apple":
        console.log("This is an apple");
        break;
    case "banana":
        console.log("This is a banana");
        break;
    default:
        console.log("Unknown fruit");
}