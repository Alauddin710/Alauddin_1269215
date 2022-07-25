
<?php include("header.php"); ?>
<?php //include("headerd.php");এই ভাবে যদি ফাইল নেম ভূল হয় তাহলে শুধু ্ এই পেজ বাদে সব পেজ দেখাবে requer ("headerd.php"); ভূল হয় তাহলে কোন পেজ দেখাবে না ইরর দেখাবে ?>
<!-- include -->
<?php //include("menu.php")?>
<?php //include("menu.php")?>
<!-- include_once -->
<?php include_once"menu.php";// এখানে যদি include_once"menu.php" থাকে তাহলেinclude_once"menu.php" যতবার ব্যবহার করা হবে পেজে একবারাই দেখাবে কিন্তু যদি  include "menu.php" থাকে তাহলে যতবার ব্যবাহর করা হবে ততবার মেনু দেখাবে পেজে ?>
<?php include_once"menu.php";?>
<?php //include "menu.php"; এখানে "" ব্যবহার করা যায় আবার () ব্যবহার করা যায়। ?>
<?php //include "menu.php";?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut vel officia similique ratione consectetur eveniet quae temporibus perspiciatis eos ullam esse, assumenda dolor animi sapiente soluta expedita, delectus dolorem sequi.</p>

<?php include("footer.php"); ?>