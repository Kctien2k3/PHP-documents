<?php 
function show_array($data) {
    if (is_array($data)) {
        echo "<br>";
        print_r($data);
        echo "<br>";
    }
}
if (isset($_POST['btn_agr'])) {
    // show_array($_POST);
    if (empty($_POST['rules'])) {
        echo "please select a rule!";
    }else {
        $rules = $_POST['rules'];
        echo $rules;
    }
}
echo "<br>";
// cách thầy làm
if (isset($_POST['btn_agr'])) {
    if (isset($_POST['rules'])) {
        $rules = $_POST['rules'];
        echo $rules;
    }else {
        echo "please select a rule!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu từ checkbox</title>
</head>
<body>
    <p style="width: 400px; height: 100px; overflow-y: scroll">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ullam ipsa iste harum omnis assumenda ut hic praesentium odit, dolores repellendus? Vero soluta enim recusandae, fugit fuga voluptates animi laborum, laudantium iure hic modi voluptate error, veniam sit eligendi iste. Quis tempore totam soluta, consequatur consequuntur adipisci, corrupti fugit a dolor neque autem laboriosam facilis accusamus nam ab saepe voluptas cupiditate aspernatur! Corrupti maxime, temporibus cumque facilis velit rem cum? Iusto tempora veritatis harum, maiores consectetur, a cumque ducimus ipsum voluptate tenetur nobis repudiandae nulla ipsa suscipit dignissimos quam explicabo temporibus quidem. Architecto incidunt ipsum in quod aspernatur provident odit?</p>
    <form action="" method="POST">
        <input type="checkbox" name="rules" value="yes">
        <label for="rules">đồng ý!</label>
        <input type="submit" name="btn_agr" value="agree">
    </form>
</body>
</html>