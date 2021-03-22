<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main.css" />
    <body>
      <div class="container">
        <form method="POST" action="process.php">
          <div class="form-row" style="padding-top: 60px">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
              <input
                type="text" name="fname"
                class="form-control"
                id="fname"
                required
                placeholder="Full Name"
              />
            </div>

            <div class="form-group col-md-2">
              <label for="inputPassword4">ID number</label>
              <input
                type="idNumber" name="idNumber"
                class="form-control"
                id="idNumber"
                readonly="true"
                placeholder="ID-Number"
              />
            </div>
          </div>
          
          <label for="interest1">Year:</label>
          <select name="yearSelect[]" id="yearSelect"> 
          <option value="IISelect" disabled selected>SELECT</option>
            <option value="oneYear">1 year</option>
            <option value="twoYears">2 years </option>
            <option value="fiveYears">5 years</option>
          </select>


          <div class="form-group">
            <label for="Amount">Interest Rate</label>
            <input
              type="text" name="interestRate"
              class="form-control"
              id="termPayment"
              readonly="true"
              style="width: 300px"
              placeholder="Term of payment"
            />
          </div>

          
         
            <div class="form-group">
            <label for="Amount">Amount</label>
            <input
              type="text"
              class="form-control"
              id="loanAmount" name="amount"
              required
              style="width: 300px"
              placeholder="Loan Amount"
            />
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="monthlyPayment">Monthly Payment</label>
              <input
                type="text" name="monthlyPayment"
                class="form-control"
                id="monthlyPayment" style="width:250px"
                readonly="true"
                placeholder="Monthly Payment"
              />
            </div>
            
            <div class="form-group" style="padding-left:30px;padding-right:30px">
            <label for="Amount">Total Payment</label>
            <input
              type="text"
              class="form-control" name="totalPayment"
              id="totalPayment"
              readonly="true"
              style="width: 300px"
              placeholder="Total payment"
            />
          </div>

          
          
           
      <button type="submit" class="btn btn-primary" style="width:155px">Print</button>
         
      </div>
      
        </form>
      <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"
      ></script>
      <script src="app.js"></script>
    </body>
  </head>
</html>
