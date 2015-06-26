<!--  ================================
     |PHP Hypertext Preprocessor Notes|
      ================================ -->

PHP is a backend programming language that runs on the server side(the computer that hosts the html page) as opposed to other languages that run on the client side(the computer that calls the page).
Semi-colons end every complete "thought" in PHP. Whitespace is negligible in PHP.

Try this when debugging:
error_reporting(-1);
ini_set('display_errors', 'On');
<!-- Add to top of php script so that all syntax errors are shown -->

<!-- Printing in PHP
============================================== -->
PHP code goes into delimiters:
<?php echo "This prints the string to the console."; ?>

<!-- Printing With Concatenation -->
<?php echo "Hi "."My "."Name "."Is "."Brad. "; ?>

<!-- Printing Int/Math -->
<?php echo 17 * 123; ?>

Printing values in PHP:
$name = "Steve";
print_r($name);

<!-- Variables
============================================== -->
All variable names in PHP start with a dollar sign.
<?php $myName = "Brad"; ?> 

Note: Variables are defined at the top code block.

<!-- Using variables in strings "without" concatenation
============================================== -->
<?php 
public function getInfo() {
    $output  = "The {$this->common_name} is an awesome fish. ";
    //$output is then added to with the strings below.
    $output .= "It is very {$this->flavor} when eaten. ";
    //concat is used here but is not necessary.
    $output .= "Currently the world record {$this->common_name} weighed {$this->record_weight}.";
    return $output;
}
?>

<!-- Constants
============================================== -->
Data that is meant to be unchangeable like year of birth and so on are constants.
PHP constant naming convention is all caps and spaces are underscores. Constant names cannot start with a number.

Note: Constants are defined at the top most code block even above variables.

define("YEAR", 1990);
define("JOB_TITLE", "Big Boss");

<!-- Booleans
============================================== -->
Bools are a type of predefined constant and are always uppercase.

$bool = 0;
0 is FALSE.

$bool = 1;
1 is TRUE;

<!-- Arrays
============================================== -->
$array_example = array ();

//This is just short hand of the first
$array_example = [];

//Defining an array
$eye_colours = array ("blue", "green", "brown");

//Change existing value
$eye_colours[2] = "hazel";
$eye_colours is now blue, green, hazel. 

//Adding to the end of the array is done like this
$eye_colours[] = "amber";

<!-- Associative Arrays
============================================== -->
Key/Value pairs are defined with a key as a string the => and then the value.

$countries = array(
  'name' => 'Canada, 
  'code' => 'CA', 
  'continent' => 'North America'
);

You can also add to existing arrays:
$countries["citizenship"] = "Canadian";

<!-- Multidimensional Arrays
============================================== -->
An array can be made include arrays to organize more information.
Note: In this example the $countries array is created first then the content is added later but this can be done in one step as well.

$countries = array();
$countries[0]= array(
  "name" => "Canada",
  "code" => "CA"
);
$countries[1]= array(
  "name" => "United States",
  "code" => "US"
);

<!-- Index Numbers
============================================== -->
PHP uses zero-based indexing which means it starts counting the index at 0 then 1,2,3 and so on. In PHP an index is called with curly braces {}.

$greeting = "Hello, Friends!";
$greeting{0} = "J";
echo $ greeting;

Output => "Jello, Friends!"

<!-- Operators
============================================== -->
//Arithmatic
Same as JS

//Comparative
Same as JS
<!-- 	> Greater than
		  < Less than
		  <= Less than or equal to
		  >= Greater than or equal to
		  == Equal to (values are the same but not same type 10 and '10')
      === Identical (Exactly the same '10' is '10')
		  != Not equal to
      !== Not identical to 		-->

//Logical
//var_dump gives info on a variable
// same as &&
var_dump($a and $b);

