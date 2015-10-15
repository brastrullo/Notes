// =====================
//|Getting Started In JS|
// =====================

// Why learn JS?
// This is JS (JS), a programming language. 
// There are many languages, but JS has many uses and is easy to learn.
//
// What can we use JS for?
// -make websites respond to user interaction
// -build apps and games (e.g. blackjack)
// -access information on the Internet (e.g. find out the trending words on Twitter by topic)
// -organize and present data (e.g. automate spreadsheet work; data visualization)

//---------------------------------
// /*Multi          /*Multi-line   |
//	 Line				       Comments*/  |
// Comments */                     |
//---------------------------------

//+ "Printing" to console +
//===============================================================
console.log(2*5)
console.log("This prints a string")

//+ Drawing with JS(Charts, Graphs etc.)+
//===============================================================
//--Draw Line--
context.moveTo(20, 20);
//where you first put down your pen
context.lineTo(100, 20);
//where you draw the line to

//--Draw Arc/Circle--
context.beginPath();
//states that you want to begin drawing
context.arc(75,100,35,0,(2 * Math.PI)*.50);
//draw an arc(x, y, radius, startAngle, endAngle)
//Note: startAngle 0 will begin arc in Q1, a full circle for endAngle is 2 * Math.PI
context.stroke();
//states that you are finished drawing

//--Draw Rectangle/Square--
context.strokeRect(10, 10, 50, 20);
//just needs the above line of code .strokeRect(x,y,xLength, yLength)

//--Filling Colours--
context.fillStyle = "color name";
//.fillStyle() must go above .fillRect()
context.fillRect(100, 50, 50, 90);

//--Adding Text--

context.fillText("Hello!",15,175);
//.fillText("stringGoesHere", x, y);
context.font = "30px Garamond";
//change font style and size


//+ Finding the Length of an item with .length() +
//===============================================================
"Bradley".length //add .length to string

//+ Finding type of data with typeof +
//===============================================================
var anObj = { job: "I'm an object!" };
console.log(typeof anObj); // should print "object"
//Note the peculiar syntax of typeof: it is followed immediately by only a single variable—nothing else.

//+ How to know if a certain object contains +
//  a certain property with .hasOwnProperty
//===============================================================
var myObj = {};
myObj.name = "brad";
console.log( myObj.hasOwnProperty('name') ); // should print true
console.log( myObj.hasOwnProperty('nickname') ); // should print false

//+ Rounding in JS with .toFixed() +
//===============================================================
var bill = 12.12341234;
console.log('Your bill is '+ bill.toFixed(2)); //prints to 2 decimals

//+ Confirm Pop-Ups +
//===============================================================
confirm("This is what it does."); //confirm("stringstringstring")

//+ User Input Pop-Ups +
//===============================================================
prompt("Type yes if you understand:"); //remember semi-colon

//below checks if user's age is between 18 and 100 with a browser prompt
var userAge = parseInt(prompt("What is your age?"),10);
//parseInt(age,10) returns input as int. Note: second argument is 10 for base-10
if (isNaN(userAge) === true) {
    console.log("Please enter your age as a numerical value: ");   
} else if (userAge < 18) {
    console.log("You must be of legal age to continue.");
} else if (userAge > 100) {
    console.log("Please tell us your secret of longevity before continuing");
} else {
 console.log("Enjoy!");   
}


//+ Boolean Operators in JS +
//===============================================================
//Using these will return a boolean: true or false.
//   > 	Greater than
//   < 	Less than
//  <= 	Less than or equal to
//  >= 	Greater than or equal to
//  === Equal to
// !===	Not equal to

//+ Logical Operators +
//===============================================================
//	&&	and
//	||	or
//	!	not

//+ If and Else Statements Syntax +
//===============================================================
if ("Ted".length > 9) { //note: open curly brace
    console.log("Let's go down the first road!"); //note: semi-colon
} //if "practice commenting closed curly brace"
else {
    console.log("Fine... the second road.."); 
} //else "practice commenting closed curly brace"

