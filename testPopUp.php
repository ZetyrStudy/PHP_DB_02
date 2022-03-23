<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PopUp-Text</title>
    <style>
        .hidden {
            display: none;
            border: 1px solid black;
            width: 15rem;
            height: 7rem;
            padding: 1rem;
            text-align: center;
            border-radius: 25px;
            padding-top: 2rem;
            font-size: 1.2rem;
            color: white;
            background-color: black;
            animation: movement 2s infinite;
            animation-direction: alternate-reverse;
            position: relative;
        }

        .hidden span {
            font-weight: 700;
        }

        .signout {
            margin-top: 1rem;
            border: none;
            background-color: orange;
            font-weight: 600;
            color: black;
            width: 6rem;
            height: 2.5rem;
            border-radius: 5px;
            transition: .2s;
        }

        .signout:hover {
            background-color: orangered;
            width: 6.2rem;
            height: 2.7rem;
        }

        @keyframes movement {
            0% {
                background: red;
                left: 0px;
                top: 0px;
            }

            25% {
                background: yellow;
                left: 400px;
                top: 0px;
            }

            50% {
                background: blue;
                left: 400px;
                top: 200px;
            }

            75% {
                background: green;
                left: 0px;
                top: 200px;
            }

            100% {
                background: red;
                left: 0px;
                top: 0px;
            }
        }
    </style>
</head>

<body>
    <span class="profile"><img src="https://picsum.photos/200/300" onclick="showpopup()"></span>
    <div id="popupwindow" class="hidden">
        <div>
            <div><span>Alert:</span> Do you want to close this ad?</div>
        </div>
        <div>
            <input type="submit" value="Yes" class="signout" />
        </div>
    </div>


    <script>
        imageDisplay = false;

        function showpopup() {
            if (imageDisplay === true) {
                document.getElementById("popupwindow").style.display = "none";
                imageDisplay = false;
            } else {
                document.getElementById("popupwindow").style.display = "block";
                imageDisplay = true;
            }
        }
    </script>
</body>

</html>