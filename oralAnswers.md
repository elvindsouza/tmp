# Web Essentials

1. What is webpage, website? 

The basic difference between them is that webpage is a single web document, whereas a Website is a collection of different web pages

2. What is web application? 


A web application is a computer program that uses a web browser to perform a particular function. They are client-server programs, so each program has a client side and a server side.

 In the client-server environment, a client is a program an individual uses to run the application, while a server processes the data needed to run the application for the user. For example, with a database, the client is the program through which the user enters data and the server is the application that stores the information.

Websites often host web applications, which allow visitors to perform certain actions when they visit the site. For example, the website for a shoe company might host an online store application, which allows shoppers to add products to their carts and submit payments. The company's web administrator might choose which web applications to add to the site and customize the apps to meet their customers' needs. A website might host multiple applications, like chat modules, payment pages and interactive product customization tools.


3. What parameters you should consider when you are going to design the website? 

Choosing a Domain and Host
Backend Services (CMS “Content Management System” / Software)
Clean Design
Effective Color Scheme 
Branding
Functionality

4. Explain the functionality of a browser. 



    The main function is to retrieve information from the World Wide Web and making it available for users
    Visiting any website can be done using a web browser. When a URL is entered in a browser, the web server takes us to that website
    To run Java applets and flash content, plugins are available on the web browser
    It makes Internet surfing easy as once we reach a website we can easily check the hyperlinks and get more and more useful data online
    Browsers user internal cache which gets stored and the user can open the same webpage time and again without losing extra data 
    Multiple webpages can be opened at the same time on a web browser
    Options like back, forward, reload, stop reload, home, etc. are available on these web browsers, which make using them easy and convenient

5. What do you understand by Framework? 

A web app framework or web framework is a software framework that is created to support the development of dynamic sites, web services, and web applications.

6. How to improve the user experience for users visiting your website? 

Minimize your page load time.
Use clear calls to action.
Make sure your website is mobile-friendly and responsive.
Give them the longer content on deep pages. 
Add your social media links.
Use white space.
Keep the important information above the fold. 

7. How can we implement web services in web-based applications? 


Answer: Web application sends requests to a web service using the HTTP protocol. At a given URL, the web service processes the request and returns the response back to the application. SOAP and RESTful are two types of web services.

8. What would you build a responsive website for? 

Answer: Responsive web design help automatically resize the browser width and height based on desktops, tablets, and mobile with respect to desktop or laptop monitor size.

9. What do you mean by protocol? 

Answer: In networking terminology, the protocol is a set of rules to format and process data. In order to communicate, both devices should have the same protocol. Internet Protocol (IP) is a network layer protocol and is responsible for routing. Transmission Control Protocol (TCP) transfers packets of data across networks.

HyperText Transfer Protocol (HTTP) is a layer 7 used in the Internet and transfers data between devices. User Datagram Protocol (UDP) are used in fast data exchange applications like video streaming and gaming.

10. What is HTTP, HTTPS, DNS, WWW? 



11. What priorities you would consider while building a web application? 


    Web site pages should be tested for performance as it should load as quickly as possible.
    Applications pages should not have any broken links.
    The application should be compatible with all major browsers like Mozilla Firefox, Google Chrome, Internet Explorer and Opera.
    The site should contain keywords that are accessible to search engines.
    There should be seamless connectivity with the database.
    Database entities such as stored procedures should be thoroughly tested with valid input.
    Backend tables should be secured, tamper-proof.
    Data insertion should be validated by constraints at column and row levels.
    Inserting data into DB tables and viewing them in the user interface process should be as quickly as possible.
    The framework being used to integrate pages should be simple and should be tested without any compilation.
    User input pages should be designed with minimal inputs from the user, elements used should be user friendly to access.
    Use of HTTP2 to load page content quickly.
    The use of JavaScript should be minimum.
    Accessibility provision such as a speaker to read the text, bigger font size, screen touch access should be provided so that people with physical limitations can also access the website with ease.
    Should integrate media files like audio and video that can be opened without relying on local software to execute these files.
    Web pages should be responsive to mobile screens.

