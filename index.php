<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Row-Increment-System</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="assets/js/jquery-3.6.3.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.count').keyup(function() {
            var sum = 0;
            $(".count").each(function() {
                if ($(this).val() !== '') {
                    sum += parseInt($(this).val());
                }

            });
            $('input[name="total_data"]').val(sum);
        });
    });

    function addRow() {
        alert("Hello")
    }
    $(document).ready(function() {

    })
    </script>

</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="card">
                <div class="header text-center">Row Increment System</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>size_xx</th>
                        <th>size_x</th>
                        <th>size_s</th>
                        <th>size_m</th>
                        <th>size_l</th>
                        <th>size_xl</th>
                        <th>size_xxl</th>
                        <th>size_xxxl</th>
                        <th>size_xxxxl</th>
                        <th>size_xxxxxl</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="size_xx[]" class="count"></td>
                        <td><input type="text" name="size_x[]" class="count"></td>
                        <td><input type="text" name="size_s[]" class="count"></td>
                        <td><input type="text" name="size_m[]" class="count"></td>
                        <td><input type="text" name="size_l[]" class="count"></td>
                        <td><input type="text" name="size_xl[]" class="count"></td>
                        <td><input type="text" name="size_xxl[]" class="count"></td>
                        <td><input type="text" name="size_xxxl[]" class="count"></td>
                        <td><input type="text" name="size_xxxxl[]" class="count"></td>
                        <td><input type="text" name="size_xxxxxl[]" class="count"></td>
                        <td><input type="text" name="total_data" id="total" disabled></td>
                        <td><button onclick="addRow()">Add</button></td>
                    </tr>
                    <tbody id="new_row"></tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include_once("inc/footer.php"); ?>