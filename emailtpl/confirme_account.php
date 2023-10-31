<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایید اگانت کاربری</title>
</head>
<body>
   <div>
       برای تایید اکانت خود بر روی لینگ زیر کلیل نمایید 
   </div> 
   <div>
       <a href="<?=getUriByAliensName('acceptEmail') . '?confirmed=' . $token?>">تایید ادرس ایمیل</a>
   </div>
</body>
</html>