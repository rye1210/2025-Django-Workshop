//DOM - Document Object Model
//The DOM represents a document with a logical tree structure
//Each node is an object representing a part of the document

//DOM NODES

const myName=document.getElementById("name"); // Accessing the element with id 'name'
console.log(myName.textContent); // Accessing the text content of the element

const btn=document.getElementById("action"); // Accessing the button element with id 'action'
btn.addEventListener("click",()=>{ // Adding a click event listener to the button
    myName.style.color="blue"; // Changing the text color of the 'name' element to blue on button click
});