<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
	<?php include("../Menu/External Link.php"); ?>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

        .order {
            font-family: 'Playfair Display', sans-serif;
            color: #262626;
            margin: 5% 0%;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .d_flex {
            display: flex;
            flex-direction: row;
            background: #f6f6f6;
            border-radius: 0 0 5px 5px;
            padding: 25px;
        } 

        .frm {
            flex: 4;
        }

        .Yorder {
            flex: 2;
        }

        .title {
            background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
            background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
            background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
            background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
            background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
            border-radius: 5px 5px 0 0;
            padding: 20px;
            color: #f6f6f6;
        }

        .h2 {
            margin: 0;
            padding-left: 15px;
        }

        .required {
            color: red;
        }

        .label,
        .table {
            display: block;
            margin: 25px;
        }

        .label>span {
            float: left;
            width: 25%;
            margin-top: 12px;
            padding-right: 10px;
        }

        .input[type="text"],
        .input[type="date"],
        .input[type="number"],
        .select {
            width: 70%;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #dadada;
            color: #888;
        }

        .select {
            width: 72%;
            height: 45px;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        .Yorder {
            margin-top: 15px;
            height: 600px;
            padding: 20px;
            border: 1px solid #dadada;
        }

        .table {
            margin: 0;
            padding: 0;
        }

        th {
            border-bottom: 1px solid #dadada;
            padding: 10px 0;
        }

        tr>td:nth-child(1) {
            text-align: left;
            color: #2d2d2a;
        }

        tr>td:nth-child(2) {
            text-align: right;
            color: #52ad9c;
        }

        td {
            border-bottom: 1px solid #dadada;
            padding: 25px 25px 25px 0;
        }

        .txt {
            display: block;
            color: #888;
            margin: 0;
            padding-left: 25px;
        }

        .Yorder>div {
            padding: 15px 0;
        }

        .but {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: 2px solid pink;
            border-radius: 30px;
            color: #000;
            font-size: 15px;
            font-weight: bold;
        }

        .but:hover {
            cursor: pointer;
            background: pink;
        }
    </style>
</head>
<body class="order">
    <div class="container-fluid">
        <div class="title">
            <h2 class="h2">Product Order Form</h2>
        </div>
        <div class="d_flex">
            <form action="Place_Order.php" method="post" class="frm">
                <label class="label">
                    <span>Name<span class="required">*</span></span>
                    <input class="input" type="text" name="Name"/>
                </label>
                <label class="label">
                    <span>Address <span class="required">*</span></span>
                    <input class="input" type="text" name="Address" placeholder="House number and street name" />
                </label>
                <label class="label">
                    <span>Phone No. <span class="required">*</span></span>
                    <input class="input" type="number" name="Phone_No"/>
                </label>
                <label class="label">
                    <span>Delivery Date<span class="required">*</span></span>
                    <input class="input" type="date" name="D_Date"/>
                </label>
                <label class="label">
                    <span>Delivery Mode<span class="required">*</span></span>
                    <input class="input" type="radio" name="D_Mode" value="Home Delivery" checked /> Home Delivery
                    &emsp;&emsp;
                    <input class="input" type="radio" name="D_Mode" value="Self Pick-Up" /> Self Pick-Up
                </label>               
                <button class="but" type="submit" name="Place_Order">Place Order</button>
            </form>
            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"</script>
</html>