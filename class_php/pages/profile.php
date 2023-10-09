<?php 
    session_start();

    require_once '../classes/house.php';

    require_once '../classes/user.php';
    error_reporting(0);


    
    
    if($_SESSION['g'] == 0) {
      $_SESSION['user'] = new User('user', 'qwerty227');
      $_SESSION['house'] = new House('', '' ,'');

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $year_birth = $_POST['year_birth'];

    $country = $_POST['country'];
    $city = $_POST['city'];
    $area = $_POST['area'];

    $house = new House($country, $city, $area);

    $user = new User('user', 'qwerty227');

    $user->NewInfo($firstName, $lastName, $phone, $year_birth);

    $_SESSION['user'] = $user;
    $_SESSION['house'] = $house;

    $_SESSION['g'] = 1;

    } 



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
  </head>
  <body>
    <h1>О себе</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label>Имя</label>
      <input type="text" required name="firstName" />

      <label>Фамилия</label>
      <input type="text" required name="lastName" />

      <label>Номер телефона</label>
      <input type="text" required name="phone" />

      <label>Год раждения</label>
      <input type="number" required name="year_birth" />

      <h1>Место жительство</h1>

      <label>Страна</label>
      <input type="text" required name="country" />

      <label>Город</label>
      <input type="text" required name="city" />

      <label>Район</label>
      <input type="text" required name="area" />

      <button type="submit">Отправить</button>
    </form>

    <h1>Найти пользователя по ID (0)</h1>

    <form action="../vendor/findUser.php" method="post">
      <label>Ведите ID</label>
      <input type="number" required name="id" />

      <button type="submit">Найти пользователя</button>
    </form>

    <?php 
        if(isset($_SESSION['success'])) {
            if($_SESSION['success'] === 'yes') {

                if(isset($_SESSION['user']) and $_SESSION['g'] == 1) {

    

                    $user = $_SESSION['user'];
                    print_r($user);

                    $house = $_SESSION['house'];
                    print_r($house);

                } 
                
            }
            

            unset($_SESSION['success']);
        } 
         if(isset($_SESSION['error'])) {

            echo '<h2>'. $_SESSION['error']. '</h2>';

            unset($_SESSION['error']);

        }

    ?>

        
 
  </body>
</html>
