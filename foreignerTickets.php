<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreigner_Tickets</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="page">

           <?php include('header.php') ?>
           <div class="n-content">
            <h2>New Ticket</h2>
            <div class="n-container">
                <div class="n-row-1">
                    <div class="n-r1-col-1">
                <div class="n-space">
                   <div class="n-div1"><label >Customer_Name</label></div>
                <input type="text" name="customerName" placeholder="Enter Customer name" class="n-t-space">
                </div>
                <div class="n-space">
                   <div class="n-div1"> <label>&numero; Adult(s)</label></div>
                    <input type="text" name="numberOfAdults" placeholder="Enter the total number of adult(s)" class="n-t-space">
                </div>
                </div>
                <div class="n-r1-col-2">
                    <div class="n-space">
                       <div class="n-div1"> <label>Ticket For</label></div>
                        <select name="ticketFor"  class="n-t">
                            <option value="A_70_sitter_bus">A 70sitter bus</option>
                            <option value="A_30_sitter_bus">A 30sitter bus</option>
                            <option value="A_train">A train</option>
                        </select>
                    </div>
                    <div class="n-space">
                       <div class="n-div1"> <label>&numero; Child/Children</label></div>
                        <input type="text" name="numbeOfChildren" placeholder="Enter the total number of child(ren)" class="n-t-space">
                    </div>
                </div>
                </div>
                <div class="n-row-2">
                    <div class="n-r1-col-1">
                    <div class="n-space">
                        <table class="n-styled-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Sits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Adult</td>
                                <td>1000.00</td>
                                <td>2</td>
                            </tr>
                            <tr class="n-active-row">
                                <td>Child</td>
                                <td>250.00</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="n-space">
                    <div class="n-div1"> <label>Date</label></div>
                        <input type="date" name="Date" class="n-date">
                    </div>
                    </div>
                    <div class="n-r1-col-3">
                        <div class="n-space">
                          <div class="n-div1"> <label>Total cost</label></div>
                            <input type="text" name="totalCost" placeholder="Enter the total cost" class="n-t-space">
                        </div>
                        <div class="n-space">
                           <div class="n-div1"> <label>Change</label></div>
                            <input type="text" name="change" placeholder="Enter the change" class="n-t-space">
                        </div>
                        
                    </div>
                </div>
                <div class="n-buttons">
                <button>save</button><button>Delete</button>
            </div>
            <h1>Foreigner</h1>
            </div>
           <?php include('footer.php') ?>
        </div>
        </div>
</body>
</html>