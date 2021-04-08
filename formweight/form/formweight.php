<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formweight.css">
    <title>Form Weight</title>
</head>

<body>
    <div class="firstdiv">
    <form class="formweight">
        <span class="title-form">Please, Fill This Form so We Can Track your Body Mass Index  </span>
        <div class="form-field">
            <div class="label" for="">Your Current Weight</div>
            <div class="input-small">
                <input type="text" data-error="#smallWeight" />
                <small id="smallWeight"></small>
            </div>
        </div>
        <div class="form-field">
            <div class="label" for="">Your Current Height</div>
            <div class="input-small">
                <input type="text" data-error="#smallHeight" />
                <small id="smallHeight"></small>
            </div>
        </div>
        <button class="submit" type="submit">Submit</button>
    </form>
    </div>
    <div class="gambarPeople">
        <img src="./img/differentPeople.png" alt="">
    </div>
</body>

</html>