12. What are the key responsibilities of Web Developers? 

    Web developers need to present design specs
    Understand, create, and test applications for the website
    Know HTML, CSS, PHP, JavaScript, etc. for coding language
    Work with graphics
    Maintain and update websites
    Troubleshoot website problems
    Stay up-to-date on technology



# HTML

1. What is HTML?

HTML stands for Hyper Text Markup Language. It is a language of the World Wide Web. It is a standard text formatting language which is used to create and display pages on the Web. HTML makes the text more interactive and dynamic. It can turn text into images, tables, links. HTML pages are saved by adding .html or .html in web page name.

2. What are Tags?

HTML tags are composed of three things: an opening tag, content and ending tag. Some tags are unclosed tags.

HTML documents contain two things:

    content, and
    tags

When a web browser reads an HTML document, the browser reads it from top to bottom and left to right. HTML tags are used to create HTML documents and render their properties. Each HTML tags have different properties.

Syntax

    <tag> content </tag>  

Content is placed between tags to display data on the web page.

3. Do all HTML tags have an end tag?

No. There are some HTML tags that don't need a closing tag. For example: <image> tag, <br> tag. More details.

4. What is the difference between HTML elements and tags?

HTML elements communicate to the browser to render text. When the elements are enclosed by brackets <>, they form HTML tags. Most of the time, tags come in a pair and surround content.

Elements-The element is an individual component of the HTML web page or document. It represents semantics or meaning. For example, the title element represents the title of the document.

Tags-It is the root of the HTML document which is used to specify that the document is HTML. For example, the Head tag is used to contain all the head element in the HTML file.

5. How to insert a copyright symbol on a browser page?

You can insert a copyright symbol by using &copy; or &#169; in an HTML file.

6. How do you keep list elements straight in an HTML file?

You can keep the list elements straight by using indents.

Lists are automatically indented, by default & it is important to keep the list aligned according to the display preferences. In order to keep the list items in a straight line, there are a few CSS properties that are not only used to indent the content but also used for styling the list by featuring the customizable options, which are given below:

    text-indent property
    margin-left & padding-left property
    display property
    list-style-type property

There are several other approaches to accomplish this task

7. Does a hyperlink only apply to text?

No, you can use hyperlinks on text and images both. The HTML anchor tag defines a hyperlink that links one page to another page. The "href" attribute is the most important attribute of the HTML anchor tag.

8. What is a style sheet?

A style sheet is used to build a consistent, transportable, and well-designed style template. You can add these templates on several different web pages. It describes the look and formatting of a document written in markup language.

9. Can you create a multi-colored text on a web page?

Yes. To create a multicolor text on a web page you can use <font color ="color"> </font> for the specific texts you want to color.

10. Is it possible to change the color of the bullet?

The color of the bullet is always the color of the first text of the list. So, if you want to change the color of the bullet, you must change the color of the text.

11. Marquee

Marquee is used to put the scrolling text on a web page. It scrolls the image or text up, down, left or right automatically. You should put the text which you want to scroll within the <marquee>......</marquee> tag.

12. How many tags can be used to separate a section of texts?

Three tags are used to separate the texts.

- <br> tag - Usually <br> tag is used to separate the line of text. It breaks the current line and conveys the flow to the next line
- <p> tag - The <p> tag contains the text in the form of a new paragraph.
- <blockquote> tag - It is used to define a large quoted section. If you have a large quotation, then put the entire text within <blockquote>.............</blockquote> tag.

13. How to make a picture of a background image of a web page?

To make a picture a background image on a web page, you should put the following tag code after the </head> tag.

    <body background = "image.gif">  

Here, replace the "image.gif" with the name of your image file which you want to display on your web page.

14. What are the different new form element types in HTML5?

