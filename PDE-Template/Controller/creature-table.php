<?php

    echo"
    <table>
  <tr>
    <th>Name</th>
    <th>Challenge rating</th>
    <th>armor class</th>
    <th>hp</th>
    <th>speed</th>
    <th>actions</th>
  </tr>
    "; //table headers made
for($index3 = 0; $index3 < 1;$index3++) //loops the loop that loops other stuff :)
{
    for($index = 0; $index < count($creatureList);$index++) //$index < count($creatureList) loops if the index is lower than the number of elements in the array
    {
        echo"
            <tr>  
        ";

        for($index2 = 0; $index2 < count($creatureList[0]) ; $index2++) //count($creatureList[0]) --- counts the length of the 1st array element, loops that many times
        {
            echo"
                <td> 
                {$creatureList[$index][$index2]}
                </td>
            ";
        }

        echo"
        </tr>
        ";
    }
}
echo"
  </table>
  ";
?>