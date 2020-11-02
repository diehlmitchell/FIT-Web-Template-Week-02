<!-- Demo 5 JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a paragraph tag and write your favorite video game titles into it using a script.</h4>
    <!-- Place Answer Here -->
    <p id="MyVideoGame"></p>

    <script>
    document.getElementById("MyVideoGame").innerHTML = "Black Ops One and Gmod";
    </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create two string variables for your first and last name, then write them into an h3 tag.</h4>
    <!-- Place Answer Here -->  
    <h3 id="fullName"></h3>

    <script>
    var firstName = "Mitchell";
    var lastName = "Diehl";
    document.getElementById("fullName").innerHTML = firstName + " " + lastName;
     </script>
      
    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question 3 -->
  <div class='student-response'>
    <h1>Question #3:</h1>
    <h4>Write your favorite quote in a string variable, then print it to a p tag and its length to another p tag.</h4>
    <!-- Place Answer Here -->
    <p id="quoteText"></p>
      <p id= "quoteLength"></p>
      <script>
      
      var quote ="\"There's no such thing as as a good pun only the bad ones are the good ones.\"";
      
      document.getElementById("quoteText").innerHTML = quote;
      document.getElementById("quoteLength").innerHTML = "This quote has " + quote.length + " characters";     
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 3 -->

<!-- Question 4 -->
  <div class='student-response'>
    <h1>Question #4:</h1>
    <h4>Create an array of a few of your favorite foods, then display your absolute favorite from the list with a description.</h4>
    <!-- Place Answer Here -->
      <p id= "favFood"></p>

      <script>
      var foods = ["Cheeseburger", "Onion Ring", "Curly Fries"];
      document.getElementById("favFood").innerHTML = foods[0];
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 4 -->

<!-- Question 5 -->
  <div class='student-response'>
    <h1>Question #5:</h1>
    <h4>Create an array, then add an element value onto the end and display it without using indexes.</h4>
    <!-- Place Answer Here -->
    <p id="displayColors"></p>
    <script>
    var colors = [];
    colors.push("Purple","Violet","Blue")
    document.getElementById("displayColors").innerHTML = colors;
    </script>


    <!-- Place Answer Here -->
  </div>
<!-- Question 5 -->

<!-- Question 6 -->
  <div class='student-response'>
    <h1>Question #6:</h1>
    <h4>Create a date object for your birthday or some date special to you and write it to the document.</h4>
    <!-- Place Answer Here -->
    <p id="bd"></p>
    <script>
      var d = new Date(2001, 11, 28)
      document.getElementById("bd").innerHTML = d;
    </script>

      

    <!-- Place Answer Here -->
  </div>
<!-- Question 6 -->

<!-- Question 7 -->
  <div class='student-response'>
    <h1>Question #7:</h1>
    <h4>Get the current time and print it to a p tag span with description in the p tag.</h4>
    <!-- Place Answer Here -->
    <p id="cd"></p>
    <script>
      var currentDate = new Date()
      document.getElementById("cd").innerHTML = currentDate;
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 7 -->

<!-- Question 8 -->
  <div class='student-response'>
    <h1>Question #8:</h1>
    <h4>Create a p tag that displays :| normally, and displays :D when waved over (or some other small art) using JS.</h4>
    <!-- Place Answer Here -->
    
    <p id ="f" onmouseover = "newFace()" onmouseout = "oldFace()" >:(</p>
    
     
     <script>
     function newFace(){
    document.getElementById("f").innerHTML = ":)";
     };

     function oldFace(){
    document.getElementById("f").innerHTML = ":(";
     };

     </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 8 -->

<!-- Question 9 -->
  <div class='student-response'>
    <h1>Question #9:</h1>
    <h4>Create a function that accepts a first name and last name, concatenates the two with a space between them, and returns them. Use this function to print your name to a p tag.</h4>
    <!-- Place Answer Here -->
    <p id ="firstName2" onclick = "prompt1()">click me to prompt first name window</p>
    <hr>
    <p id ="lastName2" onclick = "prompt2()">click me me to prompt last name window</p>
    <hr>
    <p id="endName"><p>
    <script>

      function prompt1(){
      var firstName2 = window.prompt("Enter your first name: ");
     };

     function prompt2(){
      var lastName2 = window.prompt("Enter your last name: ");
      
     };

     var concatName = firstName2.concat(" " + lastName2);
     document.getElementById("firstName2").innerHTML = firstName2;
     document.getElementById("lastName2").innerHTML = lastName2;
     document.getElementById("endName").innerHTML = concatName;
    </script>
    <!-- Place Answer Here -->
  </div>
<!-- Question 9 -->

<!-- Question 10 -->
  <div class='student-response'>
    <h1>Question #10:</h1>
    <h4>Create a button that calls a function that accepts the value from an input tag as a parameter and prints to a p tag a string of that value with 
      " -One of our happy customers" appended onto the end.</h4>
    <!-- Place Answer Here -->
      <label for="happyCustomerInput">Quote Input</label>
      <input id="happyCustomerInput">
      <P id="customerQuoteDisplay"></P>

      <button id="customerQuoteButton" onClick="makeQuote(document.getElementById('happyCustomerInput').value )">Save Quote</button>

      <script>
      function makeQuote(input){
      document.getElementById("customerQuoteDisplay").innerHTML = "\"" + input + "\" -one of our happy customers";
      }


      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 10 -->