Following is a list of 10 frequently used new elements in HTML 5:

    Color
    Date
    Datetime-local
    Email
    Time
    Url
    Range
    Telephone
    Number
    Search

15. Is there any need to change the web browsers to support HTML5?

No. Almost all browsers (updated versions) support HTML 5. For example Chrome, Firefox, Opera, Safari, IE.

# CSS

1. What is CSS?

Using CSS, you can control exactly how HTML elements look in the browser, presenting your markup using whatever design you like. CSS is a language for specifying how documents are presented to users — how they are styled, laid out, etc.

A document is usually a text file structured using a markup language — HTML is the most common markup language, but you may also come across other markup languages such as SVG or XML.

2. Advantages of using CSS

CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, etc.

3. What are the components of a CSS Style?

   - Selector: class name, id name or element name that is target
   - Attribute: name of the attribute you want to style for example border, color, background, position etc.
   - Value of Property: value that will be assigned to attribute.

4. What is type selector?

The CSS type selector matches elements by node name. In other words, it selects all elements of the given type within a document.

5. Universal Selector

https://developer.mozilla.org/en-US/docs/Web/CSS/Universal_selectors

The CSS universal selector (\*) matches elements of any type.

/_ Selects all elements _/

- {
  color: green;
  }

The universal selector is a special type selector and can therefore be namespaced when using @namespace. This is useful when dealing with documents containing multiple namespaces such as HTML with inline SVG or MathML, or XML that mixes multiple vocabularies.

    ns|* - matches all elements in namespace ns
    *|* - matches all elements
    |* - matches all elements without any declared namespace

Syntax

- { style properties }

6. What is Descendant Selector?

Descendant combinator

