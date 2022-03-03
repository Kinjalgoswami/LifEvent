c<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<style >

body {
align-items: center;
  background-image: url(image/bi7.jpg);
display: flex;
justify-content: center;
height: 100vh;
   
}
    input{
        background-color: #30324594;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #EEE;
        font-size: 18px;
        height:10%;
        outline: 0;

        padding: 4px 20px 0;
        width: 100%;
        font-family: 'Georgia ',serif;
        font-size: 20px;
       }
    form{
        width: 320px;
       background-color: #20bf55;
background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%);
color: white;


        border-radius: 20px;
        box-sizing: border-box;
        height: 500px;
        padding: 50px;
        font-family: 'Georgia ',serif;
        font-size: 20px;}


        button{
             background-color: #08d;
        border-radius: 20px;
        border: 0;
        box-sizing: border-box;
        color: #EEE;
        font-size: 18px;
        height:10%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
        font-family: 'Georgia ',serif;
        font-size: 20px;
        }



</style>
<body>

    
       <b > Price:</b> <input type="text" name="price"><br><br>
        <b>Name: </b><input type="text" name="customername"><br><br>
        <b>Email: </b><input type="email" name="email"><br><br>
        <b>Contact No:</b> <input type="text" name="contactno"><br><br>
        <br>
        <button type="submit" name="submit" value="Proceed To Pay"> <b><a href="pay1.php">Proceed To Pay</a></b></button>
</form>
</body>
</html>