<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <title>Document</title>
    <style>
    body {
        background-color: #000000
    }

    .padding {
        padding: 10rem !important;
        margin-left: 200px
    }

    /*Rating start*/

    .br-theme-bars-pill .br-widget {
        white-space: nowrap;
    }

    .br-theme-bars-pill .br-widget a {
        padding: 7px 15px;
        background-color: #bef5e8;
        color: #50E3C2;
        text-decoration: none;
        font-size: 13px;
        line-height: 3;
        text-align: center;
        font-weight: 400;
    }

    .br-theme-bars-pill .br-widget a:first-child {
        -webkit-border-top-left-radius: 999px;
        -webkit-border-bottom-left-radius: 999px;
        -moz-border-radius-topleft: 999px;
        -moz-border-radius-bottomleft: 999px;
        border-top-left-radius: 999px;
        border-bottom-left-radius: 999px;
    }

    .br-theme-bars-pill .br-widget a:last-child {
        -webkit-border-top-right-radius: 999px;
        -webkit-border-bottom-right-radius: 999px;
        -moz-border-radius-topright: 999px;
        -moz-border-radius-bottomright: 999px;
        border-top-right-radius: 999px;
        border-bottom-right-radius: 999px;
    }

    .br-theme-bars-pill .br-widget a.br-active,
    .br-theme-bars-pill .br-widget a.br-selected {
        background-color: #50E3C2;
        color: white;
    }

    .br-theme-bars-pill .br-readonly a {
        cursor: default;
    }

    .br-theme-bars-pill .br-readonly a.br-active,
    .br-theme-bars-pill .br-readonly a.br-selected {
        background-color: #7cead1;
    }

    @media print {
        .br-theme-bars-pill .br-widget a {
            border: 1px solid #b3b3b3;
            border-left: none;
            background: white;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .br-theme-bars-pill .br-widget a.br-active,
        .br-theme-bars-pill .br-widget a.br-selected {
            border: 1px solid black;
            border-left: none;
            background: white;
            color: black;
        }

        .br-theme-bars-pill .br-widget a:first-child {
            border-left: 1px solid black;
        }
    }



    /*Rating End*/





    .box-example-1to10 .br-wrapper {
        width: 210px;
        position: absolute;
        margin: 0px 0 0 -105px;
        left: 50%
    }

    .box-example-movie .br-wrapper {
        width: 250px;
        position: absolute;
        margin: 0px 0 0 -125px;
        left: 50%
    }

    .box-example-square .br-wrapper {
        width: 190px;
        position: absolute;
        margin: 0px 0 0 -95px;
        left: 50%
    }

    .box-example-pill .br-wrapper {
        width: 232px;
        position: absolute;
        margin: 0px 0 0 -116px;
        left: 50%
    }

    .box-example-reversed .br-wrapper {
        padding-top: 1.3em;
        width: 356px;
        position: absolute;
        margin: 0px 0 0 -178px;
        left: 50%
    }

    .box-example-horizontal .br-wrapper {
        width: 120px;
        position: absolute;
        margin: 0px 0 0 -60px;
        left: 50%
    }

    .star-ratings h1 {
        font-size: 1.5em;
        line-height: 2;
        margin-top: 3em;
        color: #757575
    }

    .star-ratings p {
        margin-bottom: 3em;
        line-height: 1.2
    }

    .star-ratings h1,
    .star-ratings p {
        text-align: center
    }

    .star-ratings .stars {
        width: 120px;
        text-align: center;
        margin: auto;
        padding: 0 95px
    }

    .star-ratings .stars .title {
        font-size: 14px;
        color: #cccccc;
        line-height: 3
    }

    .star-ratings .stars select {
        width: 120px;
        font-size: 16px
    }

    .star-ratings .stars-example-fontawesome,
    .star-ratings .stars-example-css,
    .star-ratings .stars-example-bootstrap {
        float: left
    }

    .star-ratings .stars-example-fontawesome-o {
        width: 200px
    }

    .star-ratings .stars-example-fontawesome-o select {
        width: 200px
    }

    .start-ratings-main {
        margin-bottom: 3em
    }

    .box {
        width: 100%;
        float: left;
        margin: 1em 0
    }

    .box .box-header {
        text-align: center;
        font-weight: 400;
        padding: .5em 0
    }

    .box .box-body {
        padding-top: 2em;
        height: 85px;
        position: relative
    }

    .box select {
        width: 120px;
        margin: 10px auto 0 auto;
        display: block;
        font-size: 16px
    }

    .box-large .box-body {
        padding-top: 2em;
        height: 120px
    }

    .box-orange .box-header {
        background-color: #edb867;
        color: white
    }

    .box-orange .box-body {
        background-color: white;
        border: 2px solid #f5d8ab;
        border-top: 0
    }

    .box-green .box-header {
        background-color: #50e3c2;
        color: white
    }

    .box-green .box-body {
        background-color: white;
        border: 2px solid #92eed9;
        border-top: 0
    }

    .box-blue .box-header {
        background-color: #4278f5;
        color: white
    }

    .box-blue .box-body {
        background-color: white;
        border: 2px solid #8bacf9;
        border-top: 0
    }

    @media print {
        .star-ratings h1 {
            color: black
        }

        .star-ratings .stars .title {
            color: black
        }

        .box-orange .box-header,
        .box-green .box-header,
        .box-blue .box-header {
            background-color: transparent;
            color: black
        }

        .box-orange .box-body,
        .box-green .box-body,
        .box-blue .box-body {
            background-color: transparent;
            border: none
        }
    }
    </style>
</head>

<body>
    <div class="padding">
        <div class="col-md-6">
            <div class="box box-green box-example-pill">
                <div class="box-header">How would you rate the induction session?</div>
                <div class="box-body">
                    <select id="example-pill" name="rating" autocomplete="off">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <script>
    $(function() {
        function ratingEnable() {
            $('#example-pill').barrating('show', {
                theme: 'bars-pill',
                initialRating: 'A',
                showValues: true,
                showSelectedRating: false,
                allowEmpty: true,
                emptyValue: '-- no rating selected --',
                onSelect: function(value, text) {
                    // alert('Selected rating: ' + value);
                }
            });

        }

        ratingEnable();

    });
    </script>
</body>

</html>