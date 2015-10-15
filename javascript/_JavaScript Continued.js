// + JavaScript Continued +
// =============================================
Link a JavaScript file to a web page using the <script> tag and the src property: 
<script src="scripts.js"></script>

Insert JavaScript directly into a web page inside <script> tags:
<script>
alert("Hello there.");
</script>

Never link to a file and include JavaScript inside the same <script> tag.
Don't do this:
<script src="file.js">
   alert("Hello there.");
</script>

// + 3 Ways to Send Messages in JS +
// =============================================
alert("This is a pop-up message.");
Pop-up message to user in browser.

document.write("This displays text on the webpage.");
Displays text on webpage. Outdated Do Not Use.

console.log("Begin Program.")
Displays text on the console. Used for debugging.

// + Updating HTML with JS +
// =============================================
You can retrieve and simply display info:
document.getElementById('type id here').innerHTML;
Or you can change content with:
document.getElementById('type id here').innerHTML = "content to be changed";

// + Variables +
// =============================================
Variables cannot:
- start with a number
- contain any symbols except $ and _

Variables can:
- start with a $ or a

Camel Case - variableNaming likeThis.
Use descriptive variables always to make reading your code and debugging easier.


// + parseInt() and parseFloat() +
// =============================================
// Prompt User for Info
You can prompt user for info with prompt("Give yo number: ");
Inside the prompt function brackets is the message that will be asked to the user.
At default you get strings back but you can also get back floats and ints

var age = parstInt(prompt("How old are you? "));
var money = parstFloat(prompt("How much money you got? "));

// + Math.function() +
// =============================================
Math.random() - returns a number between 0 and up to but not including 1
Math.round(x) - round float to nearest int from .5
Math.floor(x) - always round float down to nearest int
Math.ceil(x) - always round float up to nearest int

(Math.floor( Math.random() * 6 ) + 1 )- simulates dice roll

// + Conditional Statements +
// =============================================
Using comparative operations with strings takes the first letter of both strings and compares their position on the alphabet scale. Z is greater than A.