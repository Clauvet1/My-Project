<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage_Tickets</title>
    <link rel="stylesheet" href="CSS/n_ticket_style.css">
    
</head>
<body>
    <div class="page">
     <?php include('header.php') ?>  
    <div class="n-content">
            <h2>Manage Ticket</h2>
            <div class="n-container">
                
                <form action="connect.php" method="POST">
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
                        <select name="ticketFor"  class="t">
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
                                <td><input type="text" placeholder="Enter price" class="t-input"></td>
                                <td><input type="text" placeholder="Enter num of sits" class="t-input"></td>
                            </tr>
                            <tr class="active-row">
                                <td>Child</td>
                                <td><input type="text" placeholder="Enter price" class="t-input"></td>
                                <td><input type="text" placeholder="Enter num of sits" class="t-input"></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="n-date">
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
            <div class="ticketType">
            <label>Ticket_Type</label>
            <select name="ticketType" class="ticketType1">
                <option value="citizen">Citizen</option>
                <option value="foreigner">Foreigner</option>
            </select>
            </div>
                </form>
            </div>
            <?php include('footer.php') ?>
        </div>
        </div>
        <script>
            const hambuger = document.querySelector('.hambuger');
            const navMenu = document.querySelector('.menu-list');
          
            hambuger.addEventListener("click", mobileMenu);
          
            function mobileMenu() {
              hambuger.classList.toggle("active");
              navMenu.classList.toggle("active");
            }
          
            const navLink = document.querySelectorAll('.nav-link');
            navLink.forEach((n) => n.addEventListener("click", closeMenu));
          
            function closeMenu(){
              hambuger.classList.remove("active");
              navMenu.classList.remove("active");
            }
          </script>
</body>
</html>