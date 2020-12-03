<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOme-Victory</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css " rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css " rel="stylesheet">  
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="table.css" type="text/css">
</head>
<body>
<div id="header"></div>
<div id="greeting">
  <div id="title">HOME VICTORY</div>
</div>
<div id="content">
  <div id="game">
    <img src="https://www.animatedimages.org/data/media/165/animated-football-and-soccer-image-0093.gif"></img>
    <!--if images are downloaded <img src="images/gunslinger.gif"></img> -->
    <h2>Choose your filter option</h2>
  </div>
<div class="container d-flex justify-content-center align-items-center">
    <div class="dropdown"> <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"> <span>Countries</span> <i class="fa fa-caret-down"></i> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Australia</a></li>
            <li><a class="dropdown-item" href="#">India</a></li>
            <li><a class="dropdown-item" href="#">United States</a></li>
        </ul>
    </div>
    <div class="toption"> 
      <label>League:</label>
      <label><input type="radio" class="option-input radio" name="example" checked /> option 1 </label> 
      <label><input type="radio" class="option-input radio" name="example" /> option 2 </label> 
    </div>
</div>
<div class="container d-flex justify-content-center align-items-center">
  <div class="toption1">
      <label class="customcheckbox m-b-20"> All Teams
        <input type="checkbox" id="mainCheckbox"> 
        <span class="checkmark"></span> 
      </label>
      <label class="customcheckbox m-b-20"> Team 1
        <input type="checkbox" id="mainCheckbox"> 
        <span class="checkmark"></span> 
      </label> 
      <label class="customcheckbox m-b-20"> Team 2
        <input type="checkbox" id="mainCheckbox"> 
        <span class="checkmark"></span> 
      </label> 
      <label class="customcheckbox m-b-20"> Team 3
        <input type="checkbox" id="mainCheckbox"> 
        <span class="checkmark"></span> 
      </label>  
  </div>
</div>        
<div class="button">
  <button id="start" href="generalresult.php">DISPLAY</button>
</div>
  <div id="info">It's a race to the finish between the Back and the Lay.  
</body>
</html>