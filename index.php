<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
        <title>Assignment 3: Exercise2</title>
          <style>
        table,th,td{border-collapse: collapse;
                border: 1px solid black;
                width: 500px;
                height: 30px;
        }
    </style>
    </head>
    <body>
        <h3>1- What is a query string and what purpose does it serve in server-side programming?</h3>
        <p>
            <pre>
        A query string is the part of a URL that is after the question mark. For example, in 
         "http://www.site.com/index.php?age=22&name=Obi+Wan+Kenobi&number=5435432156" ,
         the query string is "age=22&name=Obi+Wan+Kenobi&number=5435432156". Its purpose is 
        to contain and display the Field/value pairs  to be retrieved when the GET request method
        is used. It is a means of communication between client and server.
           </pre>
        </p> 
    <h3>2- Is a query string characteristic of a GET or POST request method?</h3>
    <p>
        <pre>
        It is charateristic of GET request method.
        </pre>
    </p>
    <h3>3- Which part of the URL is considered the query string?</h3>
    <p>
        <pre>
        It is the part of the URL that is after the question mark(?). For the given URL in this question,
        the query string is "age=22&name=Obi+Wan+Kenobi&number=5435432156".
        </pre>
    </p>
<h3>4- How many different data parameters are being passed?</h3>
<p>
    <pre>
        For the given URL, there are 3: age=22, name=Obi Wan Kenobi, and number=5435432156.
    </pre>
</p>

<h2>Display Table</h2>
<p>
<form action="index.php" method="get">
    <label>age:</label>
    <input type="text" name="age"><br>
    <label>name:</label>
    <input type="text" name="name"><br>
    <label>number:</label>
    <input type="text" name="number"><br>
    <input type="submit" name="send">
</form>
</p>
<?php
 
echo "<table> ";
  if (!empty($_GET["name"]))
         echo " <tr>
                <th>Name</th>
                <td>". $_GET["name"]."</td>
             </tr>";
else 
       echo " <tr>
                <th>Name</th>
                <td>No query string data found</td>
             </tr>";
 if (!empty($_GET["age"]))
          echo"<tr>
                <th>Age</th>
                <td>".$_GET["age"]."</td>
                </tr>
                <tr>";
else 
    echo "<tr>
                <th>Age</th>
                <td>No query string data found</td>
                </tr>";
if (!empty($_GET["number"]))
        echo" <tr>
                  <th>Phone Number</th>
                <td>". $_GET["number"]."</td>
             </tr>" ;
else
    echo "<tr>
                <th>Phone</th>
                <td>No query string data found</td>
                </tr>";
 echo"</table>";

?>

    </body>
</html>