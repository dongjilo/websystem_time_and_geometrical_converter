<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geometrical Converter</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5 bg-secondary p-5 text-light">
    <h1 class="mb-3">Geometrical Converter</h1>
    <button class="btn btn-primary" onclick="convert(1)">Area of Square</button>
    <button class="btn btn-success" onclick="convert(2)">Area of Rectangle</button>
    <button class="btn btn-warning" onclick="convert(3)">Area of Triangle</button>
    <button class="btn btn-info" onclick="convert(4)">Area of Circle</button>
</div>

<div class="modal fade" tabindex="-1" id="aModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Enter Number</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="number" id="myNum" class="form-control my-2">
                <input type="number" id="myNum2" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="conBtn" onclick="comp1()">Calculate</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="reset()">Close</button>
            </div>
        </div>
    </div>
</div>

</div>

<script>
    function convert(val){
        var input = document.getElementById('myNum');
        var input2 = document.getElementById('myNum2');
        var modTitle = document.getElementById('modalTitle');
        if (val == 1) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Area of Square";
            input.setAttribute("placeholder", "Enter sides:");
            input2.setAttribute('hidden', true);
            myModal.show();
        } else if (val == 2) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Area of Rectangle";
            input.setAttribute("placeholder", "Enter length: ");
            input2.setAttribute("placeholder", "Enter width: ");
            input2.removeAttribute('hidden');
            myModal.show();
        } else if (val == 3) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Area of Triangle";
            input.setAttribute("placeholder", "Enter base: ");
            input2.setAttribute("placeholder", "Enter height: ");
            input2.removeAttribute('hidden');
            myModal.show();
        } else if (val == 4) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Area of Circle";
            input.setAttribute("placeholder", "Enter radius:");
            input2.setAttribute('hidden', true);
            myModal.show();
        }
    }

    function comp1(){
        var title = document.getElementById('modalTitle').innerHTML;
        var num1 = document.getElementById('myNum').value;
        var num2 = document.getElementById('myNum2').value;
        var input2 = document.getElementById('myNum2');

        if (num1 === '' && num2 === '') {
            alert("Please enter a number.");
        } else if (title == "Area of Square") {
            var total = Math.pow(num1, 2);
            setText(total);
        } else if (title == "Area of Rectangle") {
            if (num1 === '') {
                alert("Please enter length.")
            } else if (num2 === '') {
                alert("Please enter width.")
            } else {
                var total = num1 * num2;
                input2.setAttribute('hidden', true);
                setText(total);
            }
        } else if (title == "Area of Triangle") {
            if (num1 === '') {
                alert("Please enter base.")
            } else if (num2 === '') {
                alert("Please enter height.")
            } else {
                var total = (num1 * num2) / 2;
                input2.setAttribute('hidden', true);
                setText(total);
            }
        } else if (title == "Area of Circle") {
            var total = Math.PI * Math.pow(num1, 2);
            setText(total);
        }
    }

    function setText(total){
        document.getElementById('myNum').value = total;
        document.getElementById('myNum').setAttribute('disabled', true);
        document.getElementById('conBtn').style.display = 'none';
    }

    function reset(){
        document.getElementById('myNum').removeAttribute('disabled');
        document.getElementById('conBtn').style.display = 'block';
        document.getElementById('myNum').value = "";
        document.getElementById('myNum2').value = "";
    }
</script>
</body>
</html>