//same as ||
var_dump($a or $b;

//nots are same from JS
Not operator is !

<!-- Concatenation
============================================== -->
Concatenation in PHP is done with a period.
"Hello"."World";

<!--  Conditional Statements
============================================== -->
// If/Else

<?php
  $name = "Edgar";

  if ($name == "Simon") {
    print "I know you!";
  }
  else {
    print "Who are you?";
  }
?>

<!--  Loops
============================================== -->
//For Loops

for($counter=0;$counter < 10; $counter++){
  echo $counter;
  
}

//PHP Foreach Loops
PHP embedded in html. Does action for each index in array-$social_icons as index-$icon. In this case auto adds class for each social media in array.

$social_icons = array('facebook','google','twitter')
<?php
  foreach ($social_icons as $icon){
?>
  <li><a href=""><span class="icon <?php echo $icon ?>"></span></a></li>
<?php
  }
?>

<!--  Function
============================================== -->
//Defining a Function
function f_name($argument, $arguments){
  echo "Do Something";
}


<!--  PHP Default Arguments
============================================== -->
A default argument allows you to have a starting value no matter what, even if an argument is not passed through.

Note: In PHP single quotes don't do evaluation. When using variables use "$name" NOT '$name'.
<?php
  function get_info($name, $title = 'friend'){
    if($title){
      echo "$name has arrived, they are with us as a $title.";
    } else {
      echo "$name has arrived, welcome!";
    
  }

  get_info('Mike','frog');
  //output => Mike has arrived, they are with us as a frog.

  get_info('Mike', $title);
  //output => Mike has arrived, they are with us as a friend.

  get_info('Mike');
  //output => Mike has arrived, welcome!

?>

//Returning Values
<? php

function hello($name){
  if ($name == 'Hello, Mike!'){
    return "Hello, World!";
  } else {
    return 'Hello, stranger.';
  }
}

$greeting = hello('Chris');

echo $greeting;
//outputs => Hello, stranger.

?>

<!--  PHP Variable Functions
============================================== -->
Allows you use a variables to call a function of the same name.

function answer(){
  return 42;
}

$func = 'answer'
echo $func();

<!--  PHP Closures
============================================== -->
Closures are anonymous functions which are capable of accessing variables outside their scope. The keyword use allows you to use variables outside the scope of a function. When using anonymous functions, you must end function with a semi-colon.

<?php
  $name = 'friend';
  $greet = function() use ($name){
    echo "Hello there, $name.";
  };
  //note the use of semi-colon here
  $greet();
?>

<!--  PHP Built-In Functions
============================================== -->
//String Functions
$phrase = "We only hit what we aim for";

$start = strpos($phrase, 'hit');
echo substr($phrase, $start);

strpos returns an integer value from index 0 to start of string searched in $phrase.

substr returns part of a string.

<!--  Forms with PHP
============================================== -->
Form Checklist:
- A styled form
- Input validation
- Malicious code checker
- Honeypot Spam Technique
- Error messages displayed in form
- Re-display values after submission error
- Protect from XSS(Cross-site scripting)/Escaping Output

Create your form and assign the action to a php script to run the actions.

<form method="post" action="process.php">
  

  <label for="name">Name</label><br><input type="text" name="name" id="name"><br>
  <label for="email">Email</label><br><input type="text" name="email" id="email"><br>
  <label for="message">Message</label><br><input type="text" name="message" id="message"><br>

</form>

<!-- The process.php script will run the commands that will direct what you want to do with the data. This can also be the sheet that you want to show after the form submission -->

<?php include("contact-thanks.php");
//The "inlcude" could go directly at the top of the page with the opening php tags. The include would have the appropriate styling that you have set up beforehand.

  var_dump($_POST);
  $name = $_POST["name"];
  $name = $_POST["email"];
  $name = $_POST["message"];

?>

<!-- This is shown at the top of process.php. This creates variables from the object superglobal variable(always accessible no matter the scope) $_POST which allows you to call on the data from the form.

Note: This pulls data from ID of the input element unlike the for attribute in the label element which calls on the name in the input element. -->


Next is setting up some sort of thank you page to let the user know you received the form.


//========RE-DIRECTING AFTER A FORM SUBMISSION=========
So that the user cannot re-submit the form(payment etc.) by hitting the back button you would want to include a re-direct to a page that doesn't have the form.

You can redirect the user to another page like so:

header("Location: contact-thanks.php");
exit;

Or you can work with the same page with a status like so:

header("Location: contact.php?status=thanks");
exit;

Note: header() is a php function that changes the url of a page. In this situation header() adds a variable key and value('status' and 'thanks' are just variables and can be named anything) to the page so we can work on the form on same page. But there are a lot more uses for header().

The header status variable is stored in a object (superglobal) variable:
$_GET: Which is in the next section.

//========CHECKING THE REQUEST METHOD=========
Another object (superglobal) variable you should take note of is:
$_SERVER["REQUEST_METHOD"]
<!-- This pulls up information on the value assigned to the method attribute of the form. ie. 'get' or 'post' -->

You can check the request method with a conditional.

<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    var_dump($_POST);
    $name = $_POST["name"];
    $name = $_POST["email"];
    $name = $_POST["message"];

    header("Location: contact.php?status=thanks");
    //this adds a key and value you can call on the page
    exit;
    //always add exit; keyword after all header changes(when no more header chnages will be made) so that the script will be terminated after action.

  }
?>

Now if request is received you can direct what will happen with the next conditional.

<?php include("contact-thanks.php");
//add include-page with styling so that the page shows up complete.
  if (isset($_GET["status"]) AND $_GET["status"] == "thanks"){?>
    
    <p>Thanks we'll be in touch with you shortly.<p>
    Add 

<?php }?>

//========VALIDATING FORM DATA AND SECURITY=========
You can validate your form in the top php code block.
The trim function used here removes spaces and tabs from the variable $name.

<?php
//Add an if statement that will check if fields are empty but you should also check for valid characters
  if (trim($name) == "" OR trim($email) == "") {
    echo "Error message here";
    //This error message will be shown as plain text
    exit;
    //Note: Alternatively you can store error message in a variable and remove the exit command and instead mingle some html to show a proper page.
  }
?>


--Protection from Email Header Injection Exploit--
This is a snippet taken from the official php site to prevent malicious code from being entered in your code to affect your servers.
<?php 
  foreach($_POST as $value){
    if(stripos($value,'Content-Type:') !== FALSE){
      //An error message can be added here as well.
      echo "There was a problem with the information you entered."
      exit;
    }
  }
?>

--Honeypot Spam Technique--
This technique counts on an input field invisible to humans(display: none etc.) being filled out my robots. If it is filled then php will stop the code instead of sending the spammed fields.

Two parts are neccessary:
Add an input field as part of the form that looks to be legit but set its display to none.
    <div style="display:none;">
      <label for="address">Address</label>
      <input type="text" name="adress" id="address">
    </div>

The php code that detects if there is input.
    <?php 
      if($_POST['address'] != ""){
        //It is a good idea to include an error message just in case if the css doesn't load and shows the honeypot field.
        echo "There was a problem with the information you entered."
        exit;
      }
    ?>

--Re-display Form Data After Submission Error and Escaping Output--
You would want to show the values stored in the fields so that users can correct them more easily.
Using php echo the value of html forms to display if value is set.

You must also "escape output" to prevent malicious attacks to the form:
htmlspecialchars("string or variable here");
Adding this command sends input fields as regular text which ignores html commands so that code can't be used to hack your forms.
<input type="text" value="<?php if (isset($_POST["name"])){ echo htmlspecialchars($_POST["name"]); } ?>">
<textarea name="message" id="message"><?php if (isset($message)){ echo htmlspecialchars($message); } ?></textarea>

<!-- Clean URLs with Apache- Part One: Subfolders - (Absolute, Relative, Root-Relative Paths) 
========================================================================== -->
URL - Uniform Resource Locators
  Scheme -        http://
  domain -        http://elevenpages.com
  path -          http://elevenpages.com/articles/popular.php
  query string -  http://elevenpages.com/articles/popular.php?status=thanks

The above is an example of a messy URL. Websites in the real world are organized with heirarchal subfolders on the server. For better UX design and SEO management, you would want to clean up your URLs which can be achieved through introducing subfolders.

//Absolute, Relative and Root-Relative directories
Absolute - C:/elevenpages/html
  These always begin with a scheme and a domain name
Relative - ../../index.html or html/contact.html
  These use the path relative to the file location
Root-Relative - /css/main.css
  These always begin with a forward slash and start from the domain name

//Document Root Variable Constant
$_SERVER["DOCUMENT_ROOT"]
This holds the root of the document on the server.

//Refresher: Defining a Constant
define("NAME_OF_CONSTANT", "value goes here");

In XAMPP URLs are organized with folders in htdocs. Keeping webpages in folders and using index.php for each page is the first step of keeping clean URLs. You can direct pages to your directories and the browser will automatically load its index.php.

Steps:
1. Make sure the files in your directory are organized in subfolders.
2. Use root relative web addresses so that they can be found in your code.
    <link rel="stylesheet" href="/css/main.css">
    <a href="/shirts.php">Shirts</a>
    <img src="/img/banner.jpg">
3. PHP include() files should use absolute server paths.
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
4. Use constants to link to production server and development server.
  Create a config.php file
  Note: For files that are predominantly php it is actually good practice to not include closing tags so that white space is not accidently shown. The server will automatically close php tags anyway.
  
  In the file include create two constants, one for the client side base url and another for the server side root directory path.

    define("BASE_URL", "/elevenpages/");
    define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/elevenpages/");

  Note: Both constants are defined without variables this way they are independant of each other and can be changed fluidly just by updating the config file.

Note: The previous steps would have already been in your code through best practices and are incomplete steps. After setting up the constants in config.php the root relative web addresses in your code and includes should look like the following:

Note: the "/" before the paths are removed because it is included when the constant was defined.

Client Side
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css">
  <a href="<?php echo BASE_URL; ?>shirts.php">Shirts</a>
  <img src="<?php echo BASE_URL; ?>img/banner.jpg">

Server Side
  <?php include(ROOT_PATH . "inc/header.php"); ?>

<!-- Clean URLs with Apache- Part Two: Rewrite Rules
========================================================================== -->
XAMP which we are using to create a server-like environment for our php also includes Apache which allows us to clean up the web addresses with better urls.

1. Each webpage should be organized into their own folder.
2. Create a .htaccess file which will be a hidden file on your OS
3. Create a rewrite rule for cleaning up your web addresses.
Note: The syntax is not html or php and uses RegEx. There are two parts. 

First part looks for name of the page the browser is requesting:
Note: the name doesn't begin with a slash but ends with one.(The beginning slash is included in the domain name)

  ^articles/$
  The ^(carat) in RegEx indicates the beginning of a string
  The &(ampersand) in RegEx indicates the end of the string

Second part is the file address on the server:
  /articles/article.php
  Note: The slash is included. The address in the second part are root-relative to the web server.


Altogether in the .htaccess file should be(Save the file as is):
  RewriteEngine On
  RewriteRule ^arcticles/$ /articles/article.php

Note: All of this renaming happens on the server-side so there no page redirecting.
Note: Remember to update all paths to include the client side constant and the server side constant and the new clean URLs ex. ("article/")

<!-- A Teeny Bit of Extra RegEx
========================================================================== -->
In order to clean up the pages that hold a status query ex. shirt.php?id=108 we need to use more RegEx:
First part:
Following the page name and in forward slashes is a variable number for a shirt id.
  RewriteRule ^shirts/([0-9]+)/$  
    Inside the square brackets the RegEx is saying any character 0-9.
    Since we want any number of numbers so we add + after the [] which means any number of characters.
    This is contained in () to define it as a back reference in RegEx which acts like a variable and which will be called in Part Two.

Second part:
This part is mostly the same except for the inclusion of calling the id variable from Part One.
  /shirts/shirt.php?id=$1
    Back references in RegEx are called in order of creation starting from 1 and beginning with a $.
    In this instance there the variable we want is the first variable so it is $1.

Altogether:
  RewriteEngine On
  RewriteRule ^articles/$ /articles/article.php
  RewriteRule ^articles/([0-9]+)$ /articles/article.php?number=$1

<!--  Creating a Search Function
============================================== -->
This can be done a number of different ways but here are the basics. We have to create the form in html for the search input field and then we have to show the search results on the screen. This basic search uses only the name of the product as a condition.

Steps:
- create the form and return search value to search field after submit
- create a variable to hold the value of the search term
- create a function that takes care of displaying the search results(this can be displayed in html using php ex. get_list_view_html(). The example creates a list of products in html)
- create a function that adds the requested search term items to display view list
  - create an array to hold all the products
  - use a foreach statment and stripos to find if there is a match to display
  - add each match to a new array
- use previous function to display array as a list of items for view
- use if statements that handle 3 situations(empty field/ no results/ results)



<form method="GET" action="./">
  <input type="text" name="s" value="<?php if (isset($_GET["s"])){ echo htmlspecialchars($_GET["s"]); } ?>">
  <input type="submit" value="Search">
</form>

Here we are setting the input's "value" to value of the $_GET constant if there is a value so that on submit the search term will be shown in the input field when displaying the results. 

The default "method" of a form is GET and it stores the information of an input field in the constant $_GET which can be called with its "name". Calling the constant we use the input field's name as the key. It is best practice to use a GET method when dealing with search forms.

It is good practice to include method and action even with default values so that other devs will know you didn't forget them. Using proper folder structure the value the action attribute sends the information to the index page of the current folder. It is important to keep clean URLs so that techniques like this will not break the page.


<?php require_once("../inc/config.php");

$search_term = "";

if (isset($_GET["s"])){
  $search_term = trim($_GET["s"]);
  if ($search_term != "") {
    require_once(ROOT_PATH . "inc/products.php");
    $products = get_products_search($search_term);
    echo $products;
  }
}?>

Above we defined the variable to hold the search term. The first if statement checks to see if the search field is set then we use the trim command to remove whitespace in front of and at the end of the field. If the search term is set and not contain any un-needed whitespace then we use a function to display the search term.

It is good practice to use defensive coding practices during the process. Here we are displaying the raw data from a function that we will create to list the results as an array. Remove the last echo line after troubleshooting in the next step.


<?php function get_products_search($s) {
  $results = array();
  $all = get_products_all();

  foreach($all as $product) {
    if (stripos($product["name"],$s) !== false) {
      $results[] = $product;
    }
  }
  return $results;
}?>

Above, in products.php(we created a new file for organization) we created the function we are going to call when the user searches a term. We created an array to hold the search results and created a function that lists all the products. 

Then we use a foreach statement to loop through each product and use a stripos command to check if there is a match with our search result. The stripos function returns an int to show the position of the match to a string, if there is no match then a false bool is returned. We are only interested to see if there will be a match so the conditional states if stripos is not false to add each product in the results array. After it has looped through all the results it returns the array.

<?php
if ($search_term != ""){
  if (!empty($products)) {
    echo '<ul class="products">';
    foreach ($product as $product) {
      echo get_list_view_html($product)
      //This function would output the product as html we need to display the file. The basics to add is an image link with a title but you can output what ever data you like.
    }
    echo '</ul>';
  } else {
    echo '<p>No search results to match your search term were found.</p>';
  }
}?>

Lastly we have the conditionals that will deal with the different scenarios of the search field. First we check if the search field is empty again and if not then we go to the next conditional. Next if the products array we use to hold the search results is not empty then we display the products as list items. If there are no products that match then we display a message notifying the user.

<!--  PHP CLASSES
============================================== -->
<?php 

class Fish
{
  public static $manufacturer = "Bart Taylor";
  //this is a static property that will be the same for all products that call it

  public $common_name;
  public $flavor;
  public $record_weight;

  function __construct($name, $flavor, $record){
    $this->common_name = $name;
    $this->flavor = $flavor;
    $this->record_weight = $record;
  }

  public function getInfo(){
    return "The " . $this->name . " is an " . $this->flavor . "flavoured fish and has a record weight of " . $this->record . ".";
  }

  public function getMaker(){
    return self::$manufacturer;
  }
}

class Soda extends Product {
  public $location;

  function __construct($name, $flavor, $record, $location){
    parent:: __construct($name,$flavor,$record);
    $this->location = $location;
  }
}

$bass = new Fish("Largemouth Bass", "Excellent", "22 pounds 5 ounces");
echo $bass->getInfo();

?>

<!--  STATIC PROPERTY AND METHODS
============================================== -->
A static property or method is called with self::method() or self::property_name respectively.
The creation of a static method is shown in the code block above with the getMaker() method which calls the static property manufacturer.

Here's how to call that static property:
<?php 
$shirt::$manufacturer;
$shirt->getMaker();

echo $shirt::$manufacturer;
echo $shirt->getMaker();
?>
Trying to get the property with a regular call will result in an error.
    <?php echo $shirt->manufacturer;?>
This is because we don't have access to the object operator as it static to the parent class.

<!--  OBJECT INTERFACES
============================================== -->
Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are handled.

Interfaces are defined using the interface keyword, in the same way as a standard class, but without any of the methods having their contents defined.

All methods declared in an interface must be public; this is the nature of an interface.

To implement an interface, the implements operator is used. All methods in the interface must be implemented within a class; failure to do so will result in a fatal error. Classes may implement more than one interface if desired by separating each interface with a comma.

<?php

// Declare the interface 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface
// This will work
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}

// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>



