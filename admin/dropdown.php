<html>
<head>
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
 
  <div class="dropdown">
    <button class="dropbtn">Users
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a href="viewusers.php">View Users</a>
     
    </div>
  </div> 
  

    <div class="dropdown">
    <button class="dropbtn">Registered Urls
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="viewurls.php">View Urls</a>
     
     
    </div>
  </div> 
    <a href="viewlog.php">View Logs</a>
</div>
</body>
</html>