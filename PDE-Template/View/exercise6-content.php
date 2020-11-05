<!-- Exercise JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
    <!-- Place Answer Here -->
      <label for="inputOne">Number of sides (for a dice)</label>
      <br>
      <input id="inputOne">

        <br>
      <label for="inputTwo">Number of times you roll your dice</label>
      <br>
      <input id="inputTwo">
      <button id="buttonOne" onclick="threeOutPuts(document.getElementById('inputOne').value, document.getElementById('inputTwo').value)">Roll your dice</button>
      <p id="OutputOne">output</p>
      <script>
      
     class Dice
      {
        constructor(sidesVal,rollsVal)
        {
          this.sides = sidesVal;
          this.rolls = rollsVal;
        }
        
        sidesOutput()
        {
          document.getElementById("OutputOne").innerHTML = "Your dice has this many sides: " + this.sides;
        }

        rollsOutput()
        {
          document.getElementById("OutputOne").innerHTML += "</br>number of your rolls m'lord " + this.rolls;
        }

        rollDice()
        {
         var timesRolled = this.rolls;
         var strDisplay;
         var intDisplayTotal = "";
         var totalNums = 0;
         for(var tr = 0; tr < timesRolled; tr++)
          {
            strDisplay = (Math.floor(Math.random() * this.sides)+1);
            totalNums += strDisplay;
            intDisplayTotal += strDisplay + ' ';    
          }
          return intDisplayTotal + " With a running total of: " + totalNums;
        }

      }
      function threeOutPuts(inputOne,inputTwo)
      {
        var theDice = new Dice(inputOne,inputTwo);
        theDice.sidesOutput();
        theDice.rollsOutput();
        var rollDiceOutput = theDice.rollDice();
        document.getElementById("OutputOne").innerHTML += "</br>Your results are:" + rollDiceOutput;

      } 
    
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
    <!-- Place Answer Here -->
            <!-- <label for="inputOne">Number of sides (for a dice)</label>
      <br>
      <input id="inputOne">

        <br>
      <label for="inputTwo">Number of times you roll your dice</label>
      <br>
      <input id="inputTwo">
      <button id="buttonOne" onclick="RollDice(document.getElementById('inputOne').value, document.getElementById('inputTwo').value)">roll your dice</button>
      <p id="OutputOne">Out Put</p> -->

      <script>
      // class dice
      // {
      //   constructor(sidesVal)
      //   {
      //     this.sides = sidesVal;
      //   }

      //   sidesOutput()
      //   {
      //     document.getElementById("OutputOne").innerHTML = "Your dice has this many sides:" + this.sides;
      //   }
      // }
      // function RollDice(inputOne, inputTwo)
      // {
      //  var sidesOfDie = new dice(inputOne);
      //  sidesOfDie.sidesOutput();
        
      //  var timesRolled = inputTwo;
      //  var strDisplay;
      //  var intDisplayTotal = "";
      //  var totalNums = 0;

      //  // document.getElementById("OutputOne").innerHTML ="You have this many sides: "+ inputOne;
      //   for(tr = 0; tr < timesRolled; tr++)
      //   {
       
      //      strDisplay = (Math.floor(Math.random() * inputOne)+1);
      //      totalNums += strDisplay;
      //      intDisplayTotal += strDisplay + ' ';
      //   }

 
        

      //   //intDisplayTotal = reduce(parseInt(intDisplayTotal));
      //    document.getElementById("OutputOne").innerHTML = "Your results are:" + intDisplayTotal + " With a running total of: " + totalNums
      // }
      

      // </script>


    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->

<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->
