function dropdown() {
  $(".dropdown-toggle").dropdown();
}

function generate() {
  var randomString = function (length) {
    var text = "ID-";

    var possible = "0123456789";

    for (var i = 0; i < length; i++) {
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    }

    return text;
  };

  // random string length
  var random = randomString(10);

  // insert random string to the field
  var elem = (document.getElementById("idNumber").value = random);
}

yearSelect.onchange = function compute() {
  var selectInterest = document.getElementById("yearSelect");

  if (selectInterest.value == "twoYears") {
    document.getElementById("termPayment").value = "15%";

    loanAmount.oninput = function () {
      var loanAmountTwoYears = document.getElementById("loanAmount").value;

      loanAmountTwoYears1 = loanAmountTwoYears * 0.15 * 2;
      loanAmountTwoYears2 = +loanAmountTwoYears + loanAmountTwoYears1;

      loanAmountTotalTwoYears = loanAmountTwoYears2 / 24;

      console.log(loanAmountTotalTwoYears);

      document.getElementById("monthlyPayment").value = loanAmountTotalTwoYears;
      document.getElementById("totalPayment").value = loanAmountTwoYears2;
      console.log("true");
    };
  }

  if (selectInterest.value == "oneYear") {
    document.getElementById("termPayment").value = "5%";
    loanAmount.oninput = function () {
      var loanAmount = document.getElementById("loanAmount").value;
      loanAmount1 = loanAmount * 0.05;

      loanAmount2 = +loanAmount + loanAmount1;
      loanAmountTotal = loanAmount2 / 12;
      console.log(loanAmountTotal);
      document.getElementById("monthlyPayment").value = loanAmountTotal;
      document.getElementById("totalPayment").value = loanAmount2;
    };
  }
  if (selectInterest.value == "fiveYears") {
    document.getElementById("termPayment").value = "30%";

    loanAmount.oninput = function () {
      var loanAmountFiveYears = document.getElementById("loanAmount").value;

      loanAmountFiveYears1 = loanAmountFiveYears * 0.3 * 5;
      loanAmountFiveYears2 = +loanAmountFiveYears + loanAmountFiveYears1;
      loanAmountTotalFiveYears = loanAmountFiveYears2 / 60;

      console.log(loanAmountTotalFiveYears);
      document.getElementById("totalPayment").value = loanAmountFiveYears2;
      document.getElementById(
        "monthlyPayment"
      ).value = loanAmountTotalFiveYears;
      console.log("true");
    };
  } else {
    console.log("ERROR");
  }
};

dropdown();
generate();
compute();
