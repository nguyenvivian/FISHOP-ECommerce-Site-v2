function calcTax(ZipCode, price) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.response);
            document.getElementById("total").innerHTML = '$' + ((parseFloat(obj.CombinedRate) + 1) * price).toFixed(2);
            document.getElementById("taxrate").innerHTML = obj.CombinedRate;

            document.getElementById("state").value = obj.State;

        }
    };

    xhttp.open("GET", "get-tax.php?zip=" + ZipCode, true);
    xhttp.send();
}