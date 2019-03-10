<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Layout Form without Tables</title>
    <style type="text/css">
    .formLayout
    {
        background-color: #f3f3f3;
        border: solid 1px #a1a1a1;
        padding: 10px;
        width: 300px;
    }
    
    .formLayout label, .formLayout input
    {
        display: block;
        width: 120px;
        float: left;
        margin-bottom: 10px;
    }
 
    .formLayout label
    {
        text-align: right;
        padding-right: 20px;
    }
 
    br
    {
        clear: left;
    }
    </style>
</head>
<body>
    <div class="formLayout">
        <label>Title</label>
        <select>
            <option>Mr.</option>
            <option>Dr.</option>
            <option>Ms.</option>
            <option>Mrs.</option>
        </select><br>
        <label>First Name</label>
        <input id="name" name="name"><br>
        <label>Last Name</label>
        <input id="Text1" name="name"><br>
        <label>Address</label>
        <input id="address1"><br>
        <label></label>
        <input id="address2"><br>
        <label>City</label>
        <select id="city">
            <option>New York</option>
            <option>Chicago</option>
            <option>etc.</option>
        </select><br>
        <label>Zip</label>
        <input id="zip"><br>
    </div>
</body>
</html>