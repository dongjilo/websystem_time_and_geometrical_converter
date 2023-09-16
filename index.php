<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Converter</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5 bg-secondary p-5 text-light">
    <h1 class="mb-3">Time Converter</h1>
    <button class="btn btn-primary" onclick="convert(1)">Hours to Minutes</button>
    <button class="btn btn-success" onclick="convert(2)">Minutes to Seconds</button>
    <button class="btn btn-warning" onclick="convert(3)">Seconds to Milliseconds</button>
    <button class="btn btn-info" onclick="convert(4)">Years to Months</button>
</div>

<div class="modal fade" tabindex="-1" id="aModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Enter Number</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="number" id="myNum" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="conBtn" onclick="comp()">Convert</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="reset()">Close</button>
            </div>
        </div>
    </div>
</div>

</div>

<script>
    function convert(val){
        var input = document.getElementById('myNum');
        var modTitle = document.getElementById('modalTitle');
        if (val == 1) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Hours to Minutes";
            input.setAttribute("placeholder", "Enter number of hours");
            myModal.show();
        } else if (val == 2) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Minutes to Seconds";
            input.setAttribute("placeholder", "Enter number of minutes");
            myModal.show();
        } else if (val == 3) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Seconds to Milliseconds";
            input.setAttribute("placeholder", "Enter number of seconds");
            myModal.show();
        } else if (val == 4) {
            var myModal = new bootstrap.Modal(document.getElementById('aModal'));
            modTitle.innerHTML = "Years to Months";
            input.setAttribute("placeholder", "Enter number of years");
            myModal.show();
        }
    }

    function comp(){
        var title = document.getElementById('modalTitle').innerHTML;
        var num1 = document.getElementById('myNum').value;

        if (num1 === ''){
            alert("Please enter a number.");
        } else if (title == "Hours to Minutes") {
            var total = num1 * 60;
            setText(total);
        } else if (title == "Minutes to Seconds") {
            var total = num1 * 60;
            setText(total);
        } else if (title == "Seconds to Milliseconds") {
            var total = num1 * 1000;
            setText(total);
        } else if (title == "Years to Months") {
            var total = num1 * 12;
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
    }
</script>
</body>
</html>
