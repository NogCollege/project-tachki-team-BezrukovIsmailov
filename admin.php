<table>
    <tr>
        <th>id </th>
        <th>namee</th>
        <th>city</th>
        <th>cateauto</th>
        <th>fullname</th>
        <th>god</th>
        <th>typemot</th>
        <th>volume</th>
        <th>loshad</th>
        <th>max</th>
        <th>mid</th>
        <th>min</th>
        <th>fullopes</th>
        <th>delete</th>
    </tr>


<? 
    require_once('controllers/connect.php');

    if(!empty($_POST)){
        $namee = $_POST['namee'];
        $city = $_POST['city'];
        $cateauto = $_POST['cateauto'];
        $fullname = $_POST['fullname'];
        $god = $_POST['god'];
        $typemot = $_POST['typemot'];
        $volume = $_POST['volume'];
        $loshad = $_POST['loshad'];
        $max = $_POST['max'];
        $mid = $_POST['mid'];
        $min = $_POST['min'];
        $fullopes = $_POST['fullopes'];
    
        $query= "INSERT INTO catalogg SET namee= '$namee', city='$city', cateauto='$cateauto', fullname='$fullname', god='$god', typemot = '$typemot', volume = '$volume', loshad= '$loshad', max= '$max', mid= '$mid', min= '$min', fullopes= '$fullopes' ";

        require_once('controllers/create.php');

        mysqli_query($link, $query) or die (mysqli_error($link));
    }


    

    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $query = "INSERT INTO deleted SELECT * FROM catalogg WHERE id = $del";
        
        $query = "DELETE FROM catalogg WHERE id =$del";
        mysqli_query($link, $query) or die (mysqli_error($link));
    }

    $query = "SELECT * FROM catalogg";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    echo '<table>';
    
    $result = '';
    foreach($data as $elem) {
        $result .='<tr>';
        $result .='<td>' .$elem['namee']. '</td>';
        $result .='<td>' .$elem['city']. '</td>';
        $result .='<td>' .$elem['cateauto']. '</td>';
        $result .='<td>' .$elem['fullname']. '</td>';
        $result .='<td>' .$elem['god']. '</td>';
        $result .='<td>' .$elem['typemot']. '</td>';
        $result .='<td>' .$elem['volume']. '</td>';
        $result .='<td>' .$elem['loshad']. '</td>';
        $result .='<td>' .$elem['max']. '</td';
        $result .='<td>' .$elem['mid']. '</td';
        $result .='<td>' .$elem['min']. '</td';
        $result .='<td>' .$elem['fullopes']. '</td';
        $result .= '<td><a href="?del='.$elem['id'].'">удалить</a></td>';

        $result .='</tr>';
    }
    echo $result;
    echo '</table>';
?>

<form action="" method="POST">
    <input name="namee" >
    <input name="city">
    <input name="cateauto">
    <input name="fullname">
    <input name="god">
    <input name="typemot">
    <input name="volume">
    <input name="loshad">
    <input name="max">
    <input name="mid">
    <input name="min">
    <input name="fullopes">
    <input type="submit" value="добавить работника">
    

</form>