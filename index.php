<?php

include './inc/connct.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" > 
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/photo03.png" alt="">
      <h1 class="display-4 fw-normal">اربح مع Ecoin</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح دورة مجانية </p>
    </div>
  <div class="container">
    <h3>للدخول في السحب يجب اتباع ما يلي : </h3>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">سنقوم ببث مباشر لمدة ساعة عبارة عن اسئلة و اجوبة حرة للجميع</li>
      <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وابميلك</li>
      <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد قاعدة البيانات بشكل عشوائي</li>
      <li class="list-group-item">الرابح سيحصل على دورة مجانية خاصة ببرمجة المواقع</li>
      <li class="list-group-item">شاهد البث المباشر على صفحتنا على فايسبوك بالتاريخ المذكور اعلاه</li>
    </ul>
  </div>
  </div> 

    <div class="container">

 <div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>الرجاء ادخال معلوماتك</h3>
      <div class="mb-3">
        <label for="firstName" class="form-label">الاسم الاول</label>
        <input type="text" name="firstName" id="firstName" class="form-control" value= "">
        <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
      </div>

      <div class="mb-3">
        <label for="lastName" class="form-label">الاسم الاخير</label>
        <input type="text" name="lastName" id="lastName" class="form-control" value= "">
        <div class="form-text error"><?php echo $errors['lasttNameError'] ?></div>
      </div>

      <div class="mb-3">
        <label for="validationDefaultUsername"  class="form-label">الايميل</label>
        <input type="text" name="email" id="email" class="form-control" value= "">
        <div class="form-text error"><?php echo $errors['emailError'] ?></div>
      </div>
      <input type="hidden" name="send" value="ok">
      <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
    </form>
    </div>
  </div>

  <div class="loader-con" id="result" style="display: none;">
      <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
      </div>
  </div>
 

  <!-- Button trigger modal -->
  <div class="d-grid gap-2 col-6 mx-auto my-5"> 
      <button type="button" id="winner" class="btn btn-primary" >
      اختيار الرابح
      </button>
  </div>
<!-- Modal -->
<!-- <div class="modal fade" id="model" tabindex="-1" aria-labelledby="modelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="modelLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php foreach ($users as $user) : ?>
                <h1 class="display-3 text-center modal-title " id="modelLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h1>
      <?php endforeach; ?>
    </div>
  </div>
</div> -->



<div class="modal" id="model" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modelLabel" >الرابح في المسابقة</h5>
        <button type="button" id="close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php foreach ($users as $user) : ?>
                <h1 class="display-3 text-center modal-title " id="modelLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h1>
      <?php endforeach; ?>
     
    </div>
  </div>
</div>




   <!-- <div id="cards" class="row mb-5 pb-5">
        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
                </div>
            </div>
        </div> 
</div> -->
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script> 
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/loader.js"></script>
    <script src="./js/confetti.js"></script> 
    <script src="./js/script.js"></script>
</body>