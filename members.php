
<?php include 'shared/header.php'; ?>
    <table>
        <thead>
            <tr>
                <th>Meno:</th>
                <th>Kategória:</th>
                <th>10km:</th>
                <th>polmaratón:</th>
                <th>maratón:</th>
            </tr>
        </thead>
        
        <tbody>
            
    <?php
        require "shared/database.php";

        //READ ALL ROW FROM DATABASE TABLE
        $sql = "SELECT * FROM member ORDER BY name";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        //READ DATA OF EACH ROW
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td data-cell='Meno'>" . $row["name" ] . "</td>
            <td data-cell='Kategória'>" . $row["category"] . "</td>
            <td data-cell='10km'>" . $row["10k"] . "</td>
            <td data-cell='Pólmaratón'>" . $row["half_marathon"] . "</td>
            <td data-cell='Maratón'> " . $row["marathon"] . "</td>
        </tr>";  
        }


            ?>
        </tbody>
    </table> 


<?php include 'shared/footer.php'; ?> 