The descendant combinator — typically represented by a single space (" ") character — combines two selectors such that elements matched by the second selector are selected if they have an ancestor (parent, parent's parent, parent's parent's parent, etc.) element matching the first selector. Selectors that utilize a descendant combinator are called descendant selectors.

/_ List items that are descendants of the "my-things" list _/
ul.my-things li {
margin: 2em;
}

The descendant combinator is technically one or more CSS white space characters — the space character and/or one of four control characters: carriage return, form feed, new line, and tab characters — between two selectors in the absence of another combinator. Additionally, the white space characters of which the combinator is comprised may contain any number of CSS comments.
Syntax

selector1 selector2 {
/_ property declarations _/
}

7. What is class selector?

The CSS class selector matches elements based on the contents of their class attribute.

/_ All elements with class="spacious" _/
.spacious {
margin: 2em;
}

/_ All <li> elements with class="spacious" _/
li.spacious {
margin: 2em;
}

/_ All <li> elements with a class list that includes both "spacious" and "elegant" _/
/_ For example, class="elegant retro spacious" _/
li.spacious.elegant {
margin: 2em;
}

Syntax

.class_name { style properties }

Note that this is equivalent to the following attribute selector:

[class~=class_name] { style properties }

8. Can you make a class selector particular to an element type?

only specific html elements should be affected by a class. To do this, start with the element name, then write the period (.) character, followed by the name of the class ...

9. What is id selector?

An ID selector begins with a # rather than a dot character, but is used in the same way as a class selector. However, an ID can be used only once per page, and elements can only have a single id value applied to them. It can select an element that has the id set on it, and you can precede the ID with a type selector to only target the element if both the element and ID match. You can see both of these uses in the following example:

10. What is a child selector?

Child combinator

The child combinator (>) is placed between two CSS selectors. It matches only those elements matched by the second selector that are the direct children of elements matched by the first.

/_ List items that are children of the "my-things" list _/
ul.my-things > li {
margin: 2em;
}

Elements matched by the second selector must be the immediate children of the elements matched by the first selector. This is stricter than the descendant combinator, which matches all elements matched by the second selector for which there exists an ancestor element matched by the first selector, regardless of the number of "hops" up the DOM.
Syntax

selector1 > selector2 { style properties }

11. What is an attribute selector?

Attribute selectors

The CSS attribute selector matches elements based on the presence or value of a given attribute.

/_ <a> elements with a title attribute _/
a[title] {
color: purple;
}

/_ <a> elements with an href matching "https://example.org" _/
a[href="https://example.org"]
{
color: green;
}

/_ <a> elements with an href containing "example" _/
a[href*="example"] {
font-size: 2em;
}

/_ <a> elements with an href ending ".org" _/
a[href$=".org"] {
font-style: italic;
}

/_ <a> elements whose class attribute contains the word "logo" _/
a[class~="logo"] {
padding: 2px;
}

Syntax

[attr]

    Represents elements with an attribute name of attr.

[attr=value]

    Represents elements with an attribute name of attr whose value is exactly value.

[attr~=value]

    Represents elements with an attribute name of attr whose value is a whitespace-separated list of words, one of which is exactly value.

[attr|=value]

    Represents elements with an attribute name of attr whose value can be exactly value or can begin with value immediately followed by a hyphen, - (U+002D). It is often used for language subcode matches.

[attr^=value]

    Represents elements with an attribute name of attr whose value is prefixed (preceded) by value.

[attr$=value]

    Represents elements with an attribute name of attr whose value is suffixed (followed) by value.

[attr*=value]

    Represents elements with an attribute name of attr whose value contains at least one occurrence of value within the string.

[attr operator value i]

    Adding an i (or I) before the closing bracket causes the value to be compared case-insensitively (for characters within the ASCII range).

[attr operator value s] Experimental

    Adding an s (or S) before the closing bracket causes the value to be compared case-sensitively (for characters within the ASCII range).

12. How to select all paragraph elements with a lang attribute

# Bootstrap

1. Explain what is Bootstrap?

Bootstrap is a HTML, CSS, and JS framework for building the rich web applications with minimal effort. This framework emphasis more on

2. Explain why to choose Bootstrap for building the websites?

There are few reason why we choose Bootstrap for building websites

    Mobile Support: For mobile devices it provides full support in one single file rather than in separate file. It supports the responsive design including adjusting the CSS based on the different types of device, size of the screen etc. It reduces extra effort for developers.
    Easy to Learn: Writing application in bootstrap is easy if you know CSS and HTML
    Browser Support: It supports all the popular browsers like Firefox, Opera, Safari, IE etc.

3. What are the key components of Bootstrap?

The key components of Bootstrap are

    CSS : It comes with plenty of CSS files
    Scaffolding : It provides a basic structure with Grid system , link styles and background
    Layout Components : List of layout components
    JavaScript Plugins : It contains many jQuery and JavaScript plugins
    Customize : To get your own version of framework you can customize your components

4. Explain what is Bootstrap Container?

Bootstrap container is a class which is useful and creates a centred area within the page where our site content can be put within. The advantage of the bootstrap .container is that it is responsive and will place all our other HTML code.

5. What are the types of layout available in Bootstrap?

In Bootstrap there are two types of Layout available

    Fluid Layout: Fluid layout is used when you want to create a app that is 100% wide and use up all the width of the screen
    Fixed Layout: For a standard screen you will use fixed layout (940 px) option

6. Explain what is Bootstrap Grid System?

For creating page layout through a series of rows and columns that house your content Bootstrap Grid Sytem is used.

7. What is the use of Jumbotron in Bootstrap?

In bootstrap, Jumbotron is generally used for content that you want to highlight like some slogan or marketing headline etc. in other words it is used to enlarge the size of the headings and to add a margin for landing page content

To use the Jumbotron in Bootstrap

    Create a container <div> with the class of .jumbotron

8. What are offset columns in Bootstrap?

For more specialized layouts offsets are a useful feature. For more spacing they can be used by pushing column over.

For example, .col-xs=\* classes do not support offset but they are easily replicated using an empty cell

# JavaScript

1. What is JavaScript?

JavaScript is a scripting language. It is different from Java language. It is object-based, lightweight, cross-platform translated language. It is widely used for client-side validation. The JavaScript Translator (embedded in the browser) is responsible for translating the JavaScript code for the web browser. More details.

2. How to write a hello world example of JavaScript?

A simple example of JavaScript hello world is given below. You need to place it inside the body tag of HTML.

    <script type="text/javascript">  
    document.write("JavaScript Hello World!");  
    </script>  

3. How to use external JavaScript file?

I am assuming that js file name is message.js, place the following script tag inside the head tag.

    <script type="text/javascript" src="message.js"></script>  

4. Is JavaScript case sensitive language?

Yes, JavaScript is a case sensitive language. For example:

    Var msg = "JavaScript is a case-sensitive language"; //Here, var should be used to declare a variable  
    function display()   
    {  
    document.writeln(msg); // It will not display the result.  
    }   
    display();  

5. What is DOM? What is the use of document object?

DOM stands for Document Object Model. A document object represents the HTML document. It can be used to access and change the content of HTML.

6. What is the use of window object?

The window object is created automatically by the browser that represents a window of a browser. It is not an object of JavaScript. It is a browser object.

7. How to write a comment in JavaScript?

There are two types of comments in JavaScript.

    Single Line Comment: It is represented by // (double forward slash)
    Multi-Line Comment: Slash represents it with asterisk symbol as /* write comment here */

8. How to create a function in JavaScript?

To create a function in JavaScript, follow the following syntax.

    function function_name(){  
    //function body  
    }  

9. What are the different data types present in JavaScript?

There are two types of data types in JavaScript:

    Primitive data types
    Non- Primitive data types

Primitive data types

The primitive data types are as follows:

String: The string data type represents a sequence of characters. It is written within quotes and can be represented using a single or a double quote.

Example:

    var str1 = "Hello JavaTpoint"; //using double quotes  
    var str2 = 'Hello Javatpoint'; //using single quotes  

Number: The number data type is used to represent numeric values and can be written with or without decimals.

Example:

    var x = 5; //without decimal  
    var y = 5.0; //with decimal  

Boolean: The Boolean data type is used to represent a Boolean value, either false or true. This data type is generally used for conditional testing.

Example:

    var x = 5;  
    var y =  6;  
    var z =  5;  
    (x == y) // returns false  
    (x == z) //returns true  

BigInt: The BigInt data type is used to store numbers beyond the Number data type limitation. This data type can store large integers and is represented by adding "n" to an integer literal.

Example:

    var bigInteger =  123456789012345678901234567890;  
    // This is an example of bigInteger.  

Undefined: The Undefined data type is used when a variable is declared but not assigned. The value of this data type is undefined, and its type is also undefined.

Example:

    var x; // value of x is undefined  
    var y = undefined; // You can also set the value of a variable as undefined.  

Null: The Null data type is used to represent a non-existent, null, or a invalid value i.e. no value at all.

Example:

    var  x = null;  

Symbol: Symbol is a new data type introduced in the ES6 version of JavaScript. It is used to store an anonymous and unique value.

Example:

    var symbol1 = Symbol('symbol');  

typeof: The typeof operator is used to determine what type of data a variable or operand contains. It can be used with or without parentheses (typeof(x) or typeof x). This is mainly used in situations when you need to process the values of different types.

Example:

    typeof 10;  // Returns: "number"  
    typeof 10.0;  // Returns: "number"  
    typeof 2.5e-4;  // Returns: "number"  
    typeof Infinity;  // Returns: "number"  
    typeof NaN;  // Returns: "number". Despite being "Not-A-Number"  
    // Strings  
    typeof '';  // Returns: "string"  
    typeof 'Welcome to JavaTpoint';  // Returns: "string"  
    typeof '12';  // Returns: "string". Number within quotes is typeof string  
    // Booleans  
    typeof true;  // Returns: "boolean"  
    typeof false;  // Returns: "boolean"  
    // Undefined  
    typeof undefined;  // Returns: "undefined"  
    typeof undeclaredVariable; // Returns: "undefined"  
    // Null  
    typeof Null;  // Returns: "object"  
    // Objects  
    typeof {name: "John", age: 18};  // Returns: "object"  
    // Arrays  
    typeof [1, 2, 3];  // Returns: "object"  
    // Functions  
    typeof function(){};  // Returns: "function"  

Non-Primitive data types

In the above examples, we can see that the primitive data types can store only a single value. To store multiple and complex values, we have to use non-primitive data types.

The non-primitive data types are as follows:

Object: The Object is a non-primitive data type. It is used to store collections of data. An object contains properties, defined as a key-value pair. A property key (name) is always a string, but the value can be any data type, such as strings, numbers, Booleans, or complex data types like arrays, functions, and other objects.

Example:

    // Collection of data in key-value pairs  
    var obj1 = {  
       x:  123,  
       y:  "Welcome to JavaTpoint",  
       z: function(){  
          return this.x;  
       }  
    }  

Array: The Array data type is used to represent a group of similar values. Every value in an array has a numeric position, called its index, and it may contain data of any data type-numbers, strings, Booleans, functions, objects, and even other arrays. The array index starts from 0 so that the first array element is arr[0], not arr[1].

Example:

    var colors = ["Red", "Yellow", "Green", "Orange"];  
    var cities = ["Noida", "Delhi", "Ghaziabad"];  
    alert(colors[2]);   // Output: Green  
    alert(cities[1]);   // Output: Delhi  

More details.

10. How to create objects in JavaScript?

There are 3 ways to create an object in JavaScript.

    By object literal
    By creating an instance of Object
    By Object Constructor

- JavaScript Object by object literal

The syntax of creating object using object literal is given below:

    object={property1:value1,property2:value2.....propertyN:valueN}  

As you can see, property and value is separated by : (colon).

Let’s see the simple example of creating object in JavaScript.

    <script>  
    emp={id:102,name:"Shyam Kumar",salary:40000}  
    document.write(emp.id+" "+emp.name+" "+emp.salary);  
    </script>  

- By creating instance of Object

The syntax of creating object directly is given below:

    var objectname=new Object();  

Here, new keyword is used to create object.

Let’s see the example of creating object directly.

    <script>  
    var emp=new Object();  
    emp.id=101;  
    emp.name="Ravi Malik";  
    emp.salary=50000;  
    document.write(emp.id+" "+emp.name+" "+emp.salary);  
    </script>  

- By using an Object constructor

Here, you need to create function with arguments. Each argument value can be assigned in the current object by using this keyword.

The this keyword refers to the current object.

The example of creating object by object constructor is given below.

    <script>  
    function emp(id,name,salary){  
    this.id=id;  
    this.name=name;  
    this.salary=salary;  
    }  
    e=new emp(103,"Vimal Jaiswal",30000);  
      
    document.write(e.id+" "+e.name+" "+e.salary);  
    </script>  

11. How to create an array in JavaScript?

There are 3 ways to create an array in JavaScript.

- By array literal

The syntax of creating array using array literal is given below:

    var arrayname=[value1,value2.....valueN];  

As you can see, values are contained inside [ ] and separated by , (comma).

Let's see the simple example of creating and using array in JavaScript.

    <script>  
    var emp=["Sonoo","Vimal","Ratan"];  
    for (i=0;i<emp.length;i++){  
    document.write(emp[i] + "<br/>");  
    }  
    </script>  

-  By creating an instance of Array

The syntax of creating array directly is given below:

    var arrayname=new Array();  

Here, new keyword is used to create instance of array.

Let's see the example of creating array directly.

    <script>  
    var i;  
    var emp = new Array();  
    emp[0] = "Arun";  
    emp[1] = "Varun";  
    emp[2] = "John";  
      
    for (i=0;i<emp.length;i++){  
    document.write(emp[i] + "<br>");  
    }  
    </script>  

-  By using an Array constructor

Here, you need to create instance of array by passing arguments in constructor so that we don't have to provide value explicitly.

The example of creating object by array constructor is given below.

    <script>  
    var emp=new Array("Jai","Vijay","Smith");  
    for (i=0;i<emp.length;i++){  
    document.write(emp[i] + "<br>");  
    }  
    </script>  

12. Difference between Client side JavaScript and Server side JavaScript? 

Client-side JavaScript comprises the basic language and predefined objects which are relevant to running JavaScript in a browser. The client-side JavaScript is embedded directly by in the HTML pages. The browser interprets this script at runtime.

Server-side JavaScript also resembles client-side JavaScript. It has a relevant JavaScript which is to run in a server. The server-side JavaScript are deployed only after compilation.

13. Are Java and JavaScript same?

No, Java and JavaScript are the two different languages. Java is a robust, secured and object-oriented programming language whereas JavaScript is a client-side scripting language with some limitations.

14. What are the pop-up boxes available in JavaScript? 


    Alert Box
    Confirm Box
    Prompt Box

15. How to change the background color of HTML document using JavaScript?

    <script type="text/javascript">  
    document.body.bgColor="pink";  
    </script>  

16. How to validate email in JavaScript?

    <script>  
    function validateemail()  
    {  
    var x=document.myform.email.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
      alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
      return false;  
      }  
    }  
    </script>  
    <body>  
    <form name="myform"  method="post" action="#" onsubmit="return validateemail();">  
    Email: <input type="text" name="email"><br/>  
      
    <input type="submit" value="register">  
    </form>  


