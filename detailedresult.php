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
<div class="ptable">
  <h1 class="headin">Detailed Results</h1>
  <div class="card">
    <div class="card-body text-center">
        <label class="radio"> 
          <input type="radio" name="gender" value="BACK" checked> 
          <span>BACK</span> 
        </label> 
        <label class="radio"> 
          <input type="radio" name="gender" value="LAY"> 
          <span>LAY</span> 
        </label>
    <div class="container d-flex justify-content-center align-items-center"> 
            <div class="form-inline"> 
                <label class="col-form-label">Games</label>
                <input class="form-control" type="number" placeholder="enter number of games" />
            </div>
            <div class="form-inline"> 
                <label class="col-form-label">PTS</label>
                <input class="form-control" type="number" placeholder="enter number of PTS" />
            </div>
        </div>
    </div>
    </div>
            <table>
                <tr class="col">
                    <th>ODDS</th>
                    <th>Games</th>
                    <th>Won</th>
                    <th>SR</th>
                    <th>PTS</th>
                    <th>ROI</th>
                    <th>WLR</th>
                    <th>WLW</th>
                </tr>
                <tr class="wpos">
                    <td>1.00 – 1.20</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr class="wpos">
                    <td>1.21 – 1.40</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td>4</td>
                    <td>6</td>
                </tr>
                <tr class="wpos">
                    <td>1.41 – 1.60</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>4</td>
                    <td>4</td>
                </tr>
                <tr class="wpos">
                    <td>1.61 – 1.80</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>4</td>
                </tr>
                <tr class="pos">
                    <td>1.81-2.00</td>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                    <td>3</td>
                </tr>
                <tr class="pos">
                    <td>2.01-2.20</td>
                    <td>2</td>
                    <td>3</td>
                    <td>1</td>
                    <td>0</td>
                    <td>2</td>
                    <td>-1</td>
                    <td>3</td>
                </tr>
            </table>
        </div>
    </body>
</html>