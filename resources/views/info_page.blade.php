<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Jura:wght@500;600;700&display=swap");

        * {
            box-sizing: border-box;
        }


        body {
            font-family: "Didact Gothic", sans-serif;
            font-weight: 400;
            margin: 0;
            background-color: #f6f8ff;
        }

        .home-input{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 108px;
        }
        .name {
            display: flex;
            margin-bottom: 74px;
        }
        .name-title {
            font-family: "Didact Gothic";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 26px;
            color: rgba(39, 45, 45, 0.7);
            text-decoration: underline;
            width: 154px;
        }
        .email {
            display: flex;
            margin-bottom: 74px;
        }
        .email-title {
            font-family: "Didact Gothic";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 26px;
            color: rgba(39, 45, 45, 0.7);
            text-decoration: underline;
        }
        .message {
            display: flex;
        }
        .errorMsg{
            margin-top: -5px;
            font-size: 20px;
            text-align: center;
            color: #218d4f;
        }
        .message-title {
            font-family: "Didact Gothic";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 26px;
            color: rgba(39, 45, 45, 0.7);
            text-decoration: underline;
        }
        .formOkMsg{
            font-size: 25px ;
            text-align: center;
        }
        .formOkMsg a{
            color: #218d4f;
            font-weight: 600;
        }

        .input-class {
            margin-top: -2px;
        }
        .name-class input {
            margin-top: -2px;
            width: 432px;
        }
        .input-message input {
            margin-top: -2px;
            width: 454px;
        }
        input {
            height: 26px;
            font-size: 20px;
            font-family: "Didact Gothic";
            font-style: normal;
            font-weight: 400;
            width: 532px;
            border: none;
            outline: none;
            border-bottom: 2px solid rgba(39, 45, 45, 0.65);
            background: #f6f8ff;
        }

        .button-6 {
            top: 40px;
            align-items: center;
            background-color: #272d2d;
            border: 4px solid rgba(39, 45, 45, 1);
            border-radius: 0.25rem;
            box-shadow: rgba(245, 245, 245, 0.788) 0 1px 3px 0;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-flex;
            font-family: "Jura";
            font-style: normal;
            font-size: 28px;
            line-height: 35px;
            text-transform: uppercase;
            color: #ffffff;
            text-align: center;
            justify-content: center;
            line-height: 1.25;
            margin: 0;
            min-height: 3rem;
            padding: calc(0.875rem - 1px) calc(1.5rem - 1px);
            position: relative;
            text-decoration: none;
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: 587px;
            height: 61px;
        }

        .button-6:hover,
        .button-6:focus {
            border-color: rgba(65, 62, 62, 0.514);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
        }

        .button-6:hover {
            transform: translateY(-1px);
        }

        .button-6:active {
            background-color: #f0f0f1;
            border-color: #f0f0f1;
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }

    </style>
    <title>Build company-Project</title>
</head>
<body>
<form class="home-input" action="/send_form" method="POST">
    @csrf
    <div class="name">
        <div class="name-title">Прізвище та ім'я:&nbsp </div>
        <div class="name-class"><input type="text" name="name" required></div>
    </div>
    <div class="email">
        <div class="email-title">Пошта:&nbsp </div>
        <div class="input-class"> <input type="email" name="email" placeholder="your_email@ukr.net" required></div>
    </div>
    <div class="message">
        <div class="message-title">Повідомлення:&nbsp;</div>
        <div class="input-message"><input type="text" name="text" required></div>
    </div>
    <div class="button"> <button class="button-6" type="submit">Відправити</button></div>
</form>

</body>
</html>
