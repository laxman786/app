
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />  
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <center>
    <h1 class="container-fluid uppercase" style="background-color:'blue'">blue star</h1>
    <h2>hello contect us </h2>
 <form class="w3-container" action="home.php" method="POST" enctype='multipart/form-data' >
        <div class='form-group'>
<table>
    <tr>
<td><label for='usr' class="container">NAME</label>
</td><td><input type='text' name='user' class=" blockquote small " placeholder="enter your name" required />
</td>
</tr>
<tr>
<td> <label class="container">email-Id</label>
</td><td>    <input type='text' name='email' class="w3-input w3-border blockquote  " placeholder="enter your email" required/>
</td>
</tr>
<tr>
</td><td><label class="container">phone No.</label>
    </td><td> <input type='number' name='phone'  class="w3-input w3-border blockquote" placeholder="enter your phone number" required/>
    </td>
</tr>
<tr>
<td> <label class="container">password</label>
</td><td>    <input type='password' name='pass'  class="w3-input w3-border blockquote" placeholder="enter your password" required/>
</td>
</tr>
<tr>
   <td style="colspan=2 font-size=20px "> <label class="container">service all that apply</label></td>
</tr>

<div class='form-check'>
    <tr>
        <td><label class="form-check-lable">BEST TIME TO CALL YOU   </label></td>
        <td> <input type='radio' name='time'  value='morning'checked > MORNING
        <input type='radio' name='time'  value='afternoon'> AFTER-NOON
        <input type='radio' name='time'  value='evening'> EVENINGS</td>
 </tr>
</div>
<div>
    
    <tr>
       <th style="colspan:2"> <label for="service "> SERVICE ALL NEEDED</label></th>
    </tr>
    <tr>
        <td>
            <input type='checkbox' name='service[]'  value='php'> PHP
        </td>
        <td>
            <input type='checkbox' name='service[]'  value='java'> java
        </td>   
    </tr>
    <tr>
        <td> 
            <input type='checkbox' name='service[]'  value='python'> Pyton
        </td>
        <td>
            <input type='checkbox' name='service[]'  value='perl'> Perl
        </td>
    </tr>
    <tr>
        <td>
             <input type='checkbox' name='service[]'  value='c'> c
        </td>
        <td>
             <input type='checkbox' name='service[]'  value='c++'> c++
        </td>
    </tr>
    <tr>
        <td>
           <label for='image'>IMAGE</label>
        </td>
        <td>
            <input type="file" name='image' required>
        
        </td>   
    </tr>
    <tr>
        <td> DATE OF BIRTH</td>
        <td>
        <select name='date'>
        <?php
            $data=range(1,30);
            foreach($data as $i)
            {
            ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
         </select>
         
         
         <select name='month'>
        <?php
            $data=range(1,12);
            foreach($data as $i)
            {
            ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
         </select>
        
        <select name='year'>
        <?php
            $data=range(1880,2020);
            foreach($data as $i)
            {
            ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
         </select>
        </td>
     </tr>   
</table>
</div>
    <input type='submit' name='use' class="w3-input w3-border blockquote bg-primary " value="login"/>
</div>    
</form>
</center>
</body>
</html>