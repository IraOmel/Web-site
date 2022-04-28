<?php

class User_message
{
    public $errorMsg;

    public function __construct()
    {
        $this->errorMsg = "";
    }
}

class User_name extends User_message
{
    public $username;

    public function __construct($username)
    {
        parent::__construct();
        $this->username = $username;
    }

    function check_name()
    {
        foreach (explode(" ", $this->username) as $item) {
            if (!ctype_alpha($item) && !preg_match(("/^[\p{L}]+$/u"), $item)) {
                $this->errorMsg = 'Будь ласка, вкажіть своє ім\'я правильно';
            }
        }
    }
}

class User_email extends User_message
{
    public $user_mail;

    public function __construct($user_mail)
    {
        parent::__construct();
        $this->user_mail = htmlspecialchars($user_mail);
    }

    function validateEmail()
    {
        if (!filter_var($this->user_mail, FILTER_VALIDATE_EMAIL)) {
            $this->errorMsg = "E-mail адреса \"<b>" . $this->user_mail . "</b>\"неправильна <br>\n";
        }
    }
}

class User_text extends User_message
{
    public $user_text;

    public function __construct($user_text)
    {
        parent::__construct();
        $this->user_text = $user_text;
    }
    public function work_with_text(){
        if (strlen($this->user_text) > 200){
            $this->user_text = substr(strip_tags($this->user_text), 0, 200);
            $this->user_text = substr($this->user_text, 0, strrpos($this->user_text, ' '));
        }
    }

}

$NameOfUser = new User_message();
$Email = new User_message();
$Message = new User_message();

if (isset($_POST['submitForm'])) {
    $NameOfUser = new User_name($_POST['name']);
    $NameOfUser->check_name();
    $Email = new User_email($_POST['email']);
    $Email->validateEmail();
    $Message = new User_text($_POST['text']);
    if ($NameOfUser->errorMsg == '' && $Email->errorMsg == '') { ?>
        <div class="formOkMsg">
            <h3>Дякуємо! Ми отримали від вас такі дані:</h3>
            <p>Ваше ім'я: <?php echo $NameOfUser->username ?></p>
            <p>Ваш email: <?php echo $Email->user_mail; ?></p>
            <p>Ваше повідомлення: <?php
                $Message->work_with_text();
                echo $Message->user_text."..."; ?></p>
            <p><a href="get_request.php?page=cooperation">Повернутись</a> до заповнення форми</p>
        </div>
    <?php } ?>
<?php }

if(!isset($_POST['submitForm']) || $NameOfUser->errorMsg != '' || $Email->errorMsg != '') { ?>
<form class="home-input" action="get_request.php?page=cooperation" method="POST">
    <div class="errorMsg"><?php echo $NameOfUser->errorMsg; ?></div>
    <div class="name">
        <div class="name-title">Прізвище та ім'я:&nbsp</div>
        <div class="name-class"><input type="text" name="name" required></div>
    </div>
    <div class="errorMsg"><?php echo $Email->errorMsg; ?></div>
    <div class="email">
        <div class="email-title">Пошта:&nbsp</div>
        <div class="input-class"><input type="text" name="email" placeholder="your_email@ukr.net" required></div>
    </div>
    <div class="message">
        <div class="message-title">Повідомлення:&nbsp;</div>
        <div class="input-message"><input type="text" name="text" required></div>
    </div>
    <div class="button">
        <button class="button-6" type="submit" name="submitForm">Відправити</button>
    </div>
</form>
<?php } ?>