//+ Substrings +
//===============================================================
"January".substring(0,3) //Jan is substringed
console.log("January".substring(0,3)); //prints ("Jan")

//+ Variable Assignment and Re-assignment +
//===============================================================
var variableName = "Variable";
var variableName = "Re-assigned Variable";

//+ Intro to Functions +
//===============================================================
/* Broken down
var functionName = function(arguement) {
    // code code code
    // code code code
    // (more lines of code)
};
functionName(arguement) //calls functions  
*/    
var divideByThree = function (number) {
    var val = number / 3;
    console.log(val);
};//function assigned
divideByThree(6); //calls function

//+ Arrays: Lists of Data +
//===============================================================
var arrayName = [data, data, data];// data stored in [ ] means its an array
//Types of Arrays:
var heterogeneousArrays = [true,0,"a"]; //contains different data types
var multiDimensionalArrays = [[0,0],[0,0]]; //this is a 2D array but you can have more nested to make multiple dimensions. In 2D arrays each index can be thought of as rows and each array as columns.
var jaggedArrays = [[0,0],[0],[0,0,0]]; //jagged arrays are multi-d arrays that have different lengths of arrays

//Associative Arrays
var bob = {
    firstName: "Bob",
    lastName: "Jones",
    phoneNumber: "(650) 777-777",
    email: "bob.jones@example.com"
}; //To access the values for each property we write array.property
console.log(bob.email); //This prints bobs email to the console

//+ Adding to an array with .push() +
//===============================================================
var arrayName = [];
arrayName.push(1,2,3,4); //similar to .append() in Python
console.log(arrayName); //prints to [1,2,3,4]

//+ For Loops +
//===============================================================
for (var counter = 1; counter < 11; counter++) { //counter++ increments +1
	console.log(counter);
}//prints an number on each line counting from 1 to 10
//For loops are useful when you know how long the loop will be

//+ For/In Loops and Accessing Object Property and Object Value +
//===============================================================
var dog = {
species: "bulldog",
age: 3,
color: "brown"
  };

for(var property in dog) {
  console.log(property + ": " + dog[property]);
} // prints each key with value on own line

//+ While Loops +
//===============================================================
/* Syntax as follows:
while(condition){
    // Do something!
} */
//Example:
var bool = true;

while(bool){
    console.log("Less is more!");
    bool = false;
}// While loops are most useful when you don't know how long you are going to loop beforehand

//+ Do/While Loop +
//===============================================================
var notInChoppa = true;
var getToDaChoppa = function(){
  do {
      console.log("GET TO DA CHOPPAAA!!!");
      notInChoppa = false;
} while (notInChoppa);
};
getToDaChoppa();

//Do/While loops ensure that the loop is run once. Runs like a while loop after first run.

//+ Switch Statements: Multiple if options +
//===============================================================
switch (/*Some expression*/) {
    case 'option1':
        // Do something
        break;
    case 'option2':
        // Do something else
        break;
    default:
       // Do yet another thing
}

var color = prompt("Favorite primary color: ");

switch(color) {
  case 'red':
    console.log("Dope");
    break;
  case 'blue':
    console.log("Cool");
    break;
  case 'yellow':
  	console.log("Wicked");
  	break; 
  default:
    console.log("*smh* 'primary' colour bruh...");
}

//+ Objects in JS +
//===============================================================
//In JS all properties of an object are automatically Public, which means that they can be accessed outside of the class.
// Object Constructor
var myObj = new Object();

// Example Using Object Constructor
var me = new Object();

me.name = "Bradley";
me.age = 24;

// Object Literal Notation:
var myObject = {
    key: value,
    key: value,
    key: value
}; // preferred notation with JS

// Adding to Objects After Created
var myObj = {}; //literal object notation 

myObj["name"] = "Charlie"; //Bracket-notation
// An advantage of bracket notation is that we are not restricted to just using strings in the brackets. We can also use variables whose values are property names: 
var someObj = {propName: someValue};
var myProperty = "propName";
someObj[myProperty];