# XML

1. What is XML?

XML is called Extensible Markup Language which is designed to carry or transport and store data. XML tags are not as predefined as HTML, but we can define our own user tags for simplicity. It mainly concentrates on storing of data, not on displaying of data.


What is XML Element?

An XML document contains XML Elements, and it starts from an element’s start tag to end tag. It can contain:

    Other elements within main element
    An Attribute
    text

2. differences between HTML and XML:

HTML                                     XML
Markup language used to display data 	Markup language used to store data
Case Insensitive 	Case sensitive
Designing web pages 	Used to transport and store data
Predefined Tags 	Custom Tags
Does not Preserve white spaces 	Preserve white spaces
Static 	Dynamic

3. Which tag is used to find the version of XML and the syntax? 

Declaring the XML version is very important for each XML document and platform needs to be specified in which it is running.

<?xml version=”1.1” encoding=”|ISO-8859-1|”?>

4. What is XML DOM Document? 

XML Document object represents the whole XML document, and it is the root of a document tree. It gives access to entire XML document – Nodes and Elements, and it has its own properties.

5. What is an attribute? 

An attribute provides more or additional information about an element than otherwise.

Example –

<Person name=”Peter”>

Attribute name can be given to an element person.

6. Can we have empty XML tags? 

Yes, we can have empty tags in XML. Empty tags are used to indicate elements that have no textual content. Empty tags can be represented as

 <person></person>

 <person/>

