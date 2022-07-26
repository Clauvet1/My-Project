<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>normalTickets</title>
    <link rel="stylesheet" href="CSS/n_ticket_style.css">
</head>
    <body>
        <div class="page">
        <?php include('header.php') ?>
        <div class="n-content">
            <h2>New Ticket</h2>
            <div class="n-container">
                <div class="row-1">
                    <div class="r1-col-1">
                <div class="space">
                   <div class="div1"><label >Customer_Name</label></div>
                <input type="text" name="customerName" placeholder="Enter Customer name" class="t-space">
                </div>
                <div class="space">
                   <div class="div1"> <label>&numero; Adult(s)</label></div>
                    <input type="text" name="numberOfAdults" placeholder="Enter the total number of adult(s)" class="t-space">
                </div>
                </div>
                <div class="r1-col-2">
                    <div class="space">
                       <div class="div1"> <label>Ticket For</label></div>
                        <select name="ticketFor" id="ticketFor" class="t">
                            <option value="A_70_sitter_bus">A 70sitter bus</option>
                            <option value="A_30_sitter_bus">A 30sitter bus</option>
                            <option value="A_train">A train</option>
                        </select>
                    </div>
                    <div class="space">
                       <div class="div1"> <label>&numero; Child/Children</label></div>
                        <input type="text" name="numbeOfChildren" placeholder="Enter the total number of child(ren)" class="t-space">
                    </div>
                </div>
                </div>
                <div class="row-2">
                    <div class="r1-col-1">
                    <div class="space">
                        <table class="styled-table">
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
                            <tr class="active-row">
                                <td>Child</td>
                                <td>250.00</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="space">
                    <div class="div1"> <label>Date</label></div>
                        <input type="date" name="Date" class="date">
                    </div>
                    </div>
                    <div class="r1-col-3">
                        <div class="space">
                          <div class="div1"> <label>Total cost</label></div>
                            <input type="text" name="totalCost" placeholder="Enter the total cost" class="t-space">
                        </div>
                        <div class="space">
                           <div class="div1"> <label>Change</label></div>
                            <input type="text" name="change" placeholder="Enter the change" class="t-space">
                        </div>
                    </div>
                </div>
                <div class="buttons">
                <button>save</button><button>Delete</button>
            </div>
            <h1>Citizen</h1>
            </div>
        </div>
        </div>
</body>
</html>