myObj.name = "Charlie"; // Dot-notation is often shorthand for the first

//+ this. and Methods in JS+
//===============================================================
/*  Methods are like functions that are associated with a particular object.
    They are especially helpful when you want to either:
      -Update the object properties
      -Calculate something based on an object's properties.
    Here, we have included a Circle object, with a radius property representing the circle's radius. We have implemented an area function which calculates the circle's area. Notice we have used Math.PI to get the π value. */
function Circle (radius) {
    this.radius = radius;
    this.area = function () {
        return Math.PI * this.radius * this.radius;  
    };
};
//The keyword this acts as a placeholder, and will refer to whichever object called that method when the method is actually used.
// here we define our method using "this", before we even introduce bob
var setAge = function (newAge) {
  this.age = newAge;
};
// now we make bob
var bob = new Object();
bob.age = 30;
// and down here we just use the method we already made
bob.setAge = setAge;
  
// change bob's age to 50 here
bob.setAge(50)

//+ Constructors more in depth +
//===============================================================
//The term "constructor" used above, refers to making an object using the keyword new. A constructor is a way to create an object.
//When we write |bob = new Object();| we are using a built-in constructor called Object. This constructor is already defined by the JS language and just makes an object with no properties or methods.

//Making Your Own Constructors
function Person(name,age) {
  this.name = name;
  this.age = age;
}
//Now we can make objects using the Person constructor
var bob = new Person("Bob Smith", 30);
var susan = new Person("Susan Jordan", 25);

//Another example:
function Rabbit(adjective) {
    this.adjective = adjective;
    this.describeMyself = function() {
        console.log("I am a " + this.adjective + " rabbit");
    };
};

var rabbit1 = new Rabbit("fluffy");
var rabbit2 = new Rabbit("happy");
var rabbit3 = new Rabbit("sleepy");

rabbit1.describeMyself(); //Prints "I am a fluffy rabbit"
rabbit2.describeMyself();
rabbit3.describeMyself();

//+ Methods II +
//===============================================================
function Person(job, married) {
    this.job = job;
    this.married = married;
    //Adding methods to a constructor
    /*1.*/  this.speak = function() {
            console.log("Hello!");
            }; //defined in constructor
    /*2.*/  speak: function(mood) {
            console.log("Hello, I am feeling " + mood);
            }; //definged in literal notation
};

var user = new Person("Codecademy Student",false);
user.speak();

//+ Classes/OOP(Object-oriented Programming) +
//===============================================================
//When you make a constructor, you are in fact defining a new class. A class can be thought of as a type, or a category of objects—kind of like how Number and String are types in JS.

//Prototype: JS automatically defines the prototype for class with a constructor. For example, our Dog constructor ensures that the Dog prototype has a breed property. Remember, the Dog prototype keeps track of what Dog has, doesn't have, can, or can't do.
function Dog (breed) {
  this.breed = breed;
};

// here we make buddy and teach him how to bark
var buddy = new Dog("golden Retriever");
Dog.prototype.bark = function() {
  console.log("Woof");
};
buddy.bark();

// here we make snoopy
var snoopy = new Dog("Beagle");
/// this time it works!
snoopy.bark();

// Inheritance: In object-oriented programming, inheritance allows one class to see and use the methods and properties of another class.

function Animal(name, numLegs) {
    this.name = name;
    this.numLegs = numLegs;
}
Animal.prototype.sayName = function() {
    console.log("Hi my name is " + this.name);
};

function Penguin(name) {
    this.name = name;
    this.numLegs = 2;  
};

Penguin.prototype = new Animal(); // Penguin inherits from Animal via prototype

//A Penguin is an Animal, so they should have all the same properties and methods as Animal. Whenever this X is-a Y relationship exists, there's a good chance that we should be using inheritance.

//+ Private Methods+
//===============================================================
//Methods can also be private within a class and inaccessible outside of the class. Changing this.returnBalance from the last exercise to var returnBalance makes this method private. If you run the program trying to access the method you get an undefined error this time.