7. What are the advantages of XML DOM Document? 

Advantages of XML DOM:

    XML structure is traversable, and it can be randomly accessed by traversing the tree.
    XML structure is modifiable, and values can be added, changed and removed


8. What are the basic rules while writing XML? 


These are the basic rules while writing XML:

    All XML should have a root element
    All tags should be closed
    XML tags are case sensitive
    All tags should be nested properly
    Tag names cannot contain spaces
    Attribute value should appear within quotes
    White space is preserved

9. What is CDATA? 

CDATA is unparsed character data that cannot be parsed by the XML parser. Character < and > are illegal in XML elements. CDATA section starts with <![CDATA[“ and end with “]]>”.


10. How comment can be represented in XML/HTML? 

Comment can be represented as <!- – comments – -> as like HTML. This comment symbol is applicable for single or multiple lines.


11. What are XML Namespaces? 

XML namespaces are used to avoid element name conflicts, and it can be avoided by using prefix before the name.

12. What is XSL? Why XSLT is important for XML? 


XSL is a language used with XML for expressing style sheets as like CSS. It describes how to display an XML document for a given type.

XSLT is abbreviated as eXtensible Stylesheet Language Transformation which is used to transform an XML document to HTML before it is displayed to the browser.

13. What is DTD?

DTD is abbreviated as Document Type Definition and it is defined to build legal building blocks of an XML document. It defines the XML document structure with elements and attributes.

