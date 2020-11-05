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
    ";

    for($index = 0; $index < count($creatureList);$index++)
    {
        echo"
            <tr>  
        ";

        for($index2 = 0; $index2 < count($creatureList[0]) ; $index2++)
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

echo"
  </table>
  ";
?>