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

    $query = "SELECT * FROM catalogg";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    echo '<table>';
    foreach($data as $elem);{
        $result = '';
        $result .='<tr>';
        $result .='<td>' .$elem['namee']. '</td>';
        $result .='<td>' . $elem['city']. '</td>';
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
        $result .= '<td><a href="">удалить</a></td>';

        $result .='</tr>';
    }
    echo '</tr>'
?>
</table>