# PHP-MySQL

# AJAX

1) What is AJAX?

AJAX stands for Asynchronous JavaScript and XML. It is a group of related technologies used to display data asynchronously. In other words, it sends and retrieves data without reloading the web page. More details.

2) What are the advantages of AJAX?

    Quick Response
    Bandwidth utilization
    The user is not blocked until data is retrieved from the server.
    It allows us to send only important data to the server.
    It makes the application interactive and faster.

What are the disadvantages of AJAX?

Dependent on JavaScript
Security issues
Debugging is difficult


3. What are the real web applications of AJAX currently running in the market?

    Twitter
    Facebook
    Gmail
    Javatpoint
    Youtube

4. What are the security issues with AJAX?

    AJAX source code is readable
    Attackers can insert the script into the system

5. What is the difference between synchronous and asynchronous requests?

Synchronous request blocks the user until a response is retrieved whereas asynchronous doesn't block the user.

6. What are the technologies used by AJAX?

    HTML/XHTML and CSS - These technologies are used for displaying content and style.
    DOM - It is used for dynamic display and interaction with data.
    XML - It is used for carrying data to and from server
    XMLHttpRequest - It is used for asynchronous communication between client and server.
    JavaScript - It is used mainly for client-side validation

7. What is the purpose of XMLHttpRequest?

    It sends data in the background to the server.
    It requests data from the server.
    It receives data from the server.
    It updates data without reloading the page.

