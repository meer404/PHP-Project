<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>

    <?php include 'header.php'; ?>

    <link rel="stylesheet" href="styles/cv.css">


    
</head>
<body>
<div class="all">
<main>
    <label for=""><h1>فۆڕمی داوکاری کار</h1></label>
    <form method="POST" action="results.php" enctype="multipart/form-data" class="form1">
        <fieldset>
            <legend>زانیاری کەسی</legend>
            <label for="name">: ناوی تەواو</label><br>
            <input type="text" name="name" id="name"><br>
            
            <label for="email">: ئیمەیڵ</label><br>
            <input type="email" name="email" id="email"><br>
            
            <label for="tel">: ژمارەی تەلەفۆن</label><br>
            <input type="tel" name="tel" id="tel"><br>
            
            <label for="date">: بەرواری لەدایکبوون</label><br>
            <input type="date" name="date" id="date">
        </fieldset>

        <fieldset>
            <legend>تواناو بەهرەکانت</legend>
            <label for="">تواناکانت دیاری بکە:</label><br>
            <input type="checkbox" name="skills[]" value="پەرەپێدانی وێب">پەرەپێدانی وێب<br>
            <input type="checkbox" name="skills[]" value="دیزاین">دیزاین<br>
            <input type="checkbox" name="skills[]" value="پەرەپێدانی مۆبایل">پەرەپێدانی مۆبایل<br>
            <input type="checkbox" name="skills[]" value="پەرەپێدانی بەرنامەی دیسک تۆپ">پەرەپێدانی بەرنامەی دیسک تۆپ<br>
            <input type="checkbox" name="skills[]" value="سایبەر سکوێرێتی">سایبەر سکوێرێتی<br>
            <input type="checkbox" name="skills[]" value="پەرەپێدانی دەیتابەیس">پەرەپێدانی دەیتابەیس<br>
        </fieldset>

        <fieldset>
            <legend>مانەکانیکۆدنوسی کە دەیزانیتز</legend>
            <input type="checkbox" name="coding[]" value="جاڤا سکریپت">جاڤا سکریپت<br>
            <input type="checkbox" name="coding[]" value="پایثۆن">پایثۆن<br>
            <input type="checkbox" name="coding[]" value="جاڤا">جاڤا<br>
            <input type="checkbox" name="coding[]" value="سی شارب">سی شارب<br>
            <input type="checkbox" name="coding[]" value="فلۆتەر">فلۆتەر<br>
        </fieldset>

        <fieldset>
            <legend>زانیاری زیاتر</legend>
            <label for="zanyary">زانیاری زیاتر بنووسە</label><br>
            <textarea name="zanyary" rows="7.2" cols="50" placeholder="زانیاری زیاتر بنوسە"></textarea>
        </fieldset>

        <fieldset>
            <legend>پێشکەشکردنی داواکاری</legend>
            <input type="checkbox" name="dawakary" value="accepted" required>ڕازیم بە مەرجاکان
           
            <br><br>

            <input type="submit" value="پێشکەشکردنی داواکاری" name="submit">
            <input type="reset" value="سڕینەوەی زانیاریەکان">
            
        </fieldset>
    </form>
</main>
</div>

</body>
<?php include 'footer.php'; ?>
</html>
