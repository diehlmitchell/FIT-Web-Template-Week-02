<!-- Exercise JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a keyword brainwashed script. Add an input and a button, then add the code to add functionality. 
      The user will enter a long string of text, then on button click, the code will search the long string for a keyword and print everything after the keyword to a p tag. 
      (You may use "skeleton" as the keyword if you can't think of anything else.)</h4>
    <!-- Place Answer Here -->

    <input id="kbs">
    <button id="button" onClick="decode(document.getElementById('kbs').value )">decode</button>

    <p id="endMessage"></p>
    
    <script>
    function decode(input){
      var str = document.getElementById("kbs").value;
      gotSplit = str.split('skeleton')[1]; //splits on the skeleton, creates an array with 2 elements, [1] displays the 2nd array element. 
      document.getElementById("endMessage").innerHTML = gotSplit;
    }
    
    </script>
    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create the script and elements necessary to hold a game inventory. Create a hardcoded array for this inventory. 
        One input and button will be responsible for checking what item is at the entered index, 
        while another input and button will be responsible for entering how many of that item is stored. 
        (Hint two arrays or a 2 dimensional array is needed)</h4>
    <!-- Place Answer Here -->
    <input id="itemNumber">
    <button id="button2" onClick="inventory(document.getElementById('itemNumber').value)">Check inventory</button>
    <p id="return"></p>



    <script>
      var item = ["blackOps1", "AAPG", "MineCraft"];
      var amount = ["4", "3", "6"];

      function inventory(input){
      var itemNum = document.getElementById("itemNumber").value;
      document.getElementById("return").innerHTML = "Your item is " + item[itemNum] + " with an item amount of " + amount[itemNum]
    }

    </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question F -->
  <div class='student-response'>
    <h1>Find-IT #1:</h1>
    <h4>Create a time travel script. Use the necessary code and elements to allow the user to enter a date (in year, month, day, hour, and minute) 
        they would like to travel to. Then display the number of years, days, hours, and minutes they would need to travel to reach that date and time. 
        (Notice month is excluded)</h4>
    <!-- Place Answer Here -->
      
      

    <!-- Place Answer Here -->
  </div>
<!-- Question F -->