8. What are the properties of XMLHttpRequest?

The important properties of the XMLHttpRequest object are given below.

onReadyStateChange - It is called whenever readystate attribute changes.
readyState - It represents the state of the request.
responseText - It returns response as text.
responseXML - It returns response as XML.
status - It returns the status number of a request.
statusText - It returns the details of status.

9. What are the important methods of XMLHttpRequest?

    abort() - It is used to cancel the current request.
    getAllResponseHeaders() - It returns the header details.
    getResponseHeader() - It returns the specific header details.
    open() - It is used to open the request.
    send() - It is used to send the request.
    setRequestHeader() - It adds request header.

10. What are the types of open() method used for XMLHttpRequest?

    open(method, URL) - It opens the request specifying get or post method and URL.
    open(method, URL, async) - It is same as above but specifies asynchronous or not.
    open(method, URL, async, username, password) - It is same as above but specifies the username and password.

11. What are the types of send() method used for XMLHttpRequest?

    send() - It sends get request
    send(string) - It sends post request.

12.  What is the role of the callback function in AJAX?

The callback function passes a function as a parameter to another function. If we have to perform various AJAX tasks on a website, then we can create one function for executing XMLHttpRequest and a callback function to execute each AJAX task.

13. How can you test the AJAX code?

JUnit is the open source unit testing framework for client-side JavaScript. It is required to create test cases. The unit test case is a code which ensures that the program logic works as expected.

14. What is the difference between JavaScript and AJAX?

JavaScript is an object-based scripting language. 	AJAX is a group of inter-related technologies like JavaScript, XML, HTML, CSS etc
It requests the server and waits for the response. 	It sends a request to the server and doesn't wait for the response.
It consumes more bandwidth as it reloads the page. 	It doesn't reload the page so consumes less bandwidth.
