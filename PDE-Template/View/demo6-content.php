<!-- Demo 5 JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create an if statement to validate the data in the input. If the entered value is empty or 
      over 10 characters display corresponding error messages in the p tag, otherwise display the entered value.</h4>

    <button id="buttonOne" onclick="functionOne( document.getElementById('InputOne').value )">Enter</button>
    <input id="InputOne">
    <p id="outcomeOne"></p>
    <script>
      function functionOne(input)
      {
        //Place Answer Here
        if(input == "")
        {
          document.getElementById("outcomeOne").innerHTML = "Input was empty";       
        }
        else if(input.length > 10)
        {
          document.getElementById("outcomeOne").innerHTML = "Input was over 10";         
        }
        else
        {
          document.getElementById("outcomeOne").innerHTML = input;         
        }
          
        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Use the pre-built item list to create a switch that displays a description of the chosen item in the p tag on button click. 
      Display an error if anything else is entered</h4>

    <button id="buttonTwo" onclick="functionTwo( document.getElementById('InputTwo').value )">Enter</button>
    <input id="InputTwo">
    <ul>
      <li>1 - Frost Potion</li>
      <li>2 - Sword of Flame</li>
      <li>3 - Old Spell Book</li>
      <li>4 - Bag of Holding</li>
      <li>5 - Goblin's Hand</li>
    </ul>
    <p id="outcomeTwo"></p>
    <script>
      function functionTwo(input)
      {
        //Place Answer Here
        switch(input)
        {
          case "1":
            document.getElementById("outcomeTwo").innerHTML="a small taste of the other side(of the building)";
          break;
          case "2":
            document.getElementById("outcomeTwo").innerHTML="the sword of the training room";
          break;
          case "3":
            document.getElementById("outcomeTwo").innerHTML="THE SACRED TECKTS";
          break;
          case "4":
            document.getElementById("outcomeTwo").innerHTML="bag that can hold stuff";
          break;
          case "5":
            document.getElementById("outcomeTwo").innerHTML="the still bleeding theiving hand of a gold stealing clash of clans goblin, does double damage on resource buildings when equiped.";
          break;
          default:
            document.getElementById("outcomeTwo").innerHTML="WUH? THERE IS NUTHIN IN THAT POSITION";
          break;
        }

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 2 -->

<!-- Question 3 -->
  <div class='student-response'>
    <h1>Question #3:</h1>
    <h4>Create a for loop that will accept the user's input and check each element of the pre-built array. 
      If any match the user's input display "Match Found!" otherwise display "No Match"</h4>

    <button id="buttonThree" onclick="functionThree( document.getElementById('InputThree').value )">Enter</button>
    <input id="InputThree">
    
    <p id="outcomeThree"></p> 
         
    <script>
      var gameFiles = ["zork", "super mario bros", "pac-man", "the legend of zelda", "tetris", "street fighter", "donkey kong"]
      function functionThree(input)
      {
        //Place Answer Here
        var isFound = false;
        var lowerInput = input.toLowerCase();
        //convert to lowercase
  

        //to check each item in the array
        for(x = 0; x < gameFiles.length; x++)
        {
          //check if this is the game
            if(gameFiles[x] == lowerInput)
            {
              isFound=true;
            }
            
          }
        if(isFound)
        {
          document.getElementById("outcomeThree").innerHTML= "Match Found!";
        }
        else
        {
          document.getElementById("outcomeThree").innerHTML= "No Match";
        }


        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 3 -->

<!-- Question 4 -->
  <div class='student-response'>
    <h1>Question #4:</h1>
    <h4>Create a while loop that, on button click, increments a counter and displays each value while the total number of times looped is less 
        than the number the user entered. 
        Display the total number of times the loop has run in the p tag on each button click as well.</h4>

    <button id="buttonFour" onclick="functionFour( document.getElementById('InputFour').value )">Enter</button>
    <input id="InputFour">
    <p id="outcomeFour">0</p>
    <script>

      //counter variable for you to use
      var counter = 0;

      function functionFour(input)
      {
        //Place Answer Here
        
        //while loop that runs each time button is clicked 
        while(counter < input)
        {
          //increment our counter
          ++counter;

          //display each value
          document.getElementById("outcomeFour").innerHTML = document.getElementById("outcomeFour").innerHTML + " " + counter
        }
          
        //display the number of times looped
        document.getElementById("outcomeFour").innerHTML = document.getElementById("outcomeFour").innerHTML + "<br> The lup has ran " + counter + " times."

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 4 -->

<!-- Question 5 -->
  <div class='student-response'>
    <h1>Question #5:</h1>
    <h4>Create a loop that generates random numbers between 1 and 10 and displays each until their sum is equal to the entered number.</h4>

    <button id="buttonFive" onclick="functionFive( document.getElementById('InputFive').value )">Enter</button>
    <input id="InputFive">
    <p id="outcomeFive"></p>
    <script>
      function functionFive(input)
      {
        //Place Answer Here
         //declare variables to hold the total, the random, and display randoms'
        var intTotal = 0;
        var intRandom;
        var strDisplay = "";

        //do while to loo[ [ p]] through th ernadoms until we get the total

        do
        {
          //get a random
          intRandom = Math.floor(Math.random() * 10) +1;
          //ensure that we dont go over
          if(intTotal + intRandom <= input)
          {
            intTotal += intRandom;
            strDisplay += ' ' + intRandom;
          }

        }while(intTotal < input) // continue to lop[[[[[[[p]]]]]]] uuntil equal
         document.getElementById("outcomeFive").innerHTML = strDisplay;

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 5 -->

<!-- Question 6 -->
  <div class='student-response'>
    <h1>Question #6:</h1>
    <h4>Create the code so that when the user enters a string, it is split into an array and the 3rd element is returned. 
      If any error occurs, catch it and print an error message.</h4>

    <button id="buttonSix" onclick="functionSix( document.getElementById('InputSix').value )">Enter</button>
    <input id="InputSix">
    <p id="outcomeSix"></p>
    <script>
      function functionSix(input)
      {
        //Place Answer Here
        //Need a try catch the errors in the process
        try
        {
         //create and instantiate array from input
         var splitArray = input.split(",");
         //throw error if one occures
         if(splitArray.length < 2) throw "The entered string did not contain a comma separators.";
         //ensure that element 3 exists
         if(splitArray.length < 3 || splitArray[2] =="") throw "No elemant exsists in position three.";
         //since we made it throuhg validation , print elements
          document.getElementById("outcomeSix").innerHTML = splitArray[2];
        }
        catch(message)
        {
          //print error
          document.getElementById("outcomeSix").innerHTML = "poopy stinky";

        }

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 6 -->

<!-- Question 7 -->
  <div class='student-response'>
    <h1>Question #7:</h1>
    <h4>Create a starship object with name, speed, and weaponClass attributes. Accept a name as the input and display all attributes on button click.</h4>

    <button id="buttonSeven" onclick="functionSeven( document.getElementById('InputSeven').value )">Enter</button>
    <input id="InputSeven">
    <p id="outcomeSeven"></p>
    <script>
      function functionSeven(input)
      {
        //Place Answer Here
        
        //CREATE STARTSHIP OBJECT
        var starship = 
        {
          name: input,
          speed: Math.random().toFixed(2) + "Light Years per Hour",
          weaponsClass: "Level: " + (Math.floor(Math.random() * 10)+1)
        }
        document.getElementById("outcomeSeven").innerHTML =
         "Name: " + starship.name + "<br/>" + 
         "Speed: "+ starship.speed + "<br/>" + 
         "weaponsClass: "+ starship.weaponsClass + "<br/>";
        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 7 -->

<!-- Question 8 -->
  <div class='student-response'>
    <h1>Question #8:</h1>
    <h4>Create a blaster class that stores name, sound, and type. Then, on button click, create a few weapons and fire one based on what name the user entered.</h4>

    <button id="buttonEight" onclick="functionEight( document.getElementById('InputEight').value )">Enter</button>
    <input id="InputEight">
    <p id="outcomeEight"></p>
    <script>

      //Place Class Here (It's best to create classes outside the scope of functions to avoid creating a class with each click, rather than an object)
        class Blaster
        {
          constructor(nameVal, soundVal, typeVal)
          {
            this.name = nameVal;
            this.sound = soundVal;
            this.type = typeVal;
          }
        
          fire()
          {
            document.getElementById("outcomeEight").innerHTML = this.sound + " a ball of "+ this.type + " blasts off into the distance";
          }
        }
      //Place Class Here

      function functionEight(input) 
      {
        //Place Answer Here
        var weaponOne = new Blaster("flame cannon", "fshhhhhhh!", "fire");
        var weaponTwo = new Blaster("plasma rifle", "pew!", "plasma");
        var weaponThree = new Blaster("explosive launcher", "boom!", "explosives");

        //switch to determine which weapon should be fired
        switch(input.toLowerCase())
        {
          case weaponOne.name:
            weaponOne.fire();
            break;
            case weaponTwo.name:
              weaponTwo.fire();
              break;
            case weaponThree.name:
              weaponThree.fire();
              break;
              default:
              document.getElementById("outcomeEight").innerHTML = "No weapons found";
        }

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 8